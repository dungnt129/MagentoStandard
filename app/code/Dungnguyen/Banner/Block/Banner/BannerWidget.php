<?php
namespace Dungnguyen\Banner\Block\Banner;

use Magento\Framework\View\Element\Template;
use Magento\Widget\Block\BlockInterface;

/**
 * Banner images widget block
 * Class BannerWidget
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class BannerWidget extends Template implements BlockInterface
{
    /**
     * Default value for images count that will be shown
     */
    const DEFAULT_IMAGES_COUNT = 10;

    protected $bannerCollectionFactory;

    public function __construct(
        Template\Context $context,
        \Dungnguyen\Banner\Model\ResourceModel\Banner\CollectionFactory $bannerCollectionFactory,
        array $data = []
    ) {
        $this->setTemplate('widget.phtml');
        $this->bannerCollectionFactory = $bannerCollectionFactory;

        parent::__construct($context, $data);
    }

    /**
     * Retrieve how many images should be displayed
     *
     * @return int
     */
    public function getImagesCount()
    {
        if ($this->hasData('images_count')) {
            return $this->getData('images_count');
        }

        if (null === $this->getData('images_count')) {
            $this->setData('images_count', self::DEFAULT_IMAGES_COUNT);
        }

        return $this->getData('images_count');
    }

    /**
     * {@inheritdoc}
     */
    protected function _beforeToHtml()
    {
        $limit = $this->getImagesCount();

        // Init collection
        $collection = $this->bannerCollectionFactory->create();

        // Get enabled images
        $banners = $collection->addFieldToFilter('status', ['eq' => true])
            ->setOrder('id','desc')
            ->setPageSize($limit)
            ->setCurPage(1)
            ->getData();

        // Set data
        $this->setData('banners', $banners);
        $this->setData('mediaURL', $this->_storeManager->getStore()
                ->getBaseUrl(\Magento\Framework\UrlInterface::URL_TYPE_MEDIA) . 'banner/images/');

        // Return to View
        return parent::_beforeToHtml();
    }
}

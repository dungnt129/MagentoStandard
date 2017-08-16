<?php
/**
 *
 * Copyright © 2013-2017 Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Dungnguyen\Banner\Controller\Adminhtml\Index;

use Dungnguyen\Banner\Model\BannerFactory;
use Magento\Backend\App\Action;
use Magento\Framework\Controller\Result\JsonFactory;

class InlineEdit extends \Magento\Backend\App\Action
{
    /**
     * Authorization level of a basic admin session
     *
     * @see _isAllowed()
     */
    const ADMIN_RESOURCE = 'Dungnguyen_Banner::save';

    /**
     * @var \Magento\Framework\Controller\Result\JsonFactory
     */
    protected $jsonFactory;

    /**
     * @var \Dungnguyen\Banner\Model\BannerFactory
     */
    protected $bannerFactory;

    /**
     * @param Action\Context $context
     * @param \Magento\Framework\Controller\Result\JsonFactory $jsonFactory
     * @param Dungnguyen\Banner\Model\BannerFactory $bannerFactory
     */
    public function __construct(
        Action\Context $context,
        JsonFactory $jsonFactory,
        BannerFactory $bannerFactory
    ) {
        $this->jsonFactory = $jsonFactory;
        $this->bannerFactory = $bannerFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        $resultJson = $this->jsonFactory->create();
        $error = false;
        $messages = [];

        // Get Data
        $postItems = $this->getRequest()->getParam('items', []);

        foreach(array_keys($postItems) as $bannerId) {
            try {

                $banner = $this->bannerFactory->create();
                $banner->load($bannerId);
                $banner->setData($postItems[ (string) $bannerId]);
                $banner->save();

            } catch (\Exception $e) {
                $messages[] = __('Something went wrong');
                $error = true;
            }
        }

        return $resultJson->setData([
            'messages' => $messages,
            'error' => $error
        ]);
    }
}

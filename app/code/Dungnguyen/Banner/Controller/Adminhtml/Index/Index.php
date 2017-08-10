<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 8/7/2017
 * Time: 3:04 PM
 */
namespace Dungnguyen\Banner\Controller\Adminhtml\Index;

class Index extends \Magento\Backend\App\Action {

    /**
     * @var \Magento\Framework\View\Result\PageFactory
     */
    protected $resultPageFactory;

    /**
     * @param \Magento\Backend\App\Action\Context $context
     * @param \Magento\Framework\View\Result\PageFactory $resultPageFactory
     */
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory
    ) {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    }

    /**
     * @return \Magento\Backend\Model\View\Result\Page
     */
    public function execute()
    {
        /** @var \Magento\Backend\Model\View\Result\Page $resultPage */
        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu('Dungnguyen_Banner::banner_manager');
//        $resultPage->addBreadcrumb(__('Dashboard'), __('Dashboard'));
        $resultPage->getConfig()->getTitle()->prepend(__('Banner Manager'));

        return $resultPage;
    }

}
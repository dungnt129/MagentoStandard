<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 8/7/2017
 * Time: 3:04 PM
 */
namespace Dungnguyen\Bai1\Controller\Hello;

use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

class World extends \Magento\Framework\App\Action\Action {

    protected $pageFactory;

    public function __construct(Context $context, PageFactory $pageFactory)
    {
        $this->pageFactory = $pageFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        // Return view result
        return $this->pageFactory->create();
    }

}
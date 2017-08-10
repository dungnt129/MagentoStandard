<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 8/7/2017
 * Time: 3:04 PM
 */
namespace Dungnguyen\Banner\Controller\Index;

use Magento\Framework\App\Action\Context;

class Index extends \Magento\Framework\App\Action\Action {

    protected $bannerFactory;

    public function __construct(Context $context, \Dungnguyen\Banner\Model\BannerFactory $bannerFactory)
    {
        $this->bannerFactory = $bannerFactory;

        parent::__construct($context);
    }

    public function execute()
    {
        // Create model instance
        $banner = $this->bannerFactory->create();
        $collection = $banner->getCollection();

        // SELECT * FROM banner
        $data = $collection
                        ->addFieldToSelect(['id', 'image'])
                        ->addFieldToFilter('id', ['gt' => 20])
                        ->getData();

        print_r(json_encode($data));

        echo "Done";
    }

}
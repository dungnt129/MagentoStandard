<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 8/7/2017
 * Time: 3:04 PM
 */
namespace Dungnguyen\Bai2\Controller\Index;

use Magento\Framework\App\Action\Context;

class Index extends \Magento\Framework\App\Action\Action {

    protected $bannerFactory;

    public function __construct(Context $context, \Dungnguyen\Bai2\Model\BannerFactory $bannerFactory)
    {
        $this->bannerFactory = $bannerFactory;

        parent::__construct($context);
    }

    public function execute()
    {
        /*
         * Insert data
         */
//        $banner = $this->_objectManager->create('Dungnguyen\Bai2\Model\Banner');
//                $banner->addData([
//            'link'  =>  'banner link',
//            'image' =>  'avatar.png',
//            'sort_order'    => 1,
//            'status'    => true
//        ])->save();

        /**
         * Insert random data
         */
//        $extension = ['.png', '.jpg', '.gif'];
//        $url = ['https://www.google.com.vn/', 'http://www.w3schools.com/', 'https://techmaster.vn/'];
//
//        for ($i = 1; $i < 101; $i++) {
//            // Create new instance before insert
//            $banner = $this->_objectManager->create('Dungnguyen\Bai2\Model\Banner');
//
//            // Insert data
//            $banner->addData([
//                'link' => $url[rand(0, 2)],
//                'image' => 'image' . $i . $extension[rand(0, 2)],
//                'sort_order' => $i,
//                'status' => rand(0, 1)
//            ])->save();
//        }

        /*
         * Select Data
         */
//        $data = $banner->load(1);
//        print_r(json_encode($data->getData()));

        /*
         * Update Data
         */
//        $data->setImage("logo.png")->save();
//
//        print_r(json_encode($data->getData()));

        /*
         * Delete Data
         */
//        $data->delete();

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
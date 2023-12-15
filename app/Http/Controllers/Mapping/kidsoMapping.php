<?php

namespace App\Http\Controllers\Mapping;

use App\Http\Controllers\Mapping\Interfaces\MappingInterface;
use App\Models\ClientCategories;
use App\Models\FailedLinks;
use App\Models\ProductImages;
use App\Models\Products;
use JetBrains\PhpStorm\NoReturn;

class kidsoMapping implements MappingInterface
{


    public function parseData($links, $shopId): void
    {
        $parseController = new ParsingController($links, $shopId,  [
            'images' => '/<img class="js-qv-product-cover" data-image-medium-src="(\S+)"/ms',
            'title' => '/<h1 class="h1 single-product-name" itemprop="name">(.*?)<\/h1>/m',
            'price' =>  '/<meta property="product:price:amount" content="(\S+)">/>/m',
            'pricePromotion' =>  '//mix',
            'description' => '/<div class="tab-pane show active" id="description" role="tabpanel" aria-labelledby="home-tab">(.*?)<div class="video_url">/s',
            'categories_section' => '/<nav data-depth="4" class="breadcrumb hidden-sm-down">(.*?)<\/nav/s',
            'categories' => '/span itemprop="name" style="text-transform: none!important;">(.*?)<\/span>/s',
            'brand' =>  '//m',
            'imagelink' => "https://kidso.bg"

        ], $this);
    }

    public function getTitle($hteml)
    {
        // TODO: Implement getTitle() method.
    }

    public function getPrice($html)
    {
        // TODO: Implement getPrice() method.
    }

    public function getPricePromotion($html)
    {
        // TODO: Implement getPricePromotion() method.
    }

    public function getBrand($html)
    {
        // TODO: Implement getBrand() method.
    }

    public function getDesctiption($html)
    {
        // TODO: Implement getDesctiption() method.
    }

    public function getImages($html)
    {
        // TODO: Implement getImages() method.
    }

    public function getCategories($html)
    {
        // TODO: Implement getCategories() method.
    }
}

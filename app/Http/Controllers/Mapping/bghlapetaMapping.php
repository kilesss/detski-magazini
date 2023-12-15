<?php

namespace App\Http\Controllers\Mapping;

use App\Http\Controllers\Mapping\Interfaces\MappingInterface;
use App\Models\ClientCategories;
use App\Models\FailedLinks;
use App\Models\ProductImages;
use App\Models\Products;
use JetBrains\PhpStorm\NoReturn;

class bghlapetaMapping implements MappingInterface
{


    public function parseData($links, $shopId): void
    {
        $parseController = new ParsingController($links, $shopId,  [
            'images' => '/<span class="thumbnail" master-src="(\S+)"/ms',
            'title' => '/<meta property="og:title" content="(.*?)"\/>/ms',
            'price' =>  '/<span class="jet-price">(\S+)<\/span>/ms',
            'pricePromotion' =>  '//mix',
            'description' => '/<div class="tab-pane active" id="tab-description">(.*?)<div class="tab-pane" id="tab-specification">/ms',
            'categories_section' => '/<ul class="breadcrumb" itemscope itemtype="\S+">(.*?)<\/ul>/ms',
            'categories' => '/itemprop="name">(.*?)<\/span>/ms',
            'brand' =>  '/type":"Brand","name":"(.*?)"}/m',
            'imagelink' => ""
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

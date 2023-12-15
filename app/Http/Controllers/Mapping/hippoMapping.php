<?php

namespace App\Http\Controllers\Mapping;

use App\Http\Controllers\Mapping\Interfaces\MappingInterface;
use App\Models\ClientCategories;
use App\Models\FailedLinks;
use App\Models\ProductImages;
use App\Models\Products;
use JetBrains\PhpStorm\NoReturn;

class hippoMapping implements MappingInterface
{


    public function parseData($links, $shopId): void
    {
        $parseController = new ParsingController($links, $shopId,  [
            'images' => '/<img alt="main product photo" class="gallery-placeholder__image" src="(\S+)" \/>/m',
            'title' => '/ data-ui-id="page-title-wrapper">(.*?)<\/span>/mix',
            'price' =>  '/price_info":{"final_price":(\S+),"max_price/mix',
            'pricePromotion' =>  '//mix',
            'description' => '/class="product\sattribute\sdescription"(.*?)<div\sclass="additional-attributes/mxs',
            'categories_section' => '/<div class="breadcrumbs">(.*?)<li\s+class="item product/s',
            'categories' => '/itemprop="name">\n?\s?(.*?\s*)<\/span/mxs',
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

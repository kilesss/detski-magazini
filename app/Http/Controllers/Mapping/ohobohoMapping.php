<?php

namespace App\Http\Controllers\Mapping;

use App\Http\Controllers\Mapping\Interfaces\MappingInterface;
use App\Models\ClientCategories;
use App\Models\FailedLinks;
use App\Models\ProductImages;
use App\Models\Products;
use JetBrains\PhpStorm\NoReturn;

class ohobohoMapping implements MappingInterface
{


    public function parseData($links, $shopId): void
    {
        $parseController = new ParsingController($links, $shopId,  [
            'images' => '/<img class="ty-pict cm-image" id="det_img_43942657c7fe04ce71_80512" src="(\S+)" alt="" title=""><svg class="ty-pict__container"/su',
            'title' => '/<input type="hidden" name="product_data\[\d+\]\[name\]" value="(.*?)">/su',
            'price' =>  '/<input type="hidden" name="product_data\[\d+\]\[price\]" value="(\S+)">/s',
            'pricePromotion' =>  '//mix',
            'description' => '/<div id="content_description" class="ty-wysiwyg-content content-description">(.*?)<h3 class="tab-list-title"/su',
            'categories_section' => '/class="ty-breadcrumbs clearfix">(.*?)<\/div>/su',
            'categories' => '/<meta itemprop="name" content="(.*?)">/su',
            'brand' =>  '//m',
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

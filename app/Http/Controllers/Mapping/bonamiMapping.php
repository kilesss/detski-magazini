<?php

namespace App\Http\Controllers\Mapping;

use App\Http\Controllers\Mapping\Interfaces\MappingInterface;
use App\Models\ClientCategories;
use App\Models\FailedLinks;
use App\Models\ProductImages;
use App\Models\Products;
use JetBrains\PhpStorm\NoReturn;

class bonamiMapping implements MappingInterface
{


    public function parseData($links, $shopId): void
    {
        $parseController = new ParsingController($links, $shopId,  [
            'images' => '/href="(\S+)"\s+data-gallery="gallery"/mix',
            'title' => '/"name":(.*?)","des/m',
            'price' =>  '/<nobr>\s+<b>(\S+)<\/b>\s/mix',
            'pricePromotion' =>  '//mix',
            'description' => '/class="short-description">(.*?)<\/div>/mxs',
            'categories_section' => '/class="breadcrumbs\sdiff-breadcrumb"(.*?)<\/ul>/mxs',
            'categories' => '/">(.+?)<\//mxs',
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

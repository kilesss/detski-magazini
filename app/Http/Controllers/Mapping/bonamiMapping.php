<?php

namespace App\Http\Controllers\Mapping;

use App\Models\ClientCategories;
use App\Models\FailedLinks;
use App\Models\ProductImages;
use App\Models\Products;
use JetBrains\PhpStorm\NoReturn;

class bonamiMapping
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
            'brand' =>  '//m'

        ]);
    }

}

<?php

namespace App\Http\Controllers\Mapping;

use App\Models\ClientCategories;
use App\Models\FailedLinks;
use App\Models\ProductImages;
use App\Models\Products;
use JetBrains\PhpStorm\NoReturn;

class toysiMapping
{


    public function parseData($links, $shopId): void
    {
        $parseController = new ParsingController($links, $shopId,  [
            'images' => '/id="product-image-\S+" href="(\S+)"/su',
            'title' => '/<title>(.*?)\s*- toysi.bg<\/title>/su',
            'price' =>  '/itemprop="price">(\S+)<\/span>/su',
            'pricePromotion' => '//',
            'description' => '/itemprop="description"(.*?)<\/div>/su',
            'categories_section' => '/class="c-breadcrumb c-breadcrumb__list">(.*?)<div class="o-page-content"/su',
            'categories' => '/breadcrumb__item-link">(.*?)<\/a/su',
            'brand' =>  '//m'
        ]);
    }

}

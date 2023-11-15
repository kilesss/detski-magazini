<?php

namespace App\Http\Controllers\Mapping;

use App\Models\ClientCategories;
use App\Models\FailedLinks;
use App\Models\ProductImages;
use App\Models\Products;
use JetBrains\PhpStorm\NoReturn;

class RayatoysMapping
{


    public function parseData($links, $shopId): void
    {
        $parseController = new ParsingController($links, $shopId,  [
            'images' => '/<meta property="og:image" content="(\S+) \/>/m',
            'title' => '/<meta property="og:title" content="(.*?)" \/>/m',
            'price' =>  '/<meta property="product:price:amount" content="(.*?)" \/>/m',
            'pricePromotion' =>  '//mix',
            'description' => '/<div class="text-page" itemprop="description">\s*\t*(.*?)\s*<\/div>/s',
            'categories_section' => '/<ul class="items">(.*?)<\/ul>/s',
            'categories' => '/<span itemprop="name">\n*\s*(.*?)\s\s+<\/span>\n*\s+<meta itemprop="position" content="[1|2|3]"/s',
            'brand' =>  '//m'

        ], $this);
    }

}

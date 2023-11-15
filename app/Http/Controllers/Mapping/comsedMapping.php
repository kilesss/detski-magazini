<?php

namespace App\Http\Controllers\Mapping;

use App\Models\ClientCategories;
use App\Models\FailedLinks;
use App\Models\ProductImages;
use App\Models\Products;
use JetBrains\PhpStorm\NoReturn;

class comsedMapping
{


    public function parseData($links, $shopId): void
    {

        //TODO need to be changed
        $parseController = new ParsingController($links, $shopId,  [
            'images' => '/<div class="image-additional">\n*\s*<a class="thumbnail" href="(\S+)">/m',
            'title' => '/<h1 class="title">\n*\s*(.*?)<\/h1>/m',
            'price' =>  '/"price":"(\S+)",/m',
            'pricePromotion' =>  '//mix',
            'description' => '/id="description">(.*?)<span class="specification-text">/ms',
            'categories_section' => '/class="list-unstyled mt0">(.*?)<\/li>\n*\s*<\/ul>/ms',
            'categories' => '/(Категория:|Вид:)\n*\s*<span>\n*\s*<a href=\S+">(.*?)<\/a/ms',
            'brand' =>  '/Марка:\n*\s*<span>\n*\s*<a href=\S+">(.*?)<\/a/ms'

        ]);
    }

}

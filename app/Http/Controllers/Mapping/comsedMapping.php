<?php

namespace App\Http\Controllers\Mapping;

use App\Http\Controllers\Mapping\Extends\ParsingHelpers;
use App\Http\Controllers\Mapping\Interfaces\MappingInterface;
use App\Models\ClientCategories;
use App\Models\FailedLinks;
use App\Models\ProductImages;
use App\Models\Products;
use JetBrains\PhpStorm\NoReturn;

class comsedMapping implements MappingInterface
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
            'brand' =>  '/Марка:\n*\s*<span>\n*\s*<a href=\S+">(.*?)<\/a/ms',
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
        $parseController = new ParsingHelpers();
        preg_match_all('/class="list-unstyled mt0">(.*?)<\/li>\n*\s*<\/ul>/ms', $html, $matches, PREG_SET_ORDER, 0);
        if (isset($matches[0][1])) {
            $categoriesHtml = $matches[0][1];
            preg_match_all('/(Категория:|Вид:)\n*\s*<span>\n*\s*<a href=\S+">(.*?)<\/a/ms', $categoriesHtml, $matches2, PREG_SET_ORDER, 0);
            $catarr = [];
            foreach ($matches2 as $item) {
                $catarr[$parseController->translateToLatin($item[2])] = $item[2];
            }
            return $catarr;

        } else {
            FailedLinks::insert(['link' => $this->currentLink, 'type_fail' => 'empty categories']);
            return [];
        }
    }
}

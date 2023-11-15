<?php

namespace App\Http\Controllers\Mapping\Interfaces;

interface MappingInterface
{
    public function parseData($links, $shopId);
    public function getTitle($hteml);
    public function getPrice($html);
    public function getPricePromotion($html);
    public function getBrand($html);
    public function getDesctiption($html);
    public function getImages($html);
    public function getCategories($html);
}

<?php

namespace App\Http\Controllers\Mapping;

use App\Http\Controllers\Mapping\Extends\ParsingHelpers;
use App\Models\ClientCategories;
use App\Models\FailedLinks;
use App\Models\ProductImages;
use App\Models\Products;
use App\Models\ProductsForMapping;
use JetBrains\PhpStorm\NoReturn;

class ParsingController extends ParsingHelpers
{

    private string|bool $html;
    private array $categories = [];

    private string $categoryID;
    private string $currentProductId;


    private $master_id = 0;
    private $regex;

    private $masterInstance;

    public function __construct($links, $shopId, $regex, $instance)
    {

        $this->masterInstance = $instance;
        $this->regex = $regex;
        $this->getAndParseData($links, $shopId);
    }

    private $clientId;
    private $currentLink;

    private function getAndParseData($links, $shopId)
    {

        $this->clientId = $shopId;
        foreach ($links as $link) {
            ProductsForMapping::where('url', $link)->update(
                [
                    'mapped' => 1,
                ]);
            $this->currentLink = $link;
            $this->html = $this->getHtml($link);
            $this->getCategories();
            $this->addCategoriesToDB();
            $this->addProductToDB();
            $this->getImages();
        }
    }

    #[NoReturn] public function addCategoriesToDB()
    {


        $previous = '';
        foreach ($this->categories as $key => $cat) {
            if ($previous == '') {
                $ifExist = ClientCategories::where('latin_title', $key)
                    ->first();
                if ($ifExist == null) {
                    $insertCat = new ClientCategories;
                    $insertCat->latin_title = $key;
                    $insertCat->title = $key;
                    $insertCat->client_id = $this->clientId;
                    $insertCat->save();
//                    $this->master_id =$insertCat->id;
                } else {
//                    $this->master_id = $ifExist->master_id;
                }
            } else {
                $masterCat = ClientCategories::where('latin_title', $previous)
                    ->first();
                $cat = ClientCategories::where('latin_title', $key)
                    ->first();
                if ($cat == null) {
                    $insertCat = new ClientCategories;
                    $insertCat->latin_title = $key;
                    $insertCat->title = $key;
                    $insertCat->client_id = $this->clientId;

                    if ($masterCat != null) {
                        $insertCat->client_master_id = $masterCat->id;
                    }
                    $insertCat->save();
                } else {
//                    $this->master_id = $cat->master_id;
                }
            }
            $previous = $key;
        }

//        mysql> select count(id), client_id from product_for_mapping where mapped = 0 group by count(id);
//ERROR 1056 (42000): Can't group on 'count(id)'
//mysql> select count(id), client_id from product_for_mapping where mapped = 0 group by client_id;
//+-----------+-----------+
//| count(id) | client_id |
//+-----------+-----------+
//|     15219 |         1 |
//|       320 |         8 |
//|      1589 |         5 |
//|      4737 |         2 |
//+-----------+-----------+
//4 rows in set (0.13 sec)
        $last_id = ClientCategories::where('latin_title', array_key_last($this->categories))
            ->first();
        if ($last_id != null && $last_id->master_id != null) {
            $this->master_id = $last_id->master_id;

        }

        if ($last_id == null) {
            $this->categoryID = 0;
        } else {
            $this->categoryID = $last_id->id;
        }
    }

    public function addProductToDB(): void
    {
        if ($this->getTitle() != '') {
            $ifExist = Products::where('title', $this->getTitle())
                ->first();
            var_dump("---------------------", $this->getTitle(), '   ', $this->master_id, '----------- \n');
            if ($ifExist == null) {
                $insertProduct = new Products();
                $insertProduct->client_id = $this->clientId;
                $insertProduct->title = $this->getTitle();
                $insertProduct->price = floatval($this->getPrice());
                $insertProduct->price_promotion = $this->getPricePromotion();
                $insertProduct->brand = $this->getBrand();
                $insertProduct->description = $this->getDesctiption();
                $insertProduct->category_id = $this->categoryID;
                $insertProduct->link = $this->currentLink;
                $insertProduct->master_cat_id = $this->master_id;
                $insertProduct->save();
                $this->currentProductId = $insertProduct->id;
            } else {
                $this->currentProductId = $ifExist->id;
                Products::where('id', $ifExist->id)
                    ->update(
                        [
                            'client_id' => $this->clientId,
                            'title' => $this->getTitle(),
                            'price' => floatval($this->getPrice()),
                            'price_promotion' => $this->getPricePromotion(),
                            'brand' => $this->getBrand(),
                            'description' => $this->getDesctiption(),
                            'category_id' => $this->categoryID
                        ]);
            }
        }
    }

    public function getHtml($link): bool|string
    {
        try {
            return @file_get_contents($link);
        } catch (Exception $e) {
            echo $e->getMessage();
            var_dump($this->currentLink);
        }

    }

    public function getImages(): void
    {
        if ($responce = $this->masterInstance->getImages($this->html)) {
            $this->images = $responce;
        }
        preg_match_all($this->regex['images'], $this->html, $matches, PREG_SET_ORDER, 0);
        $links = [];

        foreach ($matches as $match) {
            if (isset($match[1])) {
                $links[] = [
                    'product_id' => $this->currentProductId,
                    'image_url' => $this->regex['imagelink'].$match[1]
                ];
            }
        }

        $ifExist = Products::where('title', $this->getTitle())
            ->first();
        if ($ifExist != null) {
            ProductImages::where('product_id', $this->currentProductId)->delete();
        }
        ProductImages::insert($links);

        $this->images = $links;
    }

    public function getTitle(): string
    {

        if ($responce = $this->masterInstance->getTitle($this->html)) {
            return $responce;
        }
        preg_match_all($this->regex['title'], $this->html, $matches, PREG_SET_ORDER, 0);

        if (isset($matches[0][1])) {
            return $matches[0][1];
        } else {
            FailedLinks::insert(['link' => $this->currentLink, 'type_fail' => 'no title']);
            return ' ';
        }

    }

    public function getPrice(): string
    {

        if ($responce = $this->masterInstance->getPrice($this->html)) {
            return $responce;
        }
        preg_match_all($this->regex['price'], $this->html, $matches, PREG_SET_ORDER, 0);

        if (isset($matches[0][1])) {
            return $matches[0][1];
        } else {
            FailedLinks::insert(['link' => $this->currentLink, 'type_fail' => 'no price']);
            return '';
        }
    }

    public function getPricePromotion(): string
    {
        if ($responce = $this->masterInstance->getPricePromotion($this->html)) {
            return $responce;
        }
        preg_match_all($this->regex['pricePromotion'], $this->html, $matches, PREG_SET_ORDER, 0);

        if (isset($matches[0][1])) {
            return $matches[0][1];
        } else {
            return '';
        }
    }

    public function getDesctiption(): string
    {
        if ($responce = $this->masterInstance->getDesctiption($this->html)) {
            return $responce;
        }
        preg_match_all($this->regex['description'], $this->html, $matches, PREG_SET_ORDER, 0);

        if (isset($matches[0][1])) {
            return $matches[0][1];
        } else {
            FailedLinks::insert(['link' => $this->currentLink, 'type_fail' => 'empty description']);
            return '';

        }

    }

    public function getCategories()
    {
        if ($responce = $this->masterInstance->getCategories($this->html)) {
            $this->categories = $responce;
        } else {


            preg_match_all($this->regex['categories_section'], $this->html, $matches, PREG_SET_ORDER, 0);
            if (isset($matches[0][1])) {
                $categoriesHtml = $matches[0][1];
                preg_match_all($this->regex['categories'], $categoriesHtml, $matches2, PREG_SET_ORDER, 0);
                $catarr = [];
                foreach ($matches2 as $item) {
                    $catarr[$this->translateToLatin($item[1])] = $item[1];
                }
                $this->categories = $catarr;

            } else {
                FailedLinks::insert(['link' => $this->currentLink, 'type_fail' => 'empty categories']);
                return '';
            }
        }

    }

    function getItem(&$array, $path)
    {
        $target = &$array;
        foreach ($path as $key) {
            if (array_key_exists($key, $target))
                $target = &$target[$key];
            else return false;
        }
        return $target;
    }

    public function getBrand(): string
    {
        if ($responce = $this->masterInstance->getBrand($this->html)) {
            return $responce;
        }
        preg_match_all($this->regex['brand'], $this->html, $matches, PREG_SET_ORDER, 0);

        if (isset($matches[0][1])) {
            return $matches[0][1];
        } else {
            return '';
        }
    }


}

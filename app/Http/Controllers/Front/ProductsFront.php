<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Categories;
use App\Http\Controllers\Products;
use App\Models\CheckedProducts;
use Illuminate\Support\Facades\DB;
use JetBrains\PhpStorm\NoReturn;

class ProductsFront
{

    #[NoReturn] public function getProductsJson($page, $title = '', $categoryID = '')
    {
        $product = new Products();
        $categories = new Categories();
        return json_encode($categories->getFormatCategories());

    }

    public function getRandomProduct($count)
    {
        return \App\Models\Products::whereNotNull('master_cat_id')->select('product.id', 'title', 'price', 'image_url')->join('products_images', 'product.id', 'products_images.product_id')->inRandomOrder()->limit($count)->get()->toArray();
    }

    public function getMostCheckedProducts($count)
    {
        return CheckedProducts::select('product.id', 'title', 'price', 'image_url')
            ->limit($count)
            ->orderBy('count', 'desc')
            ->join('product', 'product.id', 'checked_products.product_id')
            ->join('products_images', 'products_images.product_id', 'checked_products.product_id')
            ->get()->toArray();
    }

}


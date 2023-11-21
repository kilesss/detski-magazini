<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class Products
{

    public function getPoductsPagination($title = '', $category=0, $page = 1, $sort = '', $shopId= 0)
    {

        if ($sort == ''){
            $sort = 'nameLow';
        }
        $productsDBQuery = DB::table('products_images')
            ->leftJoin('product', 'product.id', '=', 'products_images.product_id')
            ->select('product.id', 'title', 'price', 'products_images.image_url', 'description');

        if ($shopId != 0){
            $productsDBQuery->where('client_id', $shopId);
        }
        if ($category != 0){
            $productsDBQuery->where('product.master_cat_id', $category);

        }
        if ($title != '') {
            $productsDBQuery->where('title', 'like', '%'.$title.'%');
        }
        if ($sort == 'nameLow'){
            $productsDBQuery -> orderBy('title');
        }elseif ($sort == 'nameHigh'){
            $productsDBQuery -> orderBy('title', 'desc');

        }elseif ($sort == 'priceLow'){
            $productsDBQuery -> orderBy('price');

        }elseif ($sort == 'priceHigh'){
            $productsDBQuery -> orderBy('price', 'desc');

        }

        $count = $productsDBQuery->count();
        $result = $productsDBQuery
            ->take(15)->skip(($page-1)*15)->get()->toArray();

        return [
            'items' => $result,
            'currentPage' => $page,
            'total' => $count,
            'lastPage' => intval(ceil( $count/15)),

        ];

    }
}


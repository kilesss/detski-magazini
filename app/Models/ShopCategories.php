<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ShopCategories extends Model
{
    protected $table = 'shop_categories';
    public $timestamps = false;

    public static function getShopCats($id){
       return DB::table('shop_categories')
            ->select('shop_categories.*', 'categories.title as parent_title' )
            ->leftJoin('categories', 'shop_categories.cat_id', '=', 'categories.id')
           ->where('shop_id', $id)
           ->get();

    }
}



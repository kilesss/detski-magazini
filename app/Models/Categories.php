<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Categories extends Model
{
    protected $table = 'categories';
    public $timestamps = false;
    public static function getShopCats($id): \Illuminate\Support\Collection
    {
        return DB::table('categories')
            ->select('categories.*', 'categories.title as parent_title' )
            ->leftJoin('categories', 'categories.cat_id', '=', 'categories.id')
            ->where('shop_id', $id)
            ->get();

    }

}

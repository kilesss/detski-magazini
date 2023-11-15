<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CheckedProducts extends Model
{
    use HasFactory;
    protected $table = 'checked_products';
    public $timestamps = false;


    public function updateProduct($product_id){
       $ifExist =  DB::table($this->table)->select('count')->where('product_id', $product_id)->first();
       if ($ifExist == null){
           CheckedProducts::insert(['product_id'=>$product_id, 'count' => 1]);
       }else{
           CheckedProducts::where('product_id', $product_id)
               ->update(['count' => $ifExist->count+1]);
       }
    }



}

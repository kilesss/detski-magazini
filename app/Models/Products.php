<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $table = 'product';
    protected $fillable = [
        'client_id',
        'title',
       'price',
        'brand',
        'description',
        'category_id',
        'link',
        'master_cat_id'
    ];
    public $timestamps = false;
}

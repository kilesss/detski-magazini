<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductsForMapping extends Model
{
    use HasFactory;
    protected $table = 'product_for_mapping';
    protected $fillable = [
        'client_id',
        'url',
        'mapped'
    ];
    public $timestamps = false;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FailedLinks extends Model
{
    use HasFactory;
    protected $table = 'failed_links';
    protected $fillable = [
        'link',
        'type_fail'
    ];
    public $timestamps = false;

}

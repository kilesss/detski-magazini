<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function getClientLogos(){

        return Clients::select('logo', 'url', 'id')->get()->toArray();
    }

}

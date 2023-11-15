<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Categories;
use App\Models\Clients;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

public function view($view, $prop = []){
    $clients = new Clients();

    $properties = $prop;
    $categoriesInst = new Categories();
    $categories = $categoriesInst->getFormatCategories();
    $properties['categories'] = $categories;
    $properties['clients'] =$clients->getClientLogos();

    return view($view, $properties);
}
}

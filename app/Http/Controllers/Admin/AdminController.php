<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Front\Controller;

class AdminController extends Controller
{

    public function view($view, $data = [])
    {


//        $categories = DB::table('recipe_categories')->get();
//        $metadata = $this->metadata();
//
//        $data['popularRecipe'] = RecipesVisitedCount::getTopSix();
//        $data['categories'] = $categories;
//        $ads = $this->adsMenus('menu');
//        $ads = array_merge($ads, $this->adsMenus($view));
//        $ads = array_merge($ads, $this->adsMenus('rightMenu'));
//        $ads = array_merge($ads, $this->adsMenus('leftMenu'));
//
//        $data['ads'] = $ads;
////        dd($ads);
//        $data = array_merge($data,$metadata);
        return view($view, $data);
    }
}

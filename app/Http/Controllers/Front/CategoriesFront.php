<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Categories;

class CategoriesFront
{

    public function getCategoriesJson(){
        $categories = new Categories();
        return json_encode($categories->getFormatCategories());

    }

}


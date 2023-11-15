<?php

namespace App\Http\Controllers\Admin;

use App\Attributes;
use App\AttributesValues;
use App\Http\Controllers\Categories;
use App\Http\Controllers\Front\CategoriesFront;
use App\Models\ProductImages;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductCategorisedController extends AdminController
{

    public function productsCategorised(){
        $cats = new Categories();
        $categories = $cats->getFormatCategories();
        $prod = Products::orderBy('title')->where('master_cat_id', null)->where('client_id', 1)->orderBy('title')->first()->toArray();
        $countProducts = Products::orderBy('title')->where('master_cat_id', null)->where('client_id', 1)->count();
        $image = ProductImages::orderBy('id')->where('product_id', $prod['id'])->first()->toArray();
        //TODO add image
        return view('admin.productsCat', ['categories' => $categories, 'product' => $prod, 'image' => $image['image_url'], 'count' => $countProducts]);
    }

    public function productsCategorisedSubmit()
    {
        Products::where('id', \request('product_id'))
            ->update(['master_cat_id' => \request('category_id')]);
        return redirect('admin/products-categorised');
    }

}

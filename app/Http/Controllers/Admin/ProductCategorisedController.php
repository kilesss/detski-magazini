<?php

namespace App\Http\Controllers\Admin;

use App\Attributes;
use App\AttributesValues;
use App\Http\Controllers\Categories;
use App\Http\Controllers\Front\CategoriesFront;
use App\Jobs\DownloadProducts;
use App\Models\ProductImages;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;

class ProductCategorisedController extends AdminController
{

    public function productsCategorised(){
        $cats = new Categories();
        $categories = $cats->getFormatCategories();
        $prod = Products::orderBy('title')->where('master_cat_id', null)->orWhere('master_cat_id', 0)->orderBy('title')->first();
        if ($prod != null) {
            $prod = $prod->toArray();

            $countProducts = Products::orderBy('title')->where('master_cat_id', null)->where('client_id', 1)->count();
            $image = ProductImages::orderBy('id')->where('product_id', $prod['id'])->first();
            if ($image != null) {
                $image = $image->toArray();
            }
            return view('admin.productsCat', ['categories' => $categories, 'product' => $prod, 'image' => $image['image_url'], 'count' => $countProducts]);

        }
        return view('admin.productsCat', ['categories' => $categories, 'product' => [], 'image' => '', 'count' => 0]);

        //TODO add image
    }

    public function productsCategorisedSubmit()
    {
        Products::where('id', \request('product_id'))
            ->update(['master_cat_id' => \request('category_id')]);
        return redirect('admin/products-categorised');
    }


    public function productParsing(){
        return view('admin.productParsing');
    }

    public function downloadProductsList(){

//        DownloadProducts::dispatch();
        dispatch(new DownloadProducts());
        dd('ok')
        ;

    }
    public function downloadProducts(){
        Artisan::queue('app:parse-sitemaps', ['sitemapname' => 'comsed', 'shopId' => 2]);

        Artisan::queue('app:parse-sitemaps', ['sitemapname' => 'hippo' , 'shopId' => 1]);
        Artisan::queue('app:parse-sitemaps', ['sitemapname' => 'Rayatoys', 'shopId' => 8]);
        Artisan::queue('app:parse-sitemaps', ['sitemapname' => 'vegatoys', 'shopId' => 5]);
    }
}

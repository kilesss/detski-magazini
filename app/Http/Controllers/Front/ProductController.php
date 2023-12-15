<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Products;
use App\Models\CheckedProducts;
use App\Models\Clients;
use App\Models\ProductImages;

class ProductController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getProduct($id)
    {
        $productCount = new CheckedProducts();
        $productCount->updateProduct($id);
        $t = new ProductsFront();
        $t->getRandomProduct(9);
        $products =  \App\Models\Products::where('id', $id)->first()->toArray();
        dd($products);
        $client = Clients::where('id', $products['client_id'])->first()->toArray();
        return $this->view('product', [
            'client' => $client,
            'product' =>$products,
            'images' => ProductImages::where('product_id', $id)->get()->toArray()
        ]);
    }

    public function updateProductId(){
        \App\Models\Products::where('id', request()->id)->update(['master_cat_id' => request()->category]);
    }
}

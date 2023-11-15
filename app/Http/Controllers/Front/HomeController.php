<?php

namespace App\Http\Controllers\Front;

use App\Models\Clients;

class HomeController extends Controller
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
    public function index()
    {

        $product = new ProductsFront();

        return $this->view('home', [
            'mostChecked' => $product->getMostCheckedProducts(8),
            'randomProd' => $product->getRandomProduct(8),
            'randomProd2' => $product->getRandomProduct(8),
            'randomProd3' => $product->getRandomProduct(8),
            ]);
    }
}

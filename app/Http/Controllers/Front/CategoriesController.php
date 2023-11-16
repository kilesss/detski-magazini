<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Products;
use App\Models\CategoriesForMapping;

class CategoriesController extends Controller
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
    public function getCategory($id, $page = 1, $filter = '', $shopId=0)
    {
        $productsInstance = new Products();
        $params = $productsInstance->getPoductsPagination('', $id, $page, $filter, $shopId);
        $params['categoryID']= $id;
        $params['filter'] = $filter;
        $params['categoriesMapping'] = CategoriesForMapping::join('categories', 'categories.id', 'categories_for_mapping.category_id')->orderBy('categories.title')->get()->toArray();

        return $this->view('category', $params);
    }

    public function postSearch( $page=1, $filter=''){
        $productsInstance = new Products();
        if (request()->search == null){
            return redirect('/');
        }
        $params = $productsInstance->getPoductsPagination(request()->search, 0, $page, $filter);
        $params['search'] = request()->search;
        return $this->view('search', $params);
//        '/search/{string}/{page?}/{filter?}
    }
    public function getSearch($search, $page=1, $filter=''){
        $productsInstance = new Products();
        $params = $productsInstance->getPoductsPagination($search, 0, $page, $filter);
        $params['search'] = $search;
        return $this->view('search', $params);
//        '/search/{string}/{page?}/{filter?}
    }
}

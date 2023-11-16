<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Categories;
use App\Models\CategoriesForMapping;
use App\Models\ClientCategories;
use App\Models\Products;
use App\PhysicalStore;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function React\Promise\all;

class CategoriesController extends AdminController
{
    public function categories(){
        return $this->view('admin.categories', ['categories' =>Categories::all()]);

    }
    public function categoriesSubmit(){
        $categories = new Categories();
        if (\request('id') != 0){
            $categories= Categories::where(['id' => \request('id')]);
            $categories->id = \request('id');
        }
        $categories->title = \request('title');
        $categories->master_id = \request('parent_cat');
        if($categories->exists() && $categories->id != 0){
            $categories->update((array)json_decode(json_encode($categories)));
        }else{
            $categories->save();
        }

        return redirect('admin/categories');


    }

    public function categoriesMappingProducts(){
        $cats = new Categories();

        $categories = $cats->getFormatCategories();
        $categoriesForMapping = CategoriesForMapping::join('categories', 'categories.id', 'categories_for_mapping.category_id')->orderBy('categories.title')->get()->toArray();
        return view('admin.categoriesMappingProducts', ['categories' => $categories, 'cat_mapping' => $categoriesForMapping]);

    }

    public function categoriesMappingProductsUpdate(){
        if (\request()->type == 'add'){
            $r = CategoriesForMapping::insert(['category_id' => \request() -> id]);
        }elseif (\request()->type == 'all'){
            $allCategories = \App\Models\Categories::all()->toArray();
            foreach ($allCategories as $c){
                $r = CategoriesForMapping::insert(['category_id' => $c['id']]);

            }
        }elseif (\request()->type == 'delete'){
            DB::table('categories_for_mapping')->delete();

        }else{
            $r = CategoriesForMapping::where('category_id' ,\request()->id) -> delete();

        }
    }
    public function categoriesPhysical($id){
        $cc = new ClientCategories();
        ;
        return $this->view('admin.categoriesPhysical', [
            'id23'=>$id,
            'categories' => Categories::orderBy('title')->get(),
            'shop_cat' => $cc->clientCategories($id)
        ]);

    }
    public function categoriesPhysicalSubmit($id){
        $categories = new ClientCategories();
        if (\request('cat_id') != 0){
            $categories= ClientCategories::where(['id' => \request('cat_id')]);
            $categories->id = \request('cat_id');
        }
        $categories->client_id = $id;
        $categories->link = \request('url');
        $categories->title = \request('title');
        $categories->master_id = \request('parent_cat');
        if($categories->exists() && $categories->id != 0){
            $categories->update((array)json_decode(json_encode($categories)));
        }else{
            $categories->save();
        }

        Products::where('category_id', \request('cat_id'))
            ->update(['master_cat_id' => request('parent_cat')]);

        return redirect('admin/categories/'.$id);

}

}

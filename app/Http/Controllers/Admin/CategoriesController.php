<?php

namespace App\Http\Controllers\Admin;

use App\Models\Categories;
use App\Models\ClientCategories;
use App\Models\Products;
use App\PhysicalStore;
use Illuminate\Http\Request;
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

<?php

namespace App\Http\Controllers\Admin;

use App\Models\Clients;
use App\PhysicalStore;
use App\Models\Shops;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShopsController extends AdminController
{
    public function shops($id = null){

        $shops = new Clients();

        if ($id !== null){
            return json_encode($shops::all()->where('id', $id)->first()->toArray());
        }
        return $this->view('admin.shops', ['shops' => $shops::all()]);

    }

    public function localShops($id,$json = null){

        $shops = new PhysicalStore();
        if ($json !== null){
            return json_encode($shops::all()->where('id', $id)->first()->toArray());

        }

        return $this->view('admin.localShops',['shops'=>$shops::all()->where('shop_id', $id)->toArray()]);

    }

    public function localShopsSubmit($id){
        if (\request('id_phisical') && \request('id_phisical') != null){
            $shops = PhysicalStore::where(['id'=> \request('id_phisical')]);
            $shops->id = \request('id_phisical');
        }else{
            $shops = new PhysicalStore();
        }
        $shops->shop_id = $id;
        $shops->title = \request('title');
        $shops->adress = \request('address');
        $shops->working_time = \request('working_time');
        $shops->email = \request('email');
        $shops->phone = \request('phones');
        $shops->image = \request('images');
        $shops->google = \request('google_url');
        if($shops->exists() && $shops->id !== null){
            $shops->update((array)json_decode(json_encode($shops)));
        }else{
            $shops->save();
        }
        return redirect('admin/local-shops/'.$id);
    }
    public function shopsSubmit(){
        $shopsModel = new Clients();
        $shopsModel->title = \request()->title;
        $shopsModel->url = \request()->url;
        $shopsModel->logo = \request()->logo;
        $shopsModel->save();
        return redirect('admin/shops');
    }


}

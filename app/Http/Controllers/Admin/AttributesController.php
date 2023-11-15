<?php

namespace App\Http\Controllers\Admin;

use App\Attributes;
use App\AttributesValues;
use App\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AttributesController extends AdminController
{
    public function attributes(){

        return $this->view('admin.attributes',['attributes' => Attributes::all()]);

    }

    public function attributesSubmit(){
//        array:5 [▼
//  "_token" => "DxHmRIgaNPnkq8RhaxqrlUlmO90cBfbUsiwllyPX"
//  "id" => null
//  "title" => "rrrr"
//  "amount" => "sdafsadfsf"
//  "amounts" => array:3 [▼
//    0 => "eeee"
//    1 => "eeeesfdsdfsdf"
//    2 => "sdafsadfsf"
//  ]
//]

        $attributes = new Attributes();
        if (\request('id') != null){
            $attributes= Attributes::where(['id' => \request('id')]);
            $attributes->id = \request('id');
        }
        $attributes->title = \request('title');
        if($attributes->exists() && $attributes->id != 0){
            $attributes->update((array)json_decode(json_encode($attributes)));
            $attributesValues = new AttributesValues();
            $attributesValues= AttributesValues::where(['master_id' => \request('id')]);
            $attributesValues->delete();
            foreach (\request('amounts') as $am) {
                $attributesValues = new AttributesValues();
                $attributesValues->master_id = request('id');
                $attributesValues->value = $am;
                $attributesValues->save();
            }
        }else{
            $attributes->save();
            foreach (\request('amounts') as $am){
                $attributesValues = new AttributesValues();
                $attributesValues->master_id = $attributes->id;
                $attributesValues->value = $am;
                $attributesValues->save();

            }
        }
        dd(\request()->all());
    }

    public function getAttributesValues($id){
        $attr = AttributesValues::where(['master_id' =>$id]);
        return json_encode($attr->get());

    }

    public function deleteAttributesValues($id){

        $attr = AttributesValues::where(['id' =>$id]);
        $attr->delete();
    }

}

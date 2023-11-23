<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ClientCategories extends Model
{
    use HasFactory;

    /**
     * @var mixed|string
     */
    protected $table = 'client_categories';
    protected $fillable = [
        'latin_title',
        'client_master_id',
        'master_id',
        'title',
        'client_id',
    ];
    public $timestamps = false;


    public function clientCategories($client_id){
        $allCategories = DB::table($this->table)->where('client_id', $client_id)->get()->toArray();
        foreach ($allCategories as $key =>  $cat){
            if ($cat->client_master_id != null ){
                $allCategories[$key]->master_title = DB::table($this->table)->select('latin_title')->where('id', $cat->client_master_id)->first()->latin_title;
            }
        }
        return $allCategories;
    }

}


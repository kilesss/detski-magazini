<?php

namespace App\Console\Commands;

use App\Models\ClientCategories;
use App\Models\Products;
use App\Models\ProductsForMapping;
use Faker\Core\File;
use Illuminate\Console\Command;

class MapCategories extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:map-categories';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update product categories from client categories mapping';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $clientCatFormatted = [];
        $clientCategories = ClientCategories::select('id', 'master_id')->whereNot('master_id',0)->whereNotNull('master_id')->get()->toArray();
        foreach ($clientCategories as $c){
            $clientCatFormatted[$c['id']] = $c['master_id'];
        }
        $products = Products::select('id', 'category_id')->whereNull('master_cat_id')->get()->toArray();
        foreach ($products as $prod){
            echo $prod['id']."\n";
            if (isset($clientCatFormatted[$prod['category_id']])){

            Products::where('id', $prod['id'])->update(
                [
                    'master_cat_id' => $clientCatFormatted[$prod['category_id']],
                ]);
            }

        }
    }
}

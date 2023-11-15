<?php

namespace App\Console\Commands;

use App\Models\Clients;
use App\Models\FailedLinks;
use App\Models\ProductsForMapping;
use Faker\Core\File;
use Illuminate\Console\Command;

class HippolandProducts extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:hippolands-products';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */

    public function handle()
    {

        $i = true;
        $k = 1;
        while ($i == true){
           $i =  $this->getProducts('https://www.hippoland.net/produkti?p='.$k);
            $k++;
            echo $k."\n";
        }
    }

    function getProducts($link)
    {
        $html = file_get_contents($link);

        preg_match_all('/<a class="product-name-link" href="(\S+)">/ms', $html, $matches, PREG_SET_ORDER, 0);

        if (isset($matches[0][1])) {

            foreach ($matches as $m){
                $exist = ProductsForMapping::where('url',$m[1])->first();
                if ($exist == null){
                    ProductsForMapping::insert(['url'=>$m[1], 'client_id' => 1]);
                }
                echo $m[1]."\n";
            }
            return true;
        } else {
            return false;

        }
    }


}

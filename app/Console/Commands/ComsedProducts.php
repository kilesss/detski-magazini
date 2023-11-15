<?php

namespace App\Console\Commands;

use App\Models\Clients;
use App\Models\FailedLinks;
use App\Models\ProductsForMapping;
use Faker\Core\File;
use Illuminate\Console\Command;

class ComsedProducts extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:comset-products';

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
           $i =  $this->getProducts('https://comsed.net/%D0%B2%D1%81%D0%B8%D1%87%D0%BA%D0%B8/page-'.$k);

            $k++;
            echo $k."\n";
        }
    }

    function getProducts($link)
    {
        $html = file_get_contents($link);
        preg_match_all('/<a href="(\S+)" class="thumbnail">/ms', $html, $matches, PREG_SET_ORDER, 0);
        if (isset($matches[0][1])) {

            foreach ($matches as $m){
                ProductsForMapping::insert(['url'=>$m[1], 'client_id' => 2]);
                echo $m[1]."\n";
            }
            return true;
        } else {
            return false;

        }
    }


}

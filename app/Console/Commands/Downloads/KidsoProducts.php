<?php

namespace App\Console\Commands\Downloads;

use App\Console\Commands\Components\getProductsTrait;
use App\Models\ProductsForMapping;
use Illuminate\Console\Command;

class KidsoProducts extends Command
{
    use getProductsTrait;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:kidso-products';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Download Kidso Products';

    /**
     * Execute the console command.
     */

    public function handle()
    {
        $categoryLinks = [
            'https://kidso.bg/bebeta/?page=',

        ];

        $i = true;
        foreach ($categoryLinks as $link){
            $k = 1;
            $i = true;
            while ($i == true){
                echo "+++++++++++++++++++++++++++++++".$link. '   '.$k."\n";

                $i = $this->getProducts($link . $k, '/class="thumbnail-container">\s*<a href="(\S+)" class="thumbnail product-thumbnail" title="/ms', 9, "");
                $k++;
//                echo $k."\n";
            }

        }
        $this->parseData(9, 'kidso');


    }


}

<?php

namespace App\Console\Commands\Downloads;

use App\Console\Commands\Components\getProductsTrait;
use App\Models\ProductsForMapping;
use Illuminate\Console\Command;

class ToysiProducts extends Command
{
    use getProductsTrait;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:toysi-products';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Download Toysi Products';

    /**
     * Execute the console command.
     */

    public function handle()
    {
        $categoryLinks = [
            'https://toysi.bg/category/263/detski-igrachki.html?page=',
            'https://toysi.bg/category/222/igrachki-na-otkrito.html?page=',
            'https://toysi.bg/category/443/detski-igri.html?page=',

        ];

        $i = true;
        foreach ($categoryLinks as $link){
            $k = 1;
            $i = true;
            while ($i == true){
                echo "+++++++++++++++++++++++++++++++".$link. '   '.$k."\n";

                $i = $this->getProducts($link . $k, '/<a class="c-product-grid__product-title-link js-has-data-productId"\s*\n*href="(\S+)"/ms', 7, "https://toysi.bg");
                $k++;
//                echo $k."\n";
            }

        }
        $this->parseData(7, 'toysi');


    }


}

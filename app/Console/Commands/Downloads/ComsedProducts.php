<?php

namespace App\Console\Commands\Downloads;

use App\Console\Commands\Components\getProductsTrait;
use App\Models\ProductsForMapping;
use Illuminate\Console\Command;

class ComsedProducts extends Command
{
    use getProductsTrait;

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
    protected $description = 'Download comsed products';

    /**
     * Execute the console command.
     */

    public function handle()
    {

        $i = true;
        $k = 1;
        while ($i == true){
                $i =  $this->getProducts('https://comsed.net/%D0%B2%D1%81%D0%B8%D1%87%D0%BA%D0%B8/page-'.$k,'/<a href="(\S+)" class="thumbnail">/m', 2 ,'');

            $k++;
            echo $k."\n";
        }
        $this->parseData(2, 'comsed');

    }

}

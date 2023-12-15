<?php

namespace App\Console\Commands\Downloads;

use App\Console\Commands\Components\getProductsTrait;
use Illuminate\Console\Command;

class RayatoysProducts extends Command
{
    use getProductsTrait;
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:rayatoys-products';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Download Rayatoys Products';

    /**
     * Execute the console command.
     */

    public function handle()
    {
        $categoryLinks = [
            'https://rayatoys.com/bebeshki-stoki?p=',
            'https://rayatoys.com/detski-igrachki?p=',
            'https://rayatoys.com/detski-drehi?p=',
            'https://rayatoys.com/za-uchenika?p=',
            'https://rayatoys.com/detski-igrachki/igrachki-za-navan?p=',
        ];

        $i = true;
        foreach ($categoryLinks as $link){
            $k = 1;
            $i = true;
            while ($i == true){
                echo "+++++++++++++++++++++++++++++++".$link. '   '.$k."\n";

                $i =  $this->getProducts($link.$k,'/href="(\S+)"\s*class="product photo product-item-photo"/s', 8,"" );
                $k++;
//                echo $k."\n";
            }

        }
        $this->parseData(8, 'rayatoys');

    }




}

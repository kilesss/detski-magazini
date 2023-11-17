<?php

namespace App\Console\Commands;

use App\Console\Commands\Components\getProductsTrait;
use App\Models\Clients;
use App\Models\FailedLinks;
use App\Models\ProductsForMapping;
use Faker\Core\File;
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
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */

    public function handle()
    {
        $categoryLinks = [
            'https://rayatoys.com/bebeshki-stoki/bebeshki-kolichki?p=',
            'https://rayatoys.com/bebeshki-stoki?p=',
            'https://rayatoys.com/bebeshki-stoki/detski-stolcheta-za-kola?p=',
            'https://rayatoys.com/bebeshki-stoki/obzavezhdane-za-detska-staq?p=',
            'https://rayatoys.com/detski-igrachki?p=',
            'https://rayatoys.com/detski-drehi?p=',
            'https://rayatoys.com/za-uchenika?p=',
            'https://rayatoys.com/detski-igrachki/igrachki-za-navan?p=',
        ];

        $i = true;
        $k = 1;
        foreach ($categoryLinks as $link){
            while ($i == true){
                $i =  $this->getProducts($link.$k,'/href="(\S+)"\s*class="product photo product-item-photo"/s', 8,"" );
                $k++;
                echo $k."\n";
            }

        }

    }




}

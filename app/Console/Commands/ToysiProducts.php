<?php

namespace App\Console\Commands;

use App\Console\Commands\Components\getProductsTrait;
use App\Models\Clients;
use App\Models\FailedLinks;
use App\Models\ProductsForMapping;
use Faker\Core\File;
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
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */

    public function handle()
    {

        $i = true;
        $k = 1;
        while ($i == true){
           $i =  $this->getProducts('https://toysi.bg/category/263/detski-igrachki.html?page='.$k,'/js-has-data-productId"\n*\s*href="(\S+)" data/ms', 7,'https://toysi.bg' );

            $k++;
            echo $k."\n";
        }
    }




}

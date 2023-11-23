<?php

namespace App\Console\Commands;

use App\Console\Commands\Components\getProductsTrait;
use App\Models\Clients;
use App\Models\FailedLinks;
use App\Models\ProductsForMapping;
use Faker\Core\File;
use Illuminate\Console\Command;

class BonamiProducts extends Command
{
    use getProductsTrait;
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:bonami-products';

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
           $i =  $this->getProducts('https://www.bonami.bg/c/za-deca?p='.$k,'/<a class="\n*\s*ProductCard_card__Dpw4_\n*\s*" href="(.*?)">/m', 4 ,'https://www.bonami.bg');

            $k++;
            echo $k."\n";
        }
    }




}

<?php

namespace App\Console\Commands\Downloads;

use App\Console\Commands\Components\getProductsTrait;
use App\Models\ProductsForMapping;
use Illuminate\Console\Command;

class OhoBohoProducts extends Command
{
    use getProductsTrait;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:ohoboho-products';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Download Oho Boho Products';

    /**
     * Execute the console command.
     */

    public function handle()
    {
        $categoryLinks = [
            'https://ohoboho.com/bebeshki-kolichki/page-',
            'https://ohoboho.com/stolcheta-za-kola/page-',
            'https://ohoboho.com/moduli-za-kolichki-i-razhodka/page-',
            'https://ohoboho.com/detski-trikolki/page-',
            'https://ohoboho.com/kenguru-i-slingove/page-',
            'https://ohoboho.com/akumulatorni-koli/page-',
            'https://ohoboho.com/uredi/page-',
            'https://ohoboho.com/banya-i-higiena/page-',
            'https://ohoboho.com/obzavejdane-i-staya/page-',
            'https://ohoboho.com/maichinstvo-i-bremennost/page-',
            'https://ohoboho.com/prohojdane-i-igra/page-',
            'https://ohoboho.com/hranene/page-',
            'https://ohoboho.com/kolela-koli-trikolki-i-sheini/page-',
            'https://ohoboho.com/detski-ploshtadki-i-parzalki/page-',
            'https://ohoboho.com/naduvaemi-baseini/page-',
            'https://ohoboho.com/lyato-more-i-plaj/page-',
            'https://ohoboho.com/sportni-igrachki-i-aksesoari/page-',
            'https://ohoboho.com/akumulatorni-koli/page-',
            'https://ohoboho.com/detski-sheini/page-',
            'https://ohoboho.com/figuri-i-geroi/page-',
            'https://ohoboho.com/domakinstvo-i-profesii/page-',
            'https://ohoboho.com/igri-i-pazeli/page-',
            'https://ohoboho.com/interaktivni-i-plyusheni-igrachki/page-',
            'https://ohoboho.com/konstruktori-i-stroitelstvo/page-',
            'https://ohoboho.com/kukli-i-bebeta/page-',
            'https://ohoboho.com/obuchenie-i-razvitie/page-',
            'https://ohoboho.com/igrachki/momicheta/page-',
            'https://ohoboho.com/igrachki/momcheta/page-',

        ];

        $i = true;
        foreach ($categoryLinks as $link){
            $k = 1;
            $i = true;
            while ($i == true){
                echo "+++++++++++++++++++++++++++++++".$link. '   '.$k."\n";

                $i = $this->getProducts($link . $k, '/productDataIndex\[\'(\S+)\'\]\[\'prod/m', 11, "");
                $k++;
//                echo $k."\n";
            }

        }
        $this->parseData(11, 'ohoboho');


    }


}

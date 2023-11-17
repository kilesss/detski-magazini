<?php

namespace App\Console\Commands;

use App\Console\Commands\Components\getProductsTrait;
use App\Models\Clients;
use App\Models\FailedLinks;
use App\Models\ProductsForMapping;
use Faker\Core\File;
use Illuminate\Console\Command;

class VegatoysProducts extends Command
{
    use getProductsTrait;
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:vegatoys-products';

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
            'https://vegatoys.com/bg/%D0%94%D0%B5%D1%82%D1%81%D0%BA%D0%B8-%D0%BA%D0%BE%D0%BB%D0%B5%D0%BB%D0%B0/c37.html',
            'https://vegatoys.com/bg/%D0%91%D0%B5%D0%B1%D0%B5%D1%88%D0%BA%D0%B8-%D0%B0%D1%80%D1%82%D0%B8%D0%BA%D1%83%D0%BB%D0%B8/c6.html',
            'https://vegatoys.com/bg/%D0%91%D0%B5%D0%B1%D0%B5%D1%88%D0%BA%D0%B8-%D0%B0%D1%80%D1%82%D0%B8%D0%BA%D1%83%D0%BB%D0%B8/c6.html?page=2',
            'https://vegatoys.com/bg/%D0%91%D0%B5%D0%B1%D0%B5%D1%88%D0%BA%D0%B8-%D0%B0%D1%80%D1%82%D0%B8%D0%BA%D1%83%D0%BB%D0%B8/c6.html?page=3',
            'https://vegatoys.com/bg/%D0%91%D0%B5%D0%B1%D0%B5%D1%88%D0%BA%D0%B8-%D0%B0%D1%80%D1%82%D0%B8%D0%BA%D1%83%D0%BB%D0%B8/c6.html?page=4',
            'https://vegatoys.com/bg/%D0%94%D0%B5%D1%82%D1%81%D0%BA%D0%B8-%D0%BC%D0%B0%D1%81%D0%B8-%D1%81%D1%82%D0%BE%D0%BB%D1%87%D0%B5%D1%82%D0%B0-%D0%B8-%D1%82%D0%B0%D0%B1%D1%83%D1%80%D0%B5%D1%82%D0%BA%D0%B8/c35.html',
            'https://vegatoys.com/bg/%D0%9A%D1%80%D0%B0%D0%BA%D0%BE%D0%BC%D0%BE%D0%B1%D0%B8%D0%BB%D0%B8-%D0%BA%D1%80%D0%B0%D0%BA%D0%BE%D0%BC%D0%BE%D1%82%D0%BE%D1%80%D0%B8-%D0%B0%D0%BA%D1%83%D0%BC%D1%83%D0%BB%D0%B0%D1%82%D0%BE%D1%80%D0%BD%D0%B8-%D0%BA%D0%BE%D0%BB%D0%B8-%D0%B8-%D0%BC%D0%BE%D1%82%D0%BE%D1%80%D0%B8/c11.html',
            'https://vegatoys.com/bg/%D0%9B%D0%BE%D0%B3%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B8-%D0%B8%D0%B3%D1%80%D0%B8/c16.html',
            'https://vegatoys.com/bg/%D0%9B%D0%BE%D0%B3%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B8-%D0%B8%D0%B3%D1%80%D0%B8/c16.html?orderBy=new&page=2&filterPriceMin=1%20%D0%BB%D0%B2.&filterPriceMax=35%20%D0%BB%D0%B2.&priceMin=1&priceMax=35',
            'https://vegatoys.com/bg/%D0%9B%D0%BE%D0%B3%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B8-%D0%B8%D0%B3%D1%80%D0%B8/c16.html?orderBy=new&page=3&filterPriceMin=1%20%D0%BB%D0%B2.&filterPriceMax=34%20%D0%BB%D0%B2.&priceMin=1&priceMax=34',
            'https://vegatoys.com/bg/%D0%9E%D1%80%D1%8A%D0%B6%D0%B8%D1%8F/c19/2.html',
            'https://vegatoys.com/bg/%D0%9E%D1%80%D1%8A%D0%B6%D0%B8%D1%8F/c19/1.html',
            'https://vegatoys.com/bg/%D0%9F%D1%8A%D0%B7%D0%B5%D0%BB%D0%B8/c22.html',
            'https://vegatoys.com/bg/%D0%9F%D1%8A%D0%B7%D0%B5%D0%BB%D0%B8/c22/2.html',
            'https://vegatoys.com/bg/%D0%A1%D0%B0%D0%BC%D0%BE%D0%BB%D0%B5%D1%82%D0%B8-%D0%B8-%D1%85%D0%B5%D0%BB%D0%B8%D0%BA%D0%BE%D0%BF%D1%82%D0%B5%D1%80%D0%B8/c25.html',
            'https://vegatoys.com/bg/%D0%A1%D1%82%D1%80%D0%BE%D0%B8%D1%82%D0%B5%D0%BB%D0%BD%D0%B8-%D0%B8-%D0%B7%D0%B5%D0%BC%D0%B5%D0%B4%D0%B5%D0%BB%D1%81%D0%BA%D0%B8-%D0%BC%D0%B0%D1%88%D0%B8%D0%BD%D0%B8/c28.html',
            'https://vegatoys.com/bg/%D0%A2%D0%BE%D1%80%D0%B1%D0%B8%D1%87%D0%BA%D0%B8-%D0%B7%D0%B0-%D0%BF%D0%BE%D0%B4%D0%B0%D1%80%D1%8A%D0%BA-%D0%BF%D0%BE%D0%B4%D0%B0%D1%80%D1%8A%D1%87%D0%BD%D0%B8-%D1%85%D0%B0%D1%80%D1%82%D0%B8%D0%B8/c31.html',
            'https://vegatoys.com/bg/%D0%A2%D1%80%D0%BE%D1%82%D0%B8%D0%BD%D0%B5%D1%82%D0%BA%D0%B8/c38.html',
            'https://vegatoys.com/bg/%D0%92%D0%BB%D0%B0%D0%BA%D0%BE%D0%B2%D0%B5-%D0%B8-%D0%BB%D0%BE%D0%BA%D0%BE%D0%BC%D0%BE%D1%82%D0%B8%D0%B2%D0%B8/c7.html',
            'https://vegatoys.com/bg/%D0%94%D1%8A%D1%80%D0%B2%D0%B5%D0%BD%D0%B8-%D0%B8%D0%B3%D1%80%D0%B0%D1%87%D0%BA%D0%B8/c9.html',
            'https://vegatoys.com/bg/%D0%94%D1%8A%D1%80%D0%B2%D0%B5%D0%BD%D0%B8-%D0%B8%D0%B3%D1%80%D0%B0%D1%87%D0%BA%D0%B8/c9/2.html',
            'https://vegatoys.com/bg/%D0%9A%D0%BE%D0%BC%D0%BF%D0%BB%D0%B5%D0%BA%D1%82%D0%B8-%D0%B4%D0%B5%D1%82%D1%81%D0%BA%D0%B8-%D0%B8%D0%B3%D1%80%D0%B0%D1%87%D0%BA%D0%B8-%D0%B7%D0%B0-%D0%BC%D0%BE%D0%BC%D0%B8%D1%87%D0%B5%D1%82%D0%B0/c12.html',
            'https://vegatoys.com/bg/%D0%9A%D0%BE%D0%BC%D0%BF%D0%BB%D0%B5%D0%BA%D1%82%D0%B8-%D0%B4%D0%B5%D1%82%D1%81%D0%BA%D0%B8-%D0%B8%D0%B3%D1%80%D0%B0%D1%87%D0%BA%D0%B8-%D0%B7%D0%B0-%D0%BC%D0%BE%D0%BC%D0%B8%D1%87%D0%B5%D1%82%D0%B0/c12/1.html',
            'https://vegatoys.com/bg/%D0%9A%D0%BE%D0%BC%D0%BF%D0%BB%D0%B5%D0%BA%D1%82%D0%B8-%D0%B4%D0%B5%D1%82%D1%81%D0%BA%D0%B8-%D0%B8%D0%B3%D1%80%D0%B0%D1%87%D0%BA%D0%B8-%D0%B7%D0%B0-%D0%BC%D0%BE%D0%BC%D0%B8%D1%87%D0%B5%D1%82%D0%B0/c12/2.html',
            'https://vegatoys.com/bg/%D0%9A%D0%BE%D0%BC%D0%BF%D0%BB%D0%B5%D0%BA%D1%82%D0%B8-%D0%B4%D0%B5%D1%82%D1%81%D0%BA%D0%B8-%D0%B8%D0%B3%D1%80%D0%B0%D1%87%D0%BA%D0%B8-%D0%B7%D0%B0-%D0%BC%D0%BE%D0%BC%D0%B8%D1%87%D0%B5%D1%82%D0%B0/c12/3.html',
            'https://vegatoys.com/bg/%D0%9A%D0%BE%D0%BC%D0%BF%D0%BB%D0%B5%D0%BA%D1%82%D0%B8-%D0%B4%D0%B5%D1%82%D1%81%D0%BA%D0%B8-%D0%B8%D0%B3%D1%80%D0%B0%D1%87%D0%BA%D0%B8-%D0%B7%D0%B0-%D0%BC%D0%BE%D0%BC%D0%B8%D1%87%D0%B5%D1%82%D0%B0/c12/4.html',
            'https://vegatoys.com/bg/%D0%9A%D0%BE%D0%BC%D0%BF%D0%BB%D0%B5%D0%BA%D1%82%D0%B8-%D0%B4%D0%B5%D1%82%D1%81%D0%BA%D0%B8-%D0%B8%D0%B3%D1%80%D0%B0%D1%87%D0%BA%D0%B8-%D0%B7%D0%B0-%D0%BC%D0%BE%D0%BC%D0%B8%D1%87%D0%B5%D1%82%D0%B0/c12/5.html',
            'https://vegatoys.com/bg/%D0%9A%D0%BE%D0%BC%D0%BF%D0%BB%D0%B5%D0%BA%D1%82%D0%B8-%D0%B4%D0%B5%D1%82%D1%81%D0%BA%D0%B8-%D0%B8%D0%B3%D1%80%D0%B0%D1%87%D0%BA%D0%B8-%D0%B7%D0%B0-%D0%BC%D0%BE%D0%BC%D0%B8%D1%87%D0%B5%D1%82%D0%B0/c12/6.html',
            'https://vegatoys.com/bg/%D0%9A%D0%BE%D0%BD%D1%81%D1%82%D1%80%D1%83%D0%BA%D1%82%D0%BE%D1%80%D0%B8/c14.html',
            'https://vegatoys.com/bg/%D0%9A%D0%BE%D0%BD%D1%81%D1%82%D1%80%D1%83%D0%BA%D1%82%D0%BE%D1%80%D0%B8/c14/2.html',
            'https://vegatoys.com/bg/%D0%9A%D0%BE%D0%BD%D1%81%D1%82%D1%80%D1%83%D0%BA%D1%82%D0%BE%D1%80%D0%B8/c14/3.html',
            'https://vegatoys.com/bg/%D0%9C%D1%83%D0%B7%D0%B8%D0%BA%D0%B0%D0%BB%D0%BD%D0%B8-%D0%B8%D0%B3%D1%80%D0%B0%D1%87%D0%BA%D0%B8/c17.html',
            'https://vegatoys.com/bg/%D0%9F%D0%BB%D0%B0%D0%B6%D0%BD%D0%B8-%D0%B0%D1%80%D1%82%D0%B8%D0%BA%D1%83%D0%BB%D0%B8/c20.html',
            'https://vegatoys.com/bg/%D0%9F%D0%BB%D0%B0%D0%B6%D0%BD%D0%B8-%D0%B0%D1%80%D1%82%D0%B8%D0%BA%D1%83%D0%BB%D0%B8/c20/2.html',
            'https://vegatoys.com/bg/%D0%A0%D0%B0%D0%B4%D0%B8%D0%BE%D1%83%D0%BF%D1%80%D0%B0%D0%B2%D0%BB%D1%8F%D0%B5%D0%BC%D0%B8-%D0%B8%D0%B3%D1%80%D0%B0%D1%87%D0%BA%D0%B8/c23.html',
            'https://vegatoys.com/bg/%D0%A0%D0%B0%D0%B4%D0%B8%D0%BE%D1%83%D0%BF%D1%80%D0%B0%D0%B2%D0%BB%D1%8F%D0%B5%D0%BC%D0%B8-%D0%B8%D0%B3%D1%80%D0%B0%D1%87%D0%BA%D0%B8/c23/2.html',
            'https://vegatoys.com/bg/%D0%A1%D0%BA%D0%B5%D0%B9%D1%82%D0%B1%D0%BE%D1%80%D0%B4%D0%BE%D0%B2%D0%B5-%D1%80%D0%BE%D0%BB%D0%B5%D1%80%D0%B8-%D1%85%D0%BE%D0%B2%D1%8A%D1%80%D0%B1%D0%BE%D1%80%D0%B4%D0%B8/c26.html',
            'https://vegatoys.com/bg/%D0%A2%D0%B5%D0%B0%D1%82%D1%80%D0%B0%D0%BB%D0%BD%D0%B8-%D0%BA%D0%BE%D1%81%D1%82%D1%8E%D0%BC%D0%B8/c29.html',
            'https://vegatoys.com/bg/%D0%94%D1%80%D1%83%D0%B3%D0%B8/c8.html',
            'https://vegatoys.com/bg/%D0%94%D1%80%D1%83%D0%B3%D0%B8/c8/2.html',
            'https://vegatoys.com/bg/%D0%90%D0%B2%D1%82%D0%BE%D0%BC%D0%BE%D0%B1%D0%B8%D0%BB%D0%B8-%D0%BC%D0%BE%D1%82%D0%BE%D1%80%D0%B8-%D0%B4%D0%B6%D0%B8%D0%BF%D0%BE%D0%B2%D0%B5-%D0%BA%D0%B0%D0%BC%D0%B8%D0%BE%D0%BD%D0%B8/c4.html',
            'https://vegatoys.com/bg/%D0%90%D0%B2%D1%82%D0%BE%D0%BC%D0%BE%D0%B1%D0%B8%D0%BB%D0%B8-%D0%BC%D0%BE%D1%82%D0%BE%D1%80%D0%B8-%D0%B4%D0%B6%D0%B8%D0%BF%D0%BE%D0%B2%D0%B5-%D0%BA%D0%B0%D0%BC%D0%B8%D0%BE%D0%BD%D0%B8/c4/2.html',
            'https://vegatoys.com/bg/%D0%94%D0%B5%D1%82%D1%81%D0%BA%D0%B8-%D1%80%D0%B0%D0%BD%D0%B8%D1%86%D0%B8-%D0%B8-%D1%87%D0%B0%D0%BD%D1%82%D0%B8/c33.html',
            'https://vegatoys.com/bg/%D0%94%D0%B5%D1%82%D1%81%D0%BA%D0%B8-%D1%80%D0%B0%D0%BD%D0%B8%D1%86%D0%B8-%D0%B8-%D1%87%D0%B0%D0%BD%D1%82%D0%B8/c33/2.html',
            'https://vegatoys.com/bg/%D0%96%D0%B8%D0%B2%D0%BE%D1%82%D0%BD%D0%B8/c10.html',
            'https://vegatoys.com/bg/%D0%96%D0%B8%D0%B2%D0%BE%D1%82%D0%BD%D0%B8/c10/2.html',
            'https://vegatoys.com/bg/%D0%9A%D0%BE%D0%BC%D0%BF%D0%BB%D0%B5%D0%BA%D1%82%D0%B8-%D0%B7%D0%B0-%D0%BC%D0%BE%D0%BC%D1%87%D0%B5%D1%82%D0%B0/c13.html',
            'https://vegatoys.com/bg/%D0%9A%D0%BE%D0%BC%D0%BF%D0%BB%D0%B5%D0%BA%D1%82%D0%B8-%D0%B7%D0%B0-%D0%BC%D0%BE%D0%BC%D1%87%D0%B5%D1%82%D0%B0/c13/3.html',
            'https://vegatoys.com/bg/%D0%9A%D1%83%D0%BA%D0%BB%D0%B8/c15.html',
            'https://vegatoys.com/bg/%D0%9A%D1%83%D0%BA%D0%BB%D0%B8/c15/2.html',
            'https://vegatoys.com/bg/%D0%9C%D1%83%D0%B7%D0%B8%D0%BA%D0%B0%D0%BB%D0%BD%D0%B8-%D0%B8%D0%BD%D1%81%D1%82%D1%80%D1%83%D0%BC%D0%B5%D0%BD%D1%82%D0%B8/c18.html',
            'https://vegatoys.com/bg/%D0%9F%D0%BE%D0%B7%D0%B4%D1%80%D0%B0%D0%B2%D0%B8%D1%82%D0%B5%D0%BB%D0%BD%D0%B8-%D0%BA%D0%B0%D1%80%D1%82%D0%B8%D1%87%D0%BA%D0%B8/c34.html',
            'https://vegatoys.com/bg/%D0%9F%D0%BE%D0%B7%D0%B4%D1%80%D0%B0%D0%B2%D0%B8%D1%82%D0%B5%D0%BB%D0%BD%D0%B8-%D0%BA%D0%B0%D1%80%D1%82%D0%B8%D1%87%D0%BA%D0%B8/c34/2.html',
            'https://vegatoys.com/bg/%D0%9F%D0%BE%D0%B7%D0%B4%D1%80%D0%B0%D0%B2%D0%B8%D1%82%D0%B5%D0%BB%D0%BD%D0%B8-%D0%BA%D0%B0%D1%80%D1%82%D0%B8%D1%87%D0%BA%D0%B8/c34/3.html',
            'https://vegatoys.com/bg/%D0%A0%D0%B8%D1%81%D1%83%D0%B2%D0%B0%D1%82%D0%B5%D0%BB%D0%BD%D0%B8-%D0%B8%D0%B3%D1%80%D0%B8/c24.html',
            'https://vegatoys.com/bg/%D0%A0%D0%B8%D1%81%D1%83%D0%B2%D0%B0%D1%82%D0%B5%D0%BB%D0%BD%D0%B8-%D0%B8%D0%B3%D1%80%D0%B8/c24/2.html',
            'https://vegatoys.com/bg/%D0%A0%D0%B8%D1%81%D1%83%D0%B2%D0%B0%D1%82%D0%B5%D0%BB%D0%BD%D0%B8-%D0%B8%D0%B3%D1%80%D0%B8/c24/3.html',
            'https://vegatoys.com/bg/%D0%A1%D0%BF%D0%BE%D1%80%D1%82%D0%BD%D0%B8-%D0%B8%D0%B3%D1%80%D0%B8/c27.html',
            'https://vegatoys.com/bg/%D0%A1%D0%BF%D0%BE%D1%80%D1%82%D0%BD%D0%B8-%D0%B8%D0%B3%D1%80%D0%B8/c27/2.html',
            'https://vegatoys.com/bg/%D0%A1%D0%BF%D0%BE%D1%80%D1%82%D0%BD%D0%B8-%D0%B8%D0%B3%D1%80%D0%B8/c27/3.html',
            'https://vegatoys.com/bg/%D0%A1%D0%BF%D0%BE%D1%80%D1%82%D0%BD%D0%B8-%D0%B8%D0%B3%D1%80%D0%B8/c27/4.html',
            'https://vegatoys.com/bg/%D0%A1%D0%BF%D0%BE%D1%80%D1%82%D0%BD%D0%B8-%D0%B8%D0%B3%D1%80%D0%B8/c27/5.html',
            'https://vegatoys.com/bg/%D0%A2%D1%80%D0%B0%D0%BD%D1%81%D1%84%D0%BE%D1%80%D0%BC%D0%B5%D1%80%D0%B8-%D0%B8-%D1%80%D0%BE%D0%B1%D0%BE%D1%82%D0%B8/c30.html',
            'https://vegatoys.com/bg/%D0%91%D0%B0%D1%82%D0%B5%D1%80%D0%B8%D0%B8/c5.html',
        ];

        $i = true;
        $k = 1;
        foreach ($categoryLinks as $link){
           $i =  $this->getProducts($link,'/class="product-wrapper">\n*\s*<a href="(\S*)" title/m', 5,"" );

            $k++;
            echo $k."\n";
        }


    }




}

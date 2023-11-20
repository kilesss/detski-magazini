<?php

namespace App\Console\Commands;

use App\Models\ProductsForMapping;
use Faker\Core\File;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class downloadAllProducts extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:download-all-products';

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
        Artisan::call('app:parse-sitemaps', ['sitemapname' => 'hippo' , 'shopId' => 1]);
        Artisan::call('app:parse-sitemaps', ['sitemapname' => 'comsed', 'shopId' => 2]);
        Artisan::call('app:parse-sitemaps', ['sitemapname' => 'Rayatoys', 'shopId' => 8]);
        Artisan::call('app:parse-sitemaps', ['sitemapname' => 'vegatoys', 'shopId' => 5]);
        //
    }
}

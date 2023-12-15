<?php

namespace App\Console\Commands;

use App\Models\ProductsForMapping;
use Faker\Core\File;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class executeEverything extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:download-everything';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'DEPRECATED';

    /**
     * Execute the console command.
     */
    public function handle()
    {

        Artisan::call('app:comset-products');
        Artisan::call('app:bonami-products');
        Artisan::call('app:hippolands-products');
        Artisan::call('app:rayatoys-products');
        Artisan::call('app:app:vegatoys-products');

        //
    }
}

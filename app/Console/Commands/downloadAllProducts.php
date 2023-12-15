<?php

namespace App\Console\Commands;

use App\Models\ParsedLog;
use App\Models\ProductsForMapping;
use Faker\Core\File;
use Illuminate\Console\Command;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;

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
    protected $description = 'download all products information ';

    /**
     * Execute the console command.
     */
    public function handle()
    {

        $clientArr = [
            '1' =>'hippo',
            '2' =>'comsed',
            '8' =>'Rayatoys',
            '5' =>'vegatoys',
            '4' =>'bonami',
            '7' =>'toysi',
            '10' =>'bghlapeta',
            '11' =>'ohoboho',
        ];
       $r =  ProductsForMapping::where('mapped', 0)->get();
       foreach ($r as $k){
           $instanceName = 'App\Http\Controllers\Mapping\\'.$clientArr[$k->client_id]."Mapping";
           $instance = new $instanceName;
           $instance->parseData([$k->url],$k->client_id);
           $log = ParsedLog::insert(['client_id' => $k->client_id, 'url' => $k->url, 'created_at' => Carbon::now()]);

       }

    }
}

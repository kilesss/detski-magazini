<?php

namespace App\Console\Commands;

use App\Models\ProductsForMapping;
use Faker\Core\File;
use Illuminate\Console\Command;

class parseSitemaps extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:parse-sitemaps {sitemapname} {shopId}';

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

        $instanceName = 'App\Http\Controllers\Mapping\\'.$this->arguments()['sitemapname']."Mapping";
        $instance = new $instanceName;
        $links = ProductsForMapping::where('client_id', $this->arguments()['shopId'])->where('mapped', 0)->select('url')->get()->toArray();
        $linkArray = [];
        foreach ($links as $link){
            $linkArray[] = $link['url'];
        }
        $instance->parseData($linkArray,$this->arguments()['shopId']);
        dd($linkArray);

        //
    }
}

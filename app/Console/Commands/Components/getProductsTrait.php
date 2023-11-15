<?php

namespace App\Console\Commands\Components;

use App\Models\ProductsForMapping;

trait getProductsTrait
{
    function getProducts($link,$regex, $id, $preLink="")
    {




        $agent= 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.0.3705; .NET CLR 1.1.4322)';

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_VERBOSE, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_USERAGENT, $agent);
        curl_setopt($ch, CURLOPT_URL,$link);
        curl_setopt_array($ch,array(
            CURLOPT_USERAGENT=>'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:60.0) Gecko/20100101 Firefox/60.0',
            CURLOPT_ENCODING=>'gzip, deflate',
            CURLOPT_HTTPHEADER=>array(
                'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8',
                'Accept-Language: en-US,en;q=0.5',
                'Connection: keep-alive',
                'Upgrade-Insecure-Requests: 1',
            ),
        ));

        $html=curl_exec($ch);
        preg_match_all($regex, $html, $matches, PREG_SET_ORDER, 0);
        if (isset($matches[0][1])) {

            foreach ($matches as $m){
                ProductsForMapping::insert(['url'=> $preLink.$m[1], 'client_id' => $id]);
                echo $preLink.$m[1]."\n";
            }

            return true;
        } else {
            return false;

        }
    }
}

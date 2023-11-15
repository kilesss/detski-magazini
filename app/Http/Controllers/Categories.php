<?php

namespace App\Http\Controllers;

class Categories
{

    public function getFormatCategories(): array
    {
            $categoriesDB = \App\Models\Categories::orderBy('title')->get()->toArray();
            $categories = [];

            foreach ($categoriesDB as $cat){
                if ($cat['master_id'] == 0){
                    $categories[$cat['id']] = [
                        'title' => $cat['title'],
                        'elements' => []
                    ];
                }
            }
            foreach ($categoriesDB as $cat) {
                if ($cat['master_id'] != 0){
                    if (!isset($categories[$cat['master_id']])){dd($cat);}
                    $categories[$cat['master_id']]['elements'][$cat['id']]['title'] = $cat['title'];
                }

            }
            return $categories;
    }

}


<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Controller;

class IndexController extends AdminController
{
    public function index(){

        return $this->view('admin.index');
    }
}

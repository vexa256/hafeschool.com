<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AdminController extends Controller
{
    function AdminCP()  {


        $data = [
            'Page' => 'stats',
            'Title' => 'Dashboard',

        ];

        return view('index',$data);

    }

}

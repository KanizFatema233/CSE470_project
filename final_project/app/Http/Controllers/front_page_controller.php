<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class front_page_controller extends Controller
{
    //
    public function front_page()
    {
        return view('front_page');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class myPageController extends Controller
{
    public function myPage()
    {
        return view('templates.myPage');
    }
}

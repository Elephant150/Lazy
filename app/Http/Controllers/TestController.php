<?php

namespace App\Http\Controllers;

use App\Http\Controllers;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test()
    {
        $title = 'Main';
        return view('welcome', ['title' => $title]);
    }
}

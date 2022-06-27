<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function show(){
        // Una forma de mandar datos ala vista
        // Auth::user()->name;
        return view('home.index');
    }
}

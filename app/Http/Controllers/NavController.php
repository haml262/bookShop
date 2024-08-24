<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavController extends Controller
{
    public function nav($nav)
    {
        return "<h1>Aqui se mostrara el {$nav}</h1>";
    }

    public function services()
    {
        return view('nav.services');
    }

    public function about_us()
    {
        return view('nav.about_us');
    }
    
    public function contact_us()
    {
        return view('nav.contact_us');
    }

    public function blog()
    {
        return view('nav.blog');
    }
};
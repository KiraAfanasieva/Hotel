<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        // Повертає шаблон resources/views/home.blade.php
        return view('home'); 
    }

    public function about()
    {
        // Повертає шаблон resources/views/about.blade.php
        return view('about'); 
    }
}
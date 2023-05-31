<?php

namespace App\Http\Controllers;

use Location;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('home');
    } 
    

}


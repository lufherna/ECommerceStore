<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // method below calls the index
    // this method returns the output of view method 
    public function index() {
    	return view('master');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view("home");
    }
    public function bio(){
        return view("bio");
    }
    public function artikel(){
        return view("artikel");
    }
}

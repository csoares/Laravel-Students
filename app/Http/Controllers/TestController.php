<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){
        // return "hello controller - index";
        return view("index");
    }


    public function about(){
        return view("about");
    }
}

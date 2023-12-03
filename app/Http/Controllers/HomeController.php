<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('app');
    }
    public function members(){
        return view('member');
    }
    public function techers(){
        return view('techer');
    }
}

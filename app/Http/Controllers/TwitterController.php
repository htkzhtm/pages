<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TwitterController extends Controller
{
    public function index(){
        return view('twitter.index');
    }

    public function home(){
        return view('twitter.home');
    }
}

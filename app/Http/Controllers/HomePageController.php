<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index(){
        return view('frontpage.app');
    }

    public function homepage(){
        return view('frontpage.homepage');
    }

    public function contact(){
        return view('frontpage.contact.contact');
    }
}

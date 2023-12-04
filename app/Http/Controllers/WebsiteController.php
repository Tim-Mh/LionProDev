<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function home(){
       return view('front-end.home');
    }
    public function projects(){
        return view('front-end.projects.index');
    }
    public function blogs(){
        return view('front-end.blogs.index');
    }
    public function about(){
        return view('front-end.about.index');
    }
    public function privacy(){
        return view('front-end.privacy.index');
    }
    public function terms(){
        return view('front-end.terms-conditions.index');
    }
    public function contact(){
        return view('front-end.contact.index');
    }
    public function wahl(){
        return view('front-end.projects.wahlbeck');
    }
    public function floater(){
        return view('front-end.projects.floater');
    }
}

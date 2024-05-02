<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function login(){
        return view('site.login');
    }
    public function home(){
        return view('site.home');
    }
    public function carteirinha(){
        return view('site.carteirinha');
    
    }
    public function aula(){
        return view('site.aula');
    }
}

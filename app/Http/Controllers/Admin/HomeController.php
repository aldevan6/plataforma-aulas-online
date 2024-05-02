<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller {

       
    public function login(){
        return view('Admin.login');
    }
    
    public function home(){
        return view('Admin.home');
    }
}

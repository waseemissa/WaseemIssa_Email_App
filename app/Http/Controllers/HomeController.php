<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\AuthController;

class HomeController extends Controller
{
    public function loginView(){
        return view('login');
    }

    public function registerView(){
        return view('register');
    }
}

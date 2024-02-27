<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function Index(Request $req){
       
        return view('front.index');
    }

    public function user_admin(Request $req){
        return view('front.user_admin');
    }

    public function login(Request $req){
        return view('front.login');
    }
}

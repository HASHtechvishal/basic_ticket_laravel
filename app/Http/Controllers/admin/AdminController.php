<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class AdminController extends Controller
{
    public function dash(Request $req) {
        return view('admin.admin');
    }

    public function adminLogout(Request $req) {
        Auth::guard('admin')->logout();
        return redirect('/');
    }
}

<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FlightSchedule;
use App\Models\SearchFlight;
use Auth;

class AdminController extends Controller
{
    public function dash(Request $req) {
        $admin_dash = FlightSchedule::get()->toArray();
        $flightBookings = SearchFlight::with('user')->get()->toArray();
        //dd($flightBookings); die();
        return view('admin.admin')->with(compact('admin_dash','flightBookings'));
    }

    public function adminLogout(Request $req) {
        Auth::guard('admin')->logout();
        return redirect('/');
    }
}

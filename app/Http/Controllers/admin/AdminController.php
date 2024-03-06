<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FlightSchedule;
use App\Models\SearchFlight;
use App\Models\User;
use Auth;

class AdminController extends Controller
{
    public function dash(Request $req) {
        $admin_dash = FlightSchedule::get()->toArray();
        $flightBookings = SearchFlight::with('user')->get()->toArray();
        $flight_count = SearchFlight::count();
        //$usersWithFlightBookings = User::withCount('SearchFlight')->get()->toArray();
        //dd($flight_count); die(); 
        return view('admin.admin')->with(compact('admin_dash','flightBookings','flight_count'));
    }

    public function adminLogout(Request $req) {
        Auth::guard('admin')->logout();
        return redirect('/');
    }

    public function deleteDetails($id){
    
        FlightSchedule::where('id',$id)->delete();
             return redirect()->back();
    
    }

    public function deleteUser($id){
         $user_image = User::where('id',$id)->first();

        $user_image_path = 'admin/user_image/';
    
         if (file_exists($user_image_path.$user_image['image'])) {
              unlink($user_image_path.$user_image['image']);
         }
    
         User::where('id',$id)->delete();
    
         return redirect()->back();
    
    }
}

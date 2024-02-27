<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SearchFlight;
use App\Models\User;
use Auth;

class userController extends Controller
{
    public function searchFlight(Request $req, $id=null){
        if($req->isMethod('post')){
            $data = $req->all();
            //dd($data); die();
            $userID = User::find($id)->id;
            if(!Auth::guard('user')->check()){
                echo '<script>alert("Login or Register So We Can Assist You Better")</script>';
                        return redirect()->back();
            }else{
                $search = new SearchFlight;
                    $search->user_id = $userID;
                    $search->type = $data['flight-type'];
                    $search->from = $data['from'];
                    $search->to = $data['to'];
                    $search->Departing = $data['Departing'];
                    $search->Returning = $data['Returning'];
                    $search->adult = $data['adult'];
                    $search->child = $data['child'];
                    $search->class = $data['class'];
                    $search->status = 1;
                    $search->save();
                    return redirect('log-in');
            }
        }
    }
}
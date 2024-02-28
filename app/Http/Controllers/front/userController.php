<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SearchFlight;
use App\Models\User;
use App\Models\FlightSchedule;
use Auth;

class userController extends Controller
{
    public function searchFlight(Request $req, $id=null){
        if($req->isMethod('post')){
            $data = $req->all();
            //dd($data); die();
            if(!Auth::guard('user')->check()){
                echo '<script>alert("Login or Register So We Can Assist You Better")</script>';
                        return redirect()->back();
            }else{
                
                $flights = FlightSchedule::where('DepartureCity',$data['from'])->Where('ArrivalCity',$data['to'])->get()->toArray();
                //dd($flights); die();
                if(!empty($flights)){

                    $userID = User::find($id)->id ?? '';
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
                    return view('front.index')->with(compact('flights')); 
                }else{
                    echo '<script>alert("Unfortunately Your Flight Is Not Found")</script>';
                        return redirect()->back();
                }
            }
        }else{
            return redirect()->back();
        }
    }

    public function addFlight(Request $req, $id=null, $user_id=null){

        if($id == "" && $user_id == ''){
            echo '<script>alert("please search for the flight first")</script>';
                        return redirect('/');
        }else{



            echo '<script>alert("Your Payment Is Done")</script>';

            $tableID = SearchFlight::whereNull('flightID')->where('user_id',$user_id)->pluck('id')->first();
            $add_flight = SearchFlight::find($tableID);
            if($add_flight){
                if($add_flight->flightID === null){
                    $add_flight->flightID = $id;
                    $add_flight->save();
                    return redirect('/');

                }else{
                    echo 'allready exit'; die(); 
                }
            }else{
                echo 'flight id not found for the specified user.'; die();
            }




        }

        

    }

}

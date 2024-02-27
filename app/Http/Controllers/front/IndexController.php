<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\User;
use Image;
use Auth;

class IndexController extends Controller
{
    public function Index(Request $req){
       
        return view('front.index');
    }

    public function user_admin(Request $req){

        if($req->isMethod('post')){
            $data = $req->all();
            //dd($data); die();

            if(!isset($data['user-type'])){
                echo '<script>alert("PLEASE SELECT YOUR  USER TYPE");</script>';
                        return redirect()->back();
            }

            if($data['user-type'] == 'admin'){ //ADMIN LOGIN

                $adminCount = Admin::where('email',$data['email'])->count();

                //upload admin photo
                if($req->hasFile('image')){
                    $image_tmp = $req->file('image');
                if($image_tmp->isValid()){
                    $extension = $image_tmp->getClientOriginalExtension(); 
                    $NewimageName = $data['name'].rand(111,999).'.'.$extension;
                    $imagePath = 'admin/admin_image/'.$NewimageName;
                    Image::make($image_tmp)->resize(80,80)->save($imagePath); 

                }

                }else if(!empty($data['current_admin_image'])){
                    $NewimageName = $data['current_admin_image'];
                }else{
                    $NewimageName = ""; 
                }



                if($adminCount > 0){
                    echo '<script>alert("ADMIN ALREADY EXISTS ");</script>';
                    return redirect()->back();
                }else{
                    $admin = new Admin;
                    $admin->username = $data['name'];
                    $admin->type = $data['user-type'];
                    $admin->email = $data['email'];
                    if($data['password'] == $data['Cpass']){
                        $admin->password = bcrypt($data['password']);
                    }else{
                        echo '<script>alert("Password and Confirm Password Not match")</script>';
                        return redirect()->back();
                    }
                    $admin->password = bcrypt($data['password']);
                    $admin->country = $data['country'];
                    $admin->mobile = $data['number'];
                    $admin->image = $NewimageName;
                    $admin->status = 1;
                    $admin->save();
                    return redirect('log-in');
                }

            }elseif($data['user-type'] == 'user'){ //USER LOGIN

                $userCount = User::where('email',$data['email'])->count();

                //upload user photo
                if($req->hasFile('image')){
                    $image_tmp = $req->file('image');
                if($image_tmp->isValid()){
                    $extension = $image_tmp->getClientOriginalExtension(); 
                    $NewimageName = $data['name'].rand(111,999).'.'.$extension;
                    $imagePath = 'admin/user_image/'.$NewimageName;
                    Image::make($image_tmp)->resize(80,80)->save($imagePath); 

                }

                }else if(!empty($data['current_user_image'])){
                    $NewimageName = $data['current_user_image'];
                }else{
                    $NewimageName = ""; 
                }


                if($userCount > 0){
                    echo '<script>alert("USER ALREADY EXISTS ");</script>';
                    return redirect()->back();
                }else{
                    $user = new User;
                    $user->username = $data['name'];
                    $user->type = $data['user-type'];
                    $user->email = $data['email'];
                    if($data['password'] == $data['Cpass']){
                        $user->password = bcrypt($data['password']);
                    }else{
                        echo '<script>alert("Password and Confirm Password Not match")</script>';
                        return redirect()->back();
                    }
                    $user->password = bcrypt($data['password']);
                    $user->country = $data['country'];
                    $user->mobile = $data['number'];
                    $user->image = $NewimageName;
                    $user->status = 1;
                    $user->save();
                    return redirect('log-in');
                }


            }else{
                echo '<script>alert("404 PAGE NOT FOUND")</script>';
                        return redirect()->back();
            }

            

            return view('admin.admin');
        }
        return view('front.user_admin');
    }

    public function login(Request $req){

        if($req->isMethod('post')){
            $data = $req->all();
            //dd($data); die();

            if(!isset($data['user-type'])){
                echo '<script>alert("PLEASE SELECT YOUR  USER TYPE");</script>';
                        return redirect()->back();
            }

            if($data['user-type'] == 'admin'){
                if (Auth::guard('admin')->attempt(['email'=>$data['email'],'password'=>$data['password'],'status'=>1])) { 
                    return redirect('/admin/dash');
                }else{
                    echo '<script>alert("INCORRECT EMAIL OR PASSWORS");</script>';
                            return redirect()->back();
                 }
            }elseif($data['user-type'] == 'user'){
                if (Auth::guard('user')->attempt(['email'=>$data['email'],'password'=>$data['password'],'status'=>1])) { 
                    return redirect('/');
                }else{
                    echo '<script>alert("INCORRECT EMAIL OR PASSWORS");</script>';
                            return redirect()->back();
                 }          
            }

        }
        return view('front.login');
    }

    public function userLogout(Request $req){
        Auth::guard('user')->logout();
        return redirect('/log-in');
    }
}

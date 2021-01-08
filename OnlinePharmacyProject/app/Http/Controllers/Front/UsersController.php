<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Session;

class UsersController extends Controller
{
    public function loginPage(){
        return view ("auth.newLogin");
    }

    public function registrationPage(){
      return view ("auth.newRegister");
    }

    public function registerUser(Request $request){
      if($request->isMethod('post')){
        $data= $request->all();
        $emailCount=User::where('email',$data['email'])->count();
        $userCount=User::where('userName',$data['userName'])->count();
        if($emailCount>0){
          $message="Email already exists!";
          session::flash('error_message',$message);
          return redirect()->back();
        } elseif($userCount>0){
          $message="Username already exists!";
          session::flash('error_message',$message);
          return redirect()->back();
        } else{
          $user= new User;
          $user->firstName = $data['firstName'];
          $user->lastName = $data['lastName'];
          $user->userName = $data['userName'];
          $user->email = $data['email'];
          $user->gender = $data['gender'];
          $user->age = $data['age'];
          $user->address = $data['address'];
          $user->phone = $data['phone'];
          $user->password = bcrypt($data['password']);
          $user->save();

          if(Auth::attempt(['email'=>$data['email'],'password'=>$data['password']])){
          //  echo "<pre>"; print_r(Auth::user());die;
            return redirect('/');
          }
        }
      }
    }



    public function logout(){
      Auth::logout();
      return redirect ("/");
    }



    public function loginUser(Request $request){
      if($request->isMethod('post')){
        $data=$request->all();
        //echo "<pre";print_r($data);die;
        if(Auth::attempt(['email'=>$data['email'],'password'=>$data['password']])){
          return redirect("/");
        } else{
          $message="Invalid Email or Password";
          session::flash('error_message',$message);
          return redirect()->back();
        }
      }
    }
}
<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Session;
//use Hash;

class AdminController extends Controller
{
    public function admin_dashboard(){
      return view ('admin.admin_dashboard');
    }

    public function admin_login(Request $request){
      if($request->isMethod('post')){
        $data=$request->all();

        if(Auth::guard('admin')->attempt(['email'=>$data['email'],'password'=>$data['password']])){
          return redirect('admin/admin_dashboard');
        } else{
          Session::flash('error_message','Invalid Email or Password');
          return redirect();
        }
      }
      return view('admin.admin_login');
    }

    public function admin_logout(){
      Auth::guard('admin')->logout();
      return redirect('/admin');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Session;

/**
 * @group Admin Controller
 *
 * Handle Admin authentication of the application.
 */
class AdminController extends Controller
{
    /**
     * Admin Dashboard View
     *
     * Returns the view of Admin dashboard
     * @authenticated
     */
     public function adminDashboard(){
         return view ('admin.admin_dashboard');
     }


    /**
     * Admin Login
     *
     * Handles admin login
     * @bodyParam data array required Data from Login Form
     * @bodyParam data.email email required Email of Admin
     * @bodyParam data.password password required Password of Admin
     */
    public function adminLogin(Request $request){
        if($request->isMethod('post')){
            $data=$request->all();
        if(Auth::guard('admin')->attempt(['email'=>$data['email'],'password'=>$data['password']])){
            return redirect('admin/admin_dashboard');


        } else{
            Session::flash('error_message','Invalid Email or Password');
            return redirect('/admin/login');
        }
      }
      return view('admin.admin_login');
    }

    /**
     * Admin Logout
     *
     * Handles admin logout
     *
     * Returns to admin login page
     * @authenticated
     */
     public function adminLogout(){
        Auth::guard('admin')->logout();
        return redirect('/admin/login');
    }
}

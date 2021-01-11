<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Medicine;

class IndexController extends Controller
{
    public function welcome(){
        $newMedicines= Medicine::orderBy('id','Desc')->limit(4)->get()->toArray();
        $newMedicines = json_decode(json_encode($newMedicines),true);
        //dd($newMedicines);die;
    //    echo "<pre>";print_r($newMedicines); die;

        $page_name="welcome";
        return view('welcome')->with(compact('page_name','newMedicines'));
    }
}

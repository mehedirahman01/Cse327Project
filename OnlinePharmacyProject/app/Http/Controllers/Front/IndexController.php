<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Medicine;



/**
 * @group Index Controller
 *
 * Handle Homepage functionalities
 */

class IndexController extends Controller
{

    /**
     * Homepage View
     *
     * Returns the view of homepage
     * @bodyParam newMedicines array required Newly added medicine data from table
     */
    public function welcome(){
        $newMedicines= Medicine::orderBy('id','Desc')->limit(4)->get()->toArray();
        $newMedicines = json_decode(json_encode($newMedicines),true);
        $page_name="welcome";
        return view('welcome')->with(compact('page_name','newMedicines'));
    }
}

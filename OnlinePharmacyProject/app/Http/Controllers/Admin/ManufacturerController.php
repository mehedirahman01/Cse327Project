<?php

namespace App\Http\Controllers\Admin;
//namespace App\Models;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Manufacturer;

class ManufacturerController extends Controller
{
    public function manufacturers(){
      $manufacturers = Manufacturer::get();
      //$manufacturers = json_decode(json_encode($manufacturers));
      //echo "<pre>";print_r($manufacturers);die;
      return view('admin.manufacturers.manufacturers')->with(compact('manufacturers'));
    }
}

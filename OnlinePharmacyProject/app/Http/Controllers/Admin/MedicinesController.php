<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Medicine;
use App\Models\Manufacturer;

class MedicinesController extends Controller
{
  public function medicines(){
    $medicines = Medicine::get();
    return view('admin.medicines.medicines')->with(compact('medicines'));
  }

  public function addEditMedicine(Request $request,$id=null){
    if($id=""){
      $title= "Add Medicine";

    }else{
      $title= "Edit Medicine";
    }

    if($request->isMethod('post')){
      $medicine= new Medicine;
      $data= $request->all();
      //$mId=$request->input('manufacturerId');
        $medicine->manufacturerId=$request->input('manufacturerId');
        $medicine->medicineName=$data['medicineName'];
        $medicine->generic=$data['generic'];
        $medicine->type=$data['type'];
        $medicine->quantity=$data['quantity'];
        $medicine->dose=$data['dose'];
        $medicine->medicinePrice=$data['medicinePrice'];
        $medicine->stock=$data['stock'];
        $medicine->save();

        return redirect('./admin/admin_dashboard');

  //  echo "<pre>"; print_r($data['generic']);die;
    }

    $getManufacturers= Manufacturer::get();

    return view('admin.medicines.add_edit_medicine')->with(compact('title','getManufacturers'));
}
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Medicine;
use App\Models\Manufacturer;
use Intervention\Image\ImageManagerStatic as Image;
use Auth;


/**
 * @group Medicines Controller
 *
 * Handle Medicine Stock for the application.
 */


class MedicinesController extends Controller
{


/**
 * Medicine View
 *
 * Returns the view of medicine
 * @bodyParam medicines array required All medicine data from table
 * @authenticated
 */
  public function medicines(){
      if (Auth::guard('admin')) {
          $medicines = Medicine::get();
          return view('admin.medicines.medicines')->with(compact('medicines'));
      }

      else{
          return view('admin.admin_login');
      }
  }

  /**
   * Add or Edit Medicine
   *
   * Can add or edit medicine
   *
   * Returns to medicine page
   * @authenticated
   *
   * @bodyParam medicine object required
   * @bodyParam medicine.manufacturerId number required Id of the manufacturer. Example: 1
   * @bodyParam medicine.medicineName string required Name of the medicine. Example: Alatrol
   * @bodyParam medicine.generic string required Generic of the Medicine. Example: Cetirizine Hydrochloride
   * @bodyParam medicine.type string required Type of the Medicine. Example: Tablet
   * @bodyParam medicine.quantity number required Units per Pata. Example: 10
   * @bodyParam medicine.dose string required Dosage of the Medicine per unit. Example: 2.5 mg
   * @bodyParam medicine.medicinePrice float required Price of the Medicine. Example: 35
   * @bodyParam medicine.stock number required Stock of the Medicine. Example: 100
   * @bodyParam medicine.description string required Description of the Medicine. Example: This medicine.....
   * @bodyParam medicine.medicineImage string required Image of the Medicine.
   * @bodyParam data array required Data of the Medicine Form
   * @bodyParam getManufacturers array required All manufacturer data from table
   * @bodyParam medicineData array required All medicine data from table
   * @urlParam id number Id of the medicine
   */

  public function addEditMedicine(Request $request,$id=null){
      if($id==""){
          $title= "Add Medicine";
          $medicine= new Medicine;
          $medicineData= array();
    } else{
        $title= "Edit Medicine";
        $medicineData = Medicine::find($id);
        $medicineData = json_decode(json_encode($medicineData),true);
        $medicine= Medicine::find($id);
    }

    if($request->isMethod('post')){
        $data= $request->all();
        if($request->hasFile('medicineImage')){
            $image_tmp=$request->file('medicineImage');
            if($image_tmp->isValid()){
                $image_name=$image_tmp->getClientOriginalName();
                $extension= $image_tmp->getClientOriginalExtension();
                $imageName= $image_name.'-'.rand(111,999999).'.'.$extension;
                $image_path='images/medicine_images/'.$imageName;
                Image::make($image_tmp)->resize(200,231)->save($image_path);
                $medicine->medicineImage=$imageName;
            }
        }


        $medicine->manufacturerId=$data['manufacturerId'];
        $medicine->medicineName=$data['medicineName'];
        $medicine->generic=$data['generic'];
        $medicine->type=$data['type'];
        $medicine->quantity=$data['quantity'];
        $medicine->dose=$data['dose'];
        $medicine->medicinePrice=$data['medicinePrice'];
        $medicine->stock=$data['stock'];
        $medicine->description=$data['description'];
        $medicine->save();

        return redirect('./admin/medicines');

    }

        $getManufacturers= Manufacturer::get();
        return view('admin.medicines.add_edit_medicine')->with(compact('title','getManufacturers','medicineData'));
}


    /**
    * Delete Medicine
    *
    * Can delete medicine
    *
    * Returns to medicine page
    * @authenticated
    *
    * @urlParam id number Id of the medicine
    */
    public function deleteMedicine($id){
        Medicine::where('id',$id)->delete();
        return redirect()->back();
    }
}

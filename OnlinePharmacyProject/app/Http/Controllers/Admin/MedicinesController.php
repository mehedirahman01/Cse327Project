<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Medicine;
use App\Models\Manufacturer;


/**
 * @group Admin Controller
 *
 * Handle Medicine Stock for the application.
 */


class MedicinesController extends Controller
{

  /**

*
* @bodyParam manufacturerId number Id of the manufacturer. Example: 1
* @bodyParam email email required The email of the user. Example: demo@demo.com
* @bodyParam password password required The password of the user. Example: password
* @bodyParam password_confirmation password required The password confirmation of the user. Example: password

*/

/**
 * Medicine View
 *
 * This returns the view of medicine
 * @authenticated
 */
  public function medicines(){
    $medicines = Medicine::get();
    return view('admin.medicines.medicines')->with(compact('medicines'));
  }

  /**
   * Add or Edit Medicine
   *
   * Can add or edit or delete medicine
   * @authenticated
   *
   * @bodyParam manufacturerId number Id of the manufacturer. Example: 1
   * @bodyParam medicineName string required Name of the medicine. Example: Alatrol
   * @bodyParam generic string required Generic of the Medicine. Example: Cetirizine Hydrochloride
   * @bodyParam type string required Type of the Medicine. Example: Tablet
   * @bodyParam quantity number required Units per Pata. Example: 10
   * @bodyParam dose string required Dosage of the Medicine per unit. Example: 2.5 mg
   * @bodyParam medicinePrice float required Price of the Medicine. Example: 35
   * @bodyParam stock number required Stock of the Medicine. Example: 100
   */
  public function addEditMedicine(Request $request,$id=null){
    if($id=""){
      $title= "Add Medicine";

    }else{
      $title= "Edit Medicine";
    }

    if($request->isMethod('post')){
      $medicine= new Medicine;
      $data= $request->all();
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

    }

    $getManufacturers= Manufacturer::get();

    return view('admin.medicines.add_edit_medicine')->with(compact('title','getManufacturers'));
}
}

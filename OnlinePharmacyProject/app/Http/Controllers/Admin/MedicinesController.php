<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Medicine;
use App\Models\Manufacturer;
use Intervention\Image\ImageManagerStatic as Image;


/**
 * @group Medicines Controller
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
   * @bodyParam description string required Description of the Medicine. Example: This medicine.....
   * @bodyParam medicineImage image required Image of the Medicine. 
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
      #echo "<pre>"; print_r($data);die;
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

      $medicine->manufacturerId=$request->input('manufacturerId');
      $medicine->medicineName=$data['medicineName'];
      $medicine->generic=$data['generic'];
      $medicine->type=$data['type'];
      $medicine->quantity=$data['quantity'];
      $medicine->dose=$data['dose'];
      $medicine->medicinePrice=$data['medicinePrice'];
      $medicine->stock=$data['stock'];
      $medicine->description=$data['description'];
      $medicine->save();

      return redirect('./admin/admin_dashboard');

    }

    $getManufacturers= Manufacturer::get();

    return view('admin.medicines.add_edit_medicine')->with(compact('title','getManufacturers'));
}
}

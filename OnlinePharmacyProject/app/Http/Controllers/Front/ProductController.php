<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Medicine;
use App\Models\Cart;
use Session;
/**
 * @group Product Controller
 *
 * Handle Products
 */
class ProductController extends Controller
{

    /**
     * Product Details View
     *
     * Returns the view of product details
     * @bodyParam productDetails array required All data of the medicine by id from table
     * @urlParam id number required Id of the medicine
     * @authenticated
     */
    public function detail($id){
    //  $productDetails = Medicine::with(['medicineName','manufacturerId', 'generic','type', 'quantity'=>function($query){
    //      $query->where('status',1);
    //           },'images'])->find($id)->toArray();
  
        $productDetails= Medicine::find($id)->toArray();
        return view('frontend.medicine_detail')->with(compact('productDetails'));
    }

    
    
    public function addtocart(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
          //echo "<pre>"; print_r($data); die;
           //generate season id
           $session_id = Session::get('session_id');
           if(empty($session_id)){
               $sesson_id = Session::getId();
               Session::put('session_id', $session_id);
           }

        //   Cart::insert(['session_id'=>$session_id,'id'=>$data['id'],'manufacturerId'=>$data['manufacturerId'],'medicineName'=>$data['medicineName'] ]);
        $cart=new Cart;
        $cart->session_id = $session_id;
        $cart->quantity = $data['quantity'];
    //  $cart->manufacturerId = $data['manufacturerId'];
   
        $cart->save();

         
           $message = "Product has been added to cart";
           session::flash('success_message',$message);
           return redirect()->back();
        }
       
        


    }
}

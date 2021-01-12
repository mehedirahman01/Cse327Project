<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Medicine;


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
        $productDetails= Medicine::find($id)->toArray();
        return view('frontend.medicine_detail')->with(compact('productDetails'));
    }
}

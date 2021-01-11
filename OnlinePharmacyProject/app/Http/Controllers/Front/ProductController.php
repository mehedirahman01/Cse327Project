<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Medicine;

class ProductController extends Controller
{
    public function detail($id){
        $productDetails= Medicine::find($id)->toArray();
        //dd($productDetails);die;
        return view('front.medicine_detail')->with(compact('productDetails'));
    }
}

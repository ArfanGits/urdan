<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductDetailsController extends Controller
{
    public function index(){
        $data = [
            'title' => 'Product Details'
        ];
        return view('frontend.pages.product-details.product-details',$data);
    }
}

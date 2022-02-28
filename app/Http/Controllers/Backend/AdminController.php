<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $data = [
            'title' => 'Dashboard'
        ];
        return view('backend.pages.home.home',$data);
    }
}

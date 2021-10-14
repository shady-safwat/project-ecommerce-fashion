<?php

namespace App\Http\Controllers\User;



use App\Models\Product;
use App\Models\Profile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class HomePageController extends Controller
{
    //
    public function index(){
        $profiles = Profile::all();
        $products = Product::all();
        return view('site.layouts.homepage',compact('profiles','products'));
    }
}

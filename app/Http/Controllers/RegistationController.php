<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistationController extends Controller
{
    //
    public function index(){
        return view('form');
    }
    public function register(Request $request){
        echo "<pre>";
        print_r($request->all());

    }
}

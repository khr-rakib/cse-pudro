<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function admissionFrom(){
        return view('admission-form');
    }

    public function admissionFormSubmit(Request $request){
        return $request->all();
    }
}

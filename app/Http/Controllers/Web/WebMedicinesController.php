<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Classification;
use App\Models\Medicine;
use http\Env\Request;
use Illuminate\Support\Facades\Validator;

class WebMedicinesController extends Controller
{
    public function store(\Illuminate\Http\Request $request){

        $validator=validator::make($request->all(),[
            'Classification_id'=>'required',
            'Scientific_name'=>'required',
            'Commercial_name'=>'required',
            'Manufacturer'=>'required',
            'Available_Quantity'=>'required',
            'Expiry_date'=>'required',
            'Price'=>'required',
        ]);
        if($validator->fails()){
            return "fails";
        }
        $post=Medicine::create($request->all());
        if($post) {
            return "data added successfully";
        }
        return "failed";
    }
}

<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\graduated;
class CghsController extends Controller
{
    //

    public function index(){

        return view('cghs.index');
    }



    public function store(Request $request){




       
        // $request->validate([
        //     'graduated_name' => 'required',
        //     'batch' => 'required',

        //     'mobile_number' => 'required',
        //     'blood_group' => 'required',
        //     't-shirt' => 'required',
        //     'profession' => 'required',
        //     'transaction_id' => 'required',
        //     'payment' => 'required',
        //     'img' => 'required|mimes:jpg,png,jpeg|max:5048',
            
         
        // ]);

        $newImageName =time().'-'.$request->name.'.'.$request->img->extension();
        $request->img->move(public_path('images'),$newImageName);
        $data=new graduated;
       
        $data->graduated_name=$request->graduated_name;
        $data->batch=$request->batch;
        $data->mobile_number=$request->mobile_number;
        $data->blood_group=$request->blood_group;
        $data->t_shirt=$request->t_shirt;
        $data->profession=$request->profession;
        $data->profession_institute=$request->profession_institute;
        $data->designation=$request->designation;
        $data->guest=$request->guest;
        $data->total=$request->total;
        $data->img=$request->img;
        $data->bkash=$request->payment;
        $data->transaction_id=$request->transaction_id;
        $data->save();

       
    }
}
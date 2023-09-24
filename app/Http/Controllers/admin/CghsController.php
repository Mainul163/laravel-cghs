<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\graduated;
use Barryvdh\DomPDF\Facade\Pdf;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use App\Helpers\Helper;
class CghsController extends Controller
{
    //

    public function index(){
            $graduatedData=graduated::latest('id')->limit(1)->get();;
        return view('cghs.index',compact('graduatedData'));
        // $graduatedData=graduated::latest('id')->limit(1)->get();

        // $pdf = \PDF::loadView('cghs.pdf',[
          
        //     'graduatedData'=>$graduatedData,
          
          
        // ]) ->setOptions(['enable_php' => true])
        // ->setPaper('A4', 'portrait');

       
       
        // return $pdf->download('cghs.pdf');
        
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

        $string =  Helper::IDGenerator(new graduated, 'reg_id', 2, '1100');
        

      
        $data=new graduated;
     
        $total=($request->guest*700)+1020;
        $newImageName =time().'-'.$request->name.'.'.$request->img->extension();
          $status='pending';
        $request->img->move(public_path('images'),$newImageName);
    
        // $newImageName=$request->file('img')->getClientOriginalName();
        // $request->file('img')->storeAs('public/images',$newImageName);
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
        $data->total=$total;
        $data->img=$newImageName;
        $data->bkash=$request->payment;
        $data->transaction_id=$request->transaction_id;
        $data->address=$request->address;
        $data->status=$status;
         $data->reg_id=$string;
        $data->save();
      
        return redirect()->route('cghs');
    }
}
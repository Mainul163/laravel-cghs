<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\graduated;
class CghspdfController extends Controller
{
    //

    public function export_pdf(){

        $graduatedData=graduated::latest('id')->limit(1)->get();

        $pdf = \PDF::loadView('cghs.pdf',[
          
            'graduatedData'=>$graduatedData,
          
          
        ]) ->setOptions(['enable_php' => true])
        ->setPaper('A4', 'portrait');

       
        // $pdf = PDF::loadView('communityDetails.pdf', compact('commun_details','communityDetailsTitle'))->setOptions(['defaultFont' => 'sans-serif']);
        return $pdf->download('cghs.pdf');



       

    }
}
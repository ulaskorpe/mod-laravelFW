<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DersController extends Controller
{
 public function ders(){
     return view('ilkproje.firstpage');
 }

 public function dersPost(Request $request){

     dd($request);
 }



}

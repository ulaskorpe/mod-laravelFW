<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Faker;
use Illuminate\Support\Facades\Validator;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }





    public function nextPage($number = 0){
        $faker = Faker\Factory::create();
        $urlArray=[];
        for($i=0;$i<$number;$i++){
            $urlArray[$i]=$faker->url;
        }
        return view('ilkproje.nextpage', ['urlArray'=>$urlArray, 'number'=>$number]);
    }


    public function postOne(Request $request){

        if($request->isMethod('post')){

//            $ctrl = Validator::make($request->all(),array(
//                'name_surname'=>'required',
//                'address'=>'required',
//                'phone'=>'required'
//
//            ));
//
//            if($ctrl->fails()){
//                return "errors!!";
//            }else{
//                dd($request);
//            }


        }

        return view('ilkproje.postone');
    }

}



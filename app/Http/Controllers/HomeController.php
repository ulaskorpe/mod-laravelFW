<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Faker;
use Illuminate\Support\Facades\Validator;


class HomeController extends Controller
{
  public function index(){

    $faker = Faker\Factory::create();
    $peopleArray = [];

    for($i=0;$i<100;$i++){
        $gender = ( rand(1,100) % 2 == 0 ) ? 'male' : 'female';
        $peopleArray[$i]['name']=$faker->name($gender);
        $peopleArray[$i]['address']=$faker->address;
        $peopleArray[$i]['phone']=$faker->phoneNumber;
    }

      return view('ilkproje.index', ['peopleArray'=>$peopleArray]);
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

          $ctrl = Validator::make($request->all(),array(
              'name_surname'=>'required',
              'address'=>'required',
              'phone'=>'required'

          ));

          if($ctrl->fails()){
                return "errors!!";
          }else{
              dd($request);
          }


      }

      return view('ilkproje.postone');
  }
}

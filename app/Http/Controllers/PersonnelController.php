<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Helpers\GeneralHelper;
use App\Models\City;
use App\Models\Personnel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PersonnelController extends Controller
{
    public function index()
    {

        /*  $faker = Faker\Factory::create();
          $peopleArray = [];

          for($i=0;$i<100;$i++){
              $gender = ( rand(1,100) % 2 == 0 ) ? 'male' : 'female';
              $peopleArray[$i]['name']=$faker->name($gender);
              $peopleArray[$i]['address']=$faker->address;
              $peopleArray[$i]['phone']=$faker->phoneNumber;
          }*/

//      $peopleArray = Personnel::all();

        $peopleArray = Personnel::Raw("SELECT * FROM personnel WHERE id=12")->get();
        return view('ilkproje.index', ['peopleArray' => $peopleArray]);
    }

    public function create(Request $request)
    {
        $cities = City::all();

        if ($request->isMethod('post')) {


            $messages = [];
            $rules = [
                'email' => 'required|email',
                'photo_file' => 'mimes:png,jpg,jpeg',

            ];
            $this->validate($request, $rules, $messages);


            DB::transaction(function () use ($request) {

                $personnel = new Personnel();
                $personnel->name = $request['name_surname'];
                $personnel->gender = $request['gender'];
                $personnel->address = $request['address'];
                $personnel->email = $request['email'];
             //   $personnel->phone = $request['phone'];
                $personnel->city_id = $request['city_id'];

                $file = $request->file('photo_file');
                if (!empty($file)) {
                    $path = storage_path("user_files/user_" . $personnel->id . "/");
                    $filename = GeneralHelper::fixName($request['name_surname']) . "_" . date('YmdHis') . "." . GeneralHelper::findExtension($file->getClientOriginalName()); //FileHelper::fixname($personnel['name']).".". FileHelper::findExtension($file->getClientOriginalName());
                    $file->move($path, $filename);
                    $personnel->photo_file = "user_files/user_" . $personnel->id . "/" . $filename;
                }

                $personnel->save();

            });


            return "personnel created";


        }


        return view('ilkproje.create_personnel',['cities'=>$cities]);
    }


    public function update(Request $request, $id)
    {

        $personnel = Personnel::find($id);
        $cities = City::all();
        if ($request->isMethod('post')) {


            $messages = [];
            $rules = [
                'email' => 'required|email',
                'photo_file' => 'mimes:png,jpg,jpeg',

            ];
            $this->validate($request, $rules, $messages);

            DB::transaction(function () use ($request, $personnel) {

                $personnel->name = $request['name_surname'];
                $personnel->gender = $request['gender'];
                $personnel->address = $request['address'];
                $personnel->email = $request['email'];
            //    $personnel->phone = $request['phone'];
                $personnel->city_id = $request['city_id'];


                $file = $request->file('photo_file');
                if (!empty($file)) {
                    $path = storage_path("user_files/user_" . $personnel->id . "/");
                    $filename = GeneralHelper::fixName($personnel['name']) . "_" . date('YmdHis') . "." . GeneralHelper::findExtension($file->getClientOriginalName()); //FileHelper::fixname($personnel['name']).".". FileHelper::findExtension($file->getClientOriginalName());
                    $file->move($path, $filename);
                    $personnel->photo_file = "user_files/user_" . $personnel->id . "/" . $filename;
                }

                $personnel->save();

            });


            return "personnel updated";


        }


        return view('ilkproje.update_personnel', ['personnel' => $personnel,'cities'=>$cities]);

    }

    public function delete(Request $request, $id)
    {

        $personnel = Personnel::find($id);

        if ($request->isMethod('post')) {


            DB::transaction(function () use ($request, $personnel) {
                $personnel->delete();

            });


            return "personnel deleted";


        }

        return view('ilkproje.delete_personnel', ['personnel' => $personnel]);

    }


}

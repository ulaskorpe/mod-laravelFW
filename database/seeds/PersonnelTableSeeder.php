<?php

use Illuminate\Database\Seeder;

class PersonnelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for($i=0;$i<200;$i++){
            $gender = ( rand(1,100) % 2 == 0 ) ? 'male' : 'female';
            $personnel = new  \App\Models\Personnel();
            $personnel->name =$faker->name($gender);
            $personnel->address =$faker->address;
            $personnel->email =$faker->email;
        //    $personnel->phone =$faker->phoneNumber;
            $personnel->gender =$gender;
            $personnel->city_id =rand(1,81);
            $personnel->save();


            $count= rand(1,5);

            for($j=0;$j<$count;$j++){

            $phone_number = new \App\Models\PhoneNumber();
            $phone_number->personnel_id= $personnel->id;
            $phone_number->phone_number = $faker->phoneNumber;
            $phone_number->save();
            }

        }
    }
}

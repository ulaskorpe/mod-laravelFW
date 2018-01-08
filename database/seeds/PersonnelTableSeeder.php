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
            $personnel->phone =$faker->phoneNumber;
            $personnel->gender =$gender;
            $personnel->save();

        }
    }
}

<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(RoleTableSeeder::class);
         $this->call(CitiesTableSeeder::class);
         $this->call(PersonnelTableSeeder::class);
         $this->call(UserTableSeeder::class);


    }
}
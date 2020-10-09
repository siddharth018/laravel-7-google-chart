<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Employee;

use Illuminate\Support\Facades\DB;

use Faker\Factory as Faker;
use Illuminate\Support\Arr;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   
    public function run(Faker $faker)
    {
	    $faker = Faker::create();
        foreach (range(1,10) as $index) {
            DB::table('employees')->insert([
                'name'    =>   $faker->name,
                'gender'  =>   $faker->randomElements(['male', 'female'])[0],
            ]);
        }
    }    
}
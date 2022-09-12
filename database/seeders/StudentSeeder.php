<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Student;


class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i = 0; $i < 100; $i++) {

               $students = new Student;
               $students->name = $faker->name;
               $students->father_name = $faker->name;
               $students->contact = $faker->numberBetween(100000000,999999999);;
               $students->subject = $faker->lastName;
               $students->fees = $faker->numberBetween(100,2000);
               $students->save();

        }

    }
}

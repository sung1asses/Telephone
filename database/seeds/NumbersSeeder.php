<?php

use Illuminate\Database\Seeder;

class NumbersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker\Factory::create("ru_RU");

        $institutes = \App\Institute::get();
        for($i = 1; $i <= count($institutes); $i++ ){

        	for($j = 0 ; $j < rand(5,9); $j++ ){
        		$val = [
	        		'name' => $faker->name,
			        'position' => $faker->jobTitle,
			        'cabinet' => rand(100,999),
			        'email' => $faker->email,
			        'local_number' => rand(1000,9999),
			        'telephone_number' => $faker->phoneNumber,
	        	];
                \App\Institute::find($i)->numbers()->create($val);
        	}

        }
    }
}

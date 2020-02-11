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
        $institutes = \App\Institute::get();
        for($i = 1; $i <= count($institutes); $i++ ){

        	for($j = 0 ; $j < rand(1,4); $j++ ){
        		$val = [
	        		'name' => Str::random(6, 'alpha')." ".Str::random(8, 'alpha')." ".Str::random(7, 'alpha'),
			        'position' => Str::random(4, 'alpha'),
			        'cabinet' => rand(100,999),
			        'email' => Str::random(8, 'alpha')."@mail.ru",
			        'local_number' => rand(1000,9999),
			        'telephone_number' => rand(1000000000,9999999999),
	        	];
                \App\Institute::find($i)->numbers()->create($val);
        	}

        }
    }
}

<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {   
        $adminRole = \HttpOz\Roles\Models\Role::create([
	        'name' => 'Admin',
	        'slug' => 'admin',
	        'description' => 'Custodians of the system.', // optional
	        'group' => 'admin' // optional, set as 'default' by default
	    ]);

        $admin = \App\User::create([
	        'name' => 'Admin',
	        'email' => 'admin@admin.admin',
	        'password' => Illuminate\Support\Facades\Hash::make('password'),
	    ])->attachRole($adminRole);

	    $redactorRole = \HttpOz\Roles\Models\Role::create([
	        'name' => 'Redactor',
	        'slug' => 'redactor',
	        'description' => 'redact numbers.', // optional
	        'group' => 'redactor' // optional, set as 'default' by default
	    ]);

        \App\User::create([
	        'name' => 'Suvorov Roman',
	        'email' => 'suvorov_roman@redactor.redactor',
	        'password' => Illuminate\Support\Facades\Hash::make('redactor'),
	    ])->attachRole($redactorRole);
    }
}
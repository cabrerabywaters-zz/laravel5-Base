<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use cyb\User;
use cyb\Role;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        User::create([

        	'name' => "John",
            'email' => "john@doe.cl",
            'password' => Hash::make("123"),

        ]);

		$faker = Faker::create();
		
				foreach(range(1, 20) as $index)
				{
		           $user = User::create([
		
		                'name'        => $faker->firstName,
		                'email'       => $faker->email,
		                'password' => Hash::make("123"),
		
		
		
		            ]);


			        $default = Role::findOrFail(1);
			        $user->roles()->attach($default->id);


		        }


    }
}

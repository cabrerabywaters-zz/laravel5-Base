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

        $user = User::create([

            'img'        => "NULL",
            'email'      => "admin@cyb.cl",
            'name'       => "Ignacio",
            'last_name'  => "Cabrera",
            'password'   => Hash::make("123"),
            'company_id' => 1,

        ]);

        $default = Role::findOrFail(1);
        $owner = Role::findOrFail(2);
        //$user->roles()->attach($default->id);
        $user->roles()->attach($owner->id);

        $faker = Faker::create();

        foreach (range(1, 20) as $index) {
            $user = User::create([
                'img'        => "NULL",
                'name'       => $faker->firstName,
                'last_name'  => $faker->LastName,
                'email'      => $faker->email,
                'password'   => Hash::make("123"),
                'company_id' => "0"


            ]);


            $default = Role::findOrFail(1);
            $user->roles()->attach($default->id);


        }


    }
}

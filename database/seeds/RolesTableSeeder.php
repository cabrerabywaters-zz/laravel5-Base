<?php
 use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use cyb\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


    	 Role::create([
            'name'        => "Default",
			'display_name' => 'Default Role',
			'description'  => 'User has just been created into the app',
        ]);

    	 Role::create([
            'name'        => "Owner",
			'display_name' => 'Site Owner',
			'description'  => 'User has all previleges',
        ]);
  
    }
}

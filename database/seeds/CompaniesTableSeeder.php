<?php

use Illuminate\Database\Seeder;
use cyb\Company;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Company::create([
            'rut'              => "9-1",
            'adress'           => "América 549",
            'city'             => "Santiago",
            'location'         => "San Miguel",
            'phone_number'     => "5544525",
            'fancy_name'     => "Copol",
            'description'      => "Comercializadora de Polietileno Cabrera y Bywaters Spa.",
        ]);

    }
}

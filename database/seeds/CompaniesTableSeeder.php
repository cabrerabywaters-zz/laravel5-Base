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
            'adress'           => "América",
            'adress_number'           => "549",
            'city'             => "Santiago",
            'location'         => "San Miguel",
            'phone_number'     => "5544525",
            'fancy_name'     => "Copol",
            'description'      => "Comercializadora de Polietileno Cabrera y Bywaters Spa.",
        ]);
        Company::create([
            'rut'              => "889-1",
            'adress'           => "Otra direccion",
            'adress_number'           => "4432",
            'city'             => "Santiago",
            'location'         => "San Miguel",
            'phone_number'     => "5544525",
            'fancy_name'     => "Otra empresa",
            'description'      => "Otra empresa mas con un nombre.",
        ]);

    }
}

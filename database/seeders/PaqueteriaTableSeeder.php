<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Paqueteria;    

class PaqueteriaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Paqueteria::truncate();

        $paqueterias =  [
            [
                'id' => '01',
                'nombre' =>  'DHL',
            ],
            [
                'id' => '02',
                'nombre' =>  'Estafeta',
            ],
            [
                'id' => '03',
                'nombre' =>  'FedEx',
            ],

        ];

        Paqueteria::insert($paqueterias);
    }
}

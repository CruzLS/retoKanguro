<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Estado;    


class EstadosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   

        Estado::truncate();

        $estados =  [
            [
                'id' => '01',
                'name' =>  'Aguascalientes',
                'abbrev' =>  'Ags.',
                'country' =>  'MX'

            ],
            [
                'id' => '02',
                'name' =>  'Baja California',
                'abbrev' =>  'BC',
                'country' =>  'MX'

            ],
            [
                'id' => '03',
                'name' =>  'Baja California Sur',
                'abbrev' =>  'BCS',
                'country' =>  'MX'

            ],
            [
                'id' => '04',
                'name' =>  'Campeche',
                'abbrev' =>  'Camp.',
                'country' =>  'MX'

            ],
            [
                'id' => '05',
                'name' =>  'Coahuila de Zaragoza',
                'abbrev' =>  'Coah.',
                'country' =>  'MX'

            ],
            [
                'id' => '06',
                'name' =>  'Colima',
                'abbrev' =>  'Col.',
                'country' =>  'MX'

            ],
            [
                'id' => '07',
                'name' =>  'Chiapas',
                'abbrev' =>  'Chis.',
                'country' =>  'MX'

            ],
            [
                'id' => '08',
                'name' =>  'Chihuahua',
                'abbrev' =>  'Chih.',
                'country' =>  'MX'

            ],
            [
                'id' => '09',
                'name' =>  'Distrito Federal',
                'abbrev' =>  'DF',
                'country' =>  'MX'

            ],
            [
                'id' => '10',
                'name' =>  'Durango',
                'abbrev' =>  'Dgo.',
                'country' =>  'MX'

            ],
            [
                'id' => '11',
                'name' =>  'Guanajuato',
                'abbrev' =>  'Gto.',
                'country' =>  'MX'

            ],
            [
                'id' => '12',
                'name' =>  'Guerrero',
                'abbrev' =>  'Gro.',
                'country' =>  'MX'

            ],
            [
                'id' => '13',
                'name' =>  'Hidalgo',
                'abbrev' =>  'Hgo.',
                'country' =>  'MX'

            ],
            [
                'id' => '14',
                'name' =>  'Jalisco',
                'abbrev' =>  'Jal.',
                'country' =>  'MX'

            ],
            [
                'id' => '15',
                'name' =>  'México',
                'abbrev' =>  'Mex.',
                'country' =>  'MX'

            ],
            [
                'id' => '16',
                'name' =>  'Michoacán de Ocampo',
                'abbrev' =>  'Mich.',
                'country' =>  'MX'

            ],
            [
                'id' => '17',
                'name' =>  'Morelos',
                'abbrev' =>  'Mor.',
                'country' =>  'MX'

            ],
            [
                'id' => '18',
                'name' =>  'Nayarit',
                'abbrev' =>  'Nay.',
                'country' =>  'MX'

            ],
            [
                'id' => '19',
                'name' =>  'Nuevo León',
                'abbrev' =>  'NL',
                'country' =>  'MX'

            ],
            [
                'id' => '20',
                'name' =>  'Oaxaca',
                'abbrev' =>  'Oax.',
                'country' =>  'MX'

            ],
            [
                'id' => '21',
                'name' =>  'Puebla',
                'abbrev' =>  'Pue.',
                'country' =>  'MX'

            ],
            [
                'id' => '22',
                'name' =>  'Querétaro',
                'abbrev' =>  'Qro.',
                'country' =>  'MX'

            ],
            [
                'id' => '23',
                'name' =>  'Quintana Roo',
                'abbrev' =>  'Q. Roo',
                'country' =>  'MX'

            ],
            [
                'id' => '24',
                'name' =>  'San Luis Potosí',
                'abbrev' =>  'SLP',
                'country' =>  'MX'

            ],
            [
                'id' => '25',
                'name' =>  'Sinaloa',
                'abbrev' =>  'Sin.',
                'country' =>  'MX'

            ],
            [
                'id' => '26',
                'name' =>  'Sonora',
                'abbrev' =>  'Son.',
                'country' =>  'MX'

            ],
            [
                'id' => '27',
                'name' =>  'Tabasco',
                'abbrev' =>  'Tab.',
                'country' =>  'MX'

            ],
            [
                'id' => '28',
                'name' =>  'Tamaulipas',
                'abbrev' =>  'Tamps.',
                'country' =>  'MX'

            ],
            [
                'id' => '29',
                'name' =>  'Tlaxcala',
                'abbrev' =>  'Tlax.',
                'country' =>  'MX'

            ],
            [
                'id' => '30',
                'name' =>  'Veracruz de Ignacio de la Llave',
                'abbrev' =>  'Ver.',
                'country' =>  'MX'

            ],
            [
                'id' => '31',
                'name' =>  'Yucatán',
                'abbrev' =>  'Yuc.',
                'country' =>  'MX'

            ],
            [
                'id' => '32',
                'name' =>  'Zacatecas',
                'abbrev' =>  'Zac.',
                'country' =>  'MX'
            ]
        ];

        Estado::insert($estados);
        
    }
}

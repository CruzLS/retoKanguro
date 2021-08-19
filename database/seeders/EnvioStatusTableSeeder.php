<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Status;    

class EnvioStatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Status::truncate();

        $stats =  [
            [
                'id' => '01',
                'statusNombre' =>  'Nueva',
                'statusDescripcion' =>  'Envío en la plataforma listo para recolectar.',
            ],
            [
                'id' => '02',
                'statusNombre' =>  'Recolectada',
                'statusDescripcion' =>  'Envío en la plataforma que ya fue recolectado y se encuentra en manos de la mensajería.',
            ],
            [
                'id' => '03',
                'statusNombre' =>  'En ruta',
                'statusDescripcion' =>  'Envío en ruta al destino.',
            ],
            [
                'id' => '04',
                'statusNombre' =>  'Entregada',
                'statusDescripcion' =>  'El envío fue entregado en la dirección del destinatario.',
            ],
            [
                'id' => '05',
                'statusNombre' =>  'Incidente',
                'statusDescripcion' =>  'El envío no pudo ser entregado en la dirección del destinatario.',
            ],
          

        ];

        Status::insert($stats);
    }
}

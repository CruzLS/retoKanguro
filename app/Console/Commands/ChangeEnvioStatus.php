<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Envio;

class ChangeEnvioStatus extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'change:status';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Comando para cambiar status de envío de manera random';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $envios = Envio::all();

        foreach ($envios as $envio) {
            $envio->status = rand(1, 5);
            $envio->update();
        }
        
        $this->info('Comando ejecutado, status de envíos modificados correctamente.');
    }
}

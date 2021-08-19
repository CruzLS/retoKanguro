<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Envio;
use App\Models\Estado;
use App\Models\User;
use App\Models\Paqueteria;
use App\Models\Status;


class EnvioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estados = Estado::all();
        $usuarios = User::all();
        $paqueterias = Paqueteria::all();
        $envios = Envio::all();
        $status = Status::all();

        return view('envioView.index', compact('envios','estados','usuarios','paqueterias','status'));
       

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $estados = Estado::all();
        $paqueterias = Paqueteria::all();

        return view('envioView.create', compact('estados', 'paqueterias'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Envio $envio)
    {
        $statusInicial = 1;
        $lastId = $envio->orderBy('id','desc')->pluck('id')->first();
        $nuevoNumeroRastreo = $lastId + 1;

        $numeroDeRastreo = $nuevoNumeroRastreo.date("Ymd").rand(10, 99);

    

        $envio->origen = $request->input('lugarOrigen');
        $envio->destinoFinal = $request->input('destino');
        $envio->descripcion = $request->input('descripcion');
        $envio->numeroRastreo = $numeroDeRastreo;
        $envio->paqueteria = $request->input('paqueteria');
        $envio->status = $statusInicial;
        $envio->user_id = Auth::user()->id;


        $envio->save();

        
        return redirect()->route('envios.index')->with('success','Envío establecido');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Envio $envio)
    {       
        $estados = Estado::all();
        $paqueterias = Paqueteria::all();
        $usuarios = User::all();
        $status = Status::all();

        return view('envioView.show', compact('envio','estados','paqueterias','usuarios','status'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('envioView.edit',compact('envio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'origen' ,
            'destinoFinal'  ,
            'numeroRastreo' ,
            'status',
            'user_id',
        ]);
    
        $envio->update($request->all());
    
        return redirect()->route('envioView.index')
                        ->with('success','Book updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Envio $envio)
    {
        $envio->delete();
    
        return redirect()->route('envios.index')
                        ->with('success','Envio Eliminado');
    }
   
}

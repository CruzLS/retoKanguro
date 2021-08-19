@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-20">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="text-center">
                        <h2>Informacíon del envío: {{$envio->numeroRastreo}}</h2>
                    </div>
                    <div class="pull-left">
                        <a class="btn btn-primary" href="{{ route('envios.index') }}">Regresar a dashboard</a>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Paquetería:</strong>
                        @foreach($paqueterias as $paqueteria)
                            @if($paqueteria->id == $envio->paqueteria)
                                {{$paqueteria->nombre}}
                            @endif
                        @endforeach
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Número de rastero:</strong>
                        {{ $envio->numeroRastreo }} 
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Descripción del envío:</strong>
                        {{ $envio->descripcion }} 
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Envía:</strong>
                        @foreach($usuarios as $usuario)
                            @if($usuario->id == $envio->user_id)
                                {{$usuario->name}}
                            @endif
                        @endforeach
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>lugar de origen</strong>
                        @foreach($estados as $estado)
                            @if($estado->id == $envio->origen)
                                {{$estado->name}}
                            @endif
                        @endforeach
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Destino:</strong>
                        @foreach($estados as $estado)
                            @if($estado->id == $envio->destinoFinal)
                                {{$estado->name}}
                            @endif
                        @endforeach 
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Status del envío:</strong>
                        @include('envioView.trackbar')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



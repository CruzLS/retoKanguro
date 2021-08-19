@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-20">
        <div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="text-center">
            <h2>Nuevo envío</h2>
        </div>
        <div class="pull-left">
            <a class="btn btn-primary" href="{{ route('envios.index') }}">Regresar a dashboard</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form id="envioForm" action="{{ route('envios.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>lugar de origen del paquete:</strong>
                <select class="form-control form-control-md rounded-0 g-mb-25" id="lugarOrigen" name="lugarOrigen" >
                <option value="">Seleccionar ...</option>
                @foreach($estados as $estado)
                    <option value="{{$estado->id}}">{{$estado->name}}</option>
                    
                @endforeach                    
                </select>            
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>destino del paquete:</strong>
                <select class="form-control form-control-md rounded-0 g-mb-25" id="destino" name="destino" >
                <option value="">Seleccionar ...</option>
                @foreach($estados as $estado)
                    <option value="{{$estado->id}}">{{$estado->name}}</option>
                    
                @endforeach                    
                </select>                  
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Descripción:</strong>
                <input  type="text" class="typeahead form-control" placeholder="Agrega una descripción de tu paquete" id="descripcion" name="descripcion" >
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Paquetería:</strong>
                <select class="form-control form-control-md rounded-0 g-mb-25" id="pqueteria" name="paqueteria">
                <option value="">Seleccionar ...</option>
                @foreach($paqueterias as $paqueteria)
                    <option value="{{$paqueteria->id}}">{{$paqueteria->nombre}}</option>
                    
                @endforeach                    
                </select>                  
            </div>
        </div>

        
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>
        </div>
    </div>
</div>
@endsection



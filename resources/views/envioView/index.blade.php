
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-20">
        <div >
                <a class="btn btn-success" href="{{ route('envios.create') }}">Realizar envío</a>
                @include('envioView.table')
            </div>
        </div>
    </div>
</div>
@endsection

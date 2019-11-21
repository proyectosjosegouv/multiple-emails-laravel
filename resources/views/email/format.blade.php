@extends('layout')

@section('content')

<div class="col-sm-10" style="background: 'silver'; ">
    <h2>
        Información Importante
    </h2>
    
    <p>
       {!! $mensaje !!}
    </p>
    
    <span>Gracias por su atención.</span>
    <small>Por favor NO responda a este correo electrónico-</small>
</div>

@endsection
@extends('layout')

@section('content')

<div class="col-sm-8">
    <div class="alert alert-success mt-4">
        <h2>Genial!</h2>
        <p>Tu correo fue enviado con éxito!</p>
    </div>
</div>
<div class="col-sm-8">
    <a href={{ route('escribir-email') }} class="btn btn-primary text-white" >Nuevo correo</a>
</div>


@endsection
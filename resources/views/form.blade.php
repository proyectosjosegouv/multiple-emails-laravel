@extends('layout')

@section('content')

<div class="col col-sm-8">
    <h2 class="mb-4 mt-2 pb-1 pt-1 border-bottom text-center">
        Multiple Emails en Laravel
    </h2>

    <form action={{ route('enviar-email') }} method="post">
        {{ @csrf_field() }}
        <div class="form-group">
            <label for="emisor_nombre">Nombre del Emisor</label>
            <input type="text" name="emisor_nombre" id="emisor_nombre" class="form-control" placeholder="Escribe tu nombre...">
        </div>

        <div class="form-group">
            <label for="emisor_correo">Correo electrónico del Emisor</label>
            <input type="text" name="emisor_correo" id="emisor_correo" class="form-control" placeholder="Escribe tu correo...">
        </div>

        <div class="form-group">
            <label for="asunto" >Asunto</label>
            <input type="text" name="asunto" id="asunto" class="form-control">
        </div>

        <div class="form-group">
            <label for="destinos" >
                <p>Emails de destino</p> 
                <small>Debe separar cada email de destino con <strong>coma ( , )</strong></small>
            </label>
            <textarea type="text" name="destinos" id="destinos" class="form-control" rows="3"></textarea>
        </div>

        <div class="form-group">
            <label for="mensaje" >Mensaje</label>
            <textarea type="text" name="mensaje" id="mensaje" class="form-control" rows="6"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>

</div>

@endsection
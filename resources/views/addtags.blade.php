@extends('index')
@section("titulo")
<h1>Agregar tag a organización</h1>
@endsection
@section('contenido_principal')
<form method="POST" action="{{ route("guardarTag", $contactos->id) }}">
    @csrf
    @method('POST')
    <div class="form-group" hidden>
        <input type="text" name="organizacion" value="{{$contactos->id}}">
    </div>

    <div class="form-group">
        <label>Selección de tags:</label>
        &nbsp;<BR>
    
        <select name="tag" class="selectpicker col-md-12" multiple data-live-search="true">
                @foreach($tags as $tag)
                    <option value="{{$tag->id}}">{{$tag->descripcion}}</option>
                @endforeach
        </select>
    </div>

    <div class="form-group">
        <button class="btn btn-primary" type="submit">Guardar tag</button>
    </div>
</form>
@endsection
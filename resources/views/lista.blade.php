@extends('index')
@section("titulo")
<h1>Lista de usuario</h2<>
@endsection
@section('contenido_principal')
    @foreach($usuarios as $usuario)
                        <tr>
                            <td>{{ $usuario->name}}</td>
                            <td>
                                {{ $usuario->email}}
                            </td>

                            <td>
                            <?php
                                if ($usuario > 0) {
                                echo "Activo";
                                }
                                else{
                                    "No activo";
                                }
                            ?>
                            </td>
                            <td>
                            <button class="btn btn-xs btn-danger" type="button" data-toggle="modal" data-target="#confirmarRevocar{{$usuario->id}}">Revocar usuario</button>
                            <div class="modal fade" id="#confirmarRevocar{{$usuario->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Revocar usuario {{$usuario->id}}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                    <div class="modal-body">
                                    <p>Revocar usuario? "{{$usuario->name}}"?</p>
                                    </div>
                                    <div class="modal-footer">
                                    <form method="POST"  action="{{route("revocar", $usuario->id)}}">
                                        @csrf 
    
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                    </form>
                                    </div>
                                </div>
                                </div>
                            </div>

                            </td>
                        </tr>
                    @endforeach

@endsection
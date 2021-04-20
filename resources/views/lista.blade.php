@extends('index')
@section("titulo")
<h1>Lista de usuario</h2<>
@endsection
@section('contenido_principal')
    @foreach($usuarios as $usuario)
                        <tr>
                            <td>{{ $usuario->name}}</td>
                            <td>
                                {{ $usuario->email}}<br>
                            </td>

                            <td>
                            <?php
                                if ($usuario->activo > 0) {
                                echo '<div class="text-success">Activo</div>';
                                }
                                else{
                                    echo '<div class="text-danger">No Activo</div>';
                                }
                            ?>
                            </td>
                            <td>
                            <br>
                            <button class="btn btn-xs btn-danger" type="button" >Revocar usuario</button>
                            
                            </td>
                        </tr>
    @endforeach

@endsection
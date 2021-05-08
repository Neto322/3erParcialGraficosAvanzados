
@extends('index')

@section('contenido_principal')
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Colonias</a></li>
              <li class="breadcrumb-item active">Colonias</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <div class="row">
            <div class="col-3">
              <h3 class="card-title">Lista de Colonias</h3>
            </div>
           
          </div>    

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        <div class="card-body">
        @if(Session::has("exito"))
            <p style="color: #0e7a0e">{{ Session::get("exito") }}</p>
        @endif
        @if(Session::has("error"))
            <p style="color: #a11919a1">{{ Session::get("error") }}</p>
        @endif
        <a href="{{route("colonias.create")}}">Crear nueva colonia</button></a>
        <table class="table table-borderer">
            <thead>
                <th>Colonias</th>
                <th>Acciones</th>
            </thead>
            <tbody>
                @foreach($colonias as $colonia)
                    <tr>
                        <td><p>{{ $colonia->nombre }}</p></td>
                        <td>
                            <a href="{{route('colonias.editar', $colonia->id)}}"><button class="btn btn-xs btn-primary">Editar</button></a>
                            <button class="btn btn-xs btn-danger" type="button" data-toggle="modal" data-target="#confirmarEliminacion{{ $colonia->id }}">Eliminar</button>
                            <!-- Modal -->
                            <div class="modal fade" id="confirmarEliminacion{{ $colonia->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Confirmacion de eliminacion de la colonia {{ $colonia ->id}}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                    <p>¿Estas seguro de eliminar la colonia: "{{$colonia->nombre}}"? </p>
                                  </div>
                                  <div class="modal-footer">
                                    <form method="POST" action="{{route("colonias.destroy", $colonia->id)}}">
                                      @csrf
                                      @method('delete')
                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                      <button type="submit" class="btn btn-danger">Eliminar</button>
                                    </form>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Pie de la tabla de lista de colonias
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
    @endsection

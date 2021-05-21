
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
              <li class="breadcrumb-item"><a href="#">Tags</a></li>
              <li class="breadcrumb-item active">Lista de tags</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
      <div class="card card-custom wave wave-animate-slow wave-success mb-8 mb-lg-0">
        <div class="card-body">
            <div class="d-flex align-items-center p-5">
                <div class="d-flex flex-column">
                    <a href="#" class="text-dark text-hover-primary font-weight-bold font-size-h3 mb-3">Lista de Tags</a>
                    <div class="text-dark-75">Aqui puedes consultar los tags disponibles, editarlos y más.</div>
                </div>
            </div>
        </div>
    </div>
    
        <div class="card-header">
        
          <div class="row">
            
              <form class="form-inline ml-4" type="get">
              <div class="input-group input-group-xl">
                <input class="form-control form-control-navbar" type="search" name="search" placeholder="Buscar" aria-label="Search">
                <div class="input-group-append">
                  <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                </div>
                </div>
              </form>
            
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
        <a href="{{route("tags.create")}}">Crear nueva tag</button></a>
        <table class="table table-borderer">
            <thead>
                <th>Tags</th>
                <th>Acciones</th>
            </thead>
            <tbody>
                @foreach($tags as $tag)
                    <tr>



                        <td><button class="btn btn-xs btn-secondary">{{ $tag->descripcion }}<a data-toggle="modal" data-target="#confirmarEliminacion{{ $tag->id }}"><i class="far fa-trash-alt ml-5"></i></a></button></td>
                        <td>
                            <a href="{{route('tags.editar', $tag->id)}}"><button class="btn btn-xs btn-primary">Editar</button></a>
                            <button class="btn btn-xs btn-danger" type="button" data-toggle="modal" data-target="#confirmarEliminacion{{ $tag->id }}">Eliminar</button>
                            <!-- Modal -->
                            <div class="modal fade" id="confirmarEliminacion{{ $tag->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Confirmacion de eliminacion del tag {{ $tag ->id}}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                    <p>¿Estas seguro de eliminar el tag: "{{$tag->descripcion}}"? </p>
                                  </div>
                                  <div class="modal-footer">
                                    <form method="POST" action="{{route("tags.destroy", $tag->id)}}">
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
          Pie de la tabla de lista de tags
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
    @endsection

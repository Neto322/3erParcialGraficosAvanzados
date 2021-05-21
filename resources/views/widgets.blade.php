
@extends('index')

@section('contenido_principal')
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
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
                    <a href="#" class="text-dark text-hover-primary font-weight-bold font-size-h3 mb-3">Widgets</a>
                    <div class="text-dark-75">Conoce más a fondo tus OSC.</div>
                </div>
            </div>
        </div>
    </div>
      

        <div class="container-fluid">
            <div class="row">
                <div class="col-4"></br>
                  <h4>Lo mas buscado del mes</h4>
                  <ol class="list-group list-group-numbered">
                  @foreach($tags as $tag)                  
                        <div>  
                                      
                        @if(date("m", strtotime($tag->updated_at)) == date("m"))
                          <br/>
                          <div class="bg-secondary">{{ $tag->descripcion }}</div>                 
                   
                        </div>
                        @endif
                  @endforeach
                  </ol>
                </div>
                <div class="col-4"></br>
                  <h4>Lo mas buscado del año</h4>
                  
                  <ol class="list-group list-group-numbered">
                  @foreach($tags as $tag)
                    <br/>
                    <div class="bg-secondary">{{ $tag->descripcion }}</div>                 
                 
                  @endforeach
                  </ol>
                </div>
            </div>
        </div>    
     
        <!-- /.card-body -->
        <div class="card-footer">
          Pie de la tabla de widgets
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
    @endsection

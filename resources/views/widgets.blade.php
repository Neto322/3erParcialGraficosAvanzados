
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
        <div class="card-header">
          <h3 class="card-title">Widgets</h3>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-4">
                <ol class="list-group list-group-numbered">
                    <li class="list-group-item">Cras justo odio</li>
                    <li class="list-group-item">Cras justo odio</li>
                    <li class="list-group-item">Cras justo odio</li>
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

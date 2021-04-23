
@extends('layouts.app')

@section('content')
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
        <div class="card-header">
          <h3 class="card-title">Crear noticia</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route("admin.noticias.store") }}">
                @csrf
                <div class="form-group">
                    <label>Titulo:</label>
                     <input class="form-control" name="titulo" type="text">
                 </div>
                 <div class="form-group">
                    <label>Fecha:</label>
                    <input class="form-control" name="fecha" type="date">
                 </div>
                 <div class="form-group">
                    <label>Autor:</label>
                    <input class="form-control" name="autor" type="text">
                 </div>
                 <div  class="form-group">
                 <label>Cuerpo:</label>
                 <textarea class="form-control" rows="5" name="cuerpo"></textarea>
                 </div>
                 <div class="form-group">
                    <label>Foto</label>
                    <input class="form-control" name="foto" type="text">
                 </div>
                 <button type="submit" class="btn btn-primary">Agregar nueva noticia</button>
             </form>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Pie de pagina
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
 <!-- /.content -->
@endsection
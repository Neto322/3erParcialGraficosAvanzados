@extends('index')
@section("titulo")
<h1>Crear organizacion</h1>
@endsection
@section('contenido_principal')

<div class="card card-custom gutter-b">
    <div class="card-header flex-wrap py-3">
        <div class="card-title">
            {{-- <h3 class="card-label">Crear nuevo editor</h3> --}}
                @if(Session::has('exito'))
                    <h5><p style="color: #15b915">{{Session::get('exito')}}</p></h5>
                @endif
                @if(Session::has('error'))
                    <h5><p style="color: #bb1717">{{Session::get('error')}}</p></h5>
                @endif
            {{-- <span class="d-block text-muted pt-2 font-size-sm">sorting &amp; pagination remote datasource</span></h3> --}}
        </div>
        <div class="card-toolbar">
            <!--begin::Dropdown-->
            <div class="dropdown dropdown-inline mr-2">
                {{-- <button type="button" class="btn btn-light-primary font-weight-bolder dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> --}}
                {{-- <span class="svg-icon svg-icon-md"> --}}
                    <!--begin::Svg Icon | path:assets/media/svg/icons/Design/PenAndRuller.svg-->
                    {{-- <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24" />
                            <path d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z" fill="#000000" opacity="0.3" />
                            <path d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z" fill="#000000" />
                        </g>
                    </svg> --}}
                    <!--end::Svg Icon-->
                {{-- </span>Export</button> --}}
                <!--begin::Dropdown Menu-->
                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                    <!--begin::Navigation-->
                    <ul class="navi flex-column navi-hover py-2">
                        <li class="navi-header font-weight-bolder text-uppercase font-size-sm text-primary pb-2">Choose an option:</li>
                        <li class="navi-item">
                            <a href="#" class="navi-link">
                                <span class="navi-icon">
                                    <i class="la la-print"></i>
                                </span>
                                <span class="navi-text">Print</span>
                            </a>
                        </li>
                        <li class="navi-item">
                            <a href="#" class="navi-link">
                                <span class="navi-icon">
                                    <i class="la la-copy"></i>
                                </span>
                                <span class="navi-text">Copy</span>
                            </a>
                        </li>
                        <li class="navi-item">
                            <a href="#" class="navi-link">
                                <span class="navi-icon">
                                    <i class="la la-file-excel-o"></i>
                                </span>
                                <span class="navi-text">Excel</span>
                            </a>
                        </li>
                        <li class="navi-item">
                            <a href="#" class="navi-link">
                                <span class="navi-icon">
                                    <i class="la la-file-text-o"></i>
                                </span>
                                <span class="navi-text">CSV</span>
                            </a>
                        </li>
                        <li class="navi-item">
                            <a href="#" class="navi-link">
                                <span class="navi-icon">
                                    <i class="la la-file-pdf-o"></i>
                                </span>
                                <span class="navi-text">PDF</span>
                            </a>
                        </li>
                    </ul>
                    <!--end::Navigation-->
                </div>
                <!--end::Dropdown Menu-->
            </div>
            <!--end::Dropdown-->
            <!--begin::Button-->
            {{-- <a href="#" class="btn btn-primary font-weight-bolder">
            <span class="svg-icon svg-icon-md"> --}}
                <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg-->
                {{-- <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <rect x="0" y="0" width="24" height="24" />
                        <circle fill="#000000" cx="9" cy="15" r="6" />
                        <path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3" />
                    </g>
                </svg> --}}
                <!--end::Svg Icon-->
            {{-- </span>New Record</a> --}}
            <!--end::Button-->
        </div>
    </div>
    <div class="card-body">
        <!--begin: Datatable-->
        <table class="table table-bordered table-checkable" id="kt_datatable">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <form method="POST" action="{{route("guardarContacto")}}">
                            @csrf
                            <div class="form-group">
                                <label>Nombre:</label>
                                <input class="form-control" name="nombre" type="text">
                            </div>
                            <div class="form-group">
                                <label>Objeto social:</label>
                                <input class="form-control" name="objetoSocial" type="text">
                            </div>
                            <div class="form-group">
                                <label>Presidente:</label>
                                <input class="form-control" name="presidente" type="text">
                            </div>
                            <div class="form-group">
                                <label>Representante legal:</label>
                                <input class="form-control" name="representanteLegal" type="text">
                            </div>
                            <div class="form-group">
                                <label>Director:</label>
                                <input class="form-control" name="director" type="text">
                            </div>
                            <div class="form-group">
                                <label>Domicilio:</label>
                                <input class="form-control" name="domicilio" type="text">
                            </div>
                            <div class="form-group">
                                <label>Telefono:</label>
                                <input class="form-control" name="telefono" type="text">
                            </div>
                            <div class="form-group">
                                <label>Email:</label>
                                <input class="form-control" name="email" type="text">
                            </div>
                            <div class="form-group">
                                <label>Sitio web:</label>
                                <input class="form-control" name="sitioWeb" type="text">
                            </div>
                            <div class="form-group">
                                <label>Facebook:</label>
                                <input class="form-control" name="facebook" type="text">
                            </div>
                            <div class="form-group">
                                <label>Instagram:</label>
                                <input class="form-control" name="instagram" type="text">
                            </div>
                            <div class="form-group">
                                <label>Twitter:</label>
                                <input class="form-control" name="twitter" type="text">
                            </div>

                            
                            <div class="form-group">
                            <label>Fecha vigencia:</label>
                            <input class =" form-control"  name="fecha_vigencia" type="date">
                            </div>

                            <div class="form-group">
                                <button class="btn btn-primary" type="submit">Agregar nueva organizacion</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </table>
    </div>
</div>

@endsection
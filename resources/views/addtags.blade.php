@extends('index')
@section("titulo")
<h1>Agregar tag a organización</h1>
@endsection


@section('contenido_principal')
<div class="content d-flex flex-column flex-column-fluid pt-5 mt-5" id="kt_content">
						<!--begin::Subheader-->
						<div class="subheader py-2 py-lg-6 subheader-solid" id="kt_subheader">
							<div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
								<!--begin::Info-->
								<div class="d-flex align-items-center flex-wrap mr-1">
									<!--begin::Page Heading-->
									<div class="d-flex align-items-baseline flex-wrap mr-5">
										<!--begin::Page Title-->
										<h5 class="text-dark font-weight-bold my-1 mr-5">Pricing Tables 2</h5>
										<!--end::Page Title-->
										<!--begin::Breadcrumb-->
										<ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
											<li class="breadcrumb-item text-muted">
												<a href="" class="text-muted">Pages</a>
											</li>
											<li class="breadcrumb-item text-muted">
												<a href="" class="text-muted">Pricing Tables 2</a>
											</li>
										</ul>
										<!--end::Breadcrumb-->
									</div>
									<!--end::Page Heading-->
								</div>
								<!--end::Info-->
								<!--begin::Toolbar-->
								<div class="d-flex align-items-center">
									<!--begin::Actions-->
									<a href="#" class="btn btn-light-primary font-weight-bolder btn-sm">Actions</a>
									<!--end::Actions-->
									<!--begin::Dropdown-->
									<div class="dropdown dropdown-inline" data-toggle="tooltip" title="" data-placement="left" data-original-title="Quick actions">
										<a href="#" class="btn btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<span class="svg-icon svg-icon-success svg-icon-2x">
												<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Files/File-plus.svg-->
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<polygon points="0 0 24 0 24 24 0 24"></polygon>
														<path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
														<path d="M11,14 L9,14 C8.44771525,14 8,13.5522847 8,13 C8,12.4477153 8.44771525,12 9,12 L11,12 L11,10 C11,9.44771525 11.4477153,9 12,9 C12.5522847,9 13,9.44771525 13,10 L13,12 L15,12 C15.5522847,12 16,12.4477153 16,13 C16,13.5522847 15.5522847,14 15,14 L13,14 L13,16 C13,16.5522847 12.5522847,17 12,17 C11.4477153,17 11,16.5522847 11,16 L11,14 Z" fill="#000000"></path>
													</g>
												</svg>
												<!--end::Svg Icon-->
											</span>
										</a>
										<div class="dropdown-menu dropdown-menu-md dropdown-menu-right p-0 m-0">
											<!--begin::Navigation-->
											<ul class="navi navi-hover">
												<li class="navi-header font-weight-bold py-4">
													<span class="font-size-lg">Choose Label:</span>
													<i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="" data-original-title="Click to learn more..."></i>
												</li>
												<li class="navi-separator mb-3 opacity-70"></li>
												<li class="navi-item">
													<a href="#" class="navi-link">
														<span class="navi-text">
															<span class="label label-xl label-inline label-light-success">Customer</span>
														</span>
													</a>
												</li>
												<li class="navi-item">
													<a href="#" class="navi-link">
														<span class="navi-text">
															<span class="label label-xl label-inline label-light-danger">Partner</span>
														</span>
													</a>
												</li>
												<li class="navi-item">
													<a href="#" class="navi-link">
														<span class="navi-text">
															<span class="label label-xl label-inline label-light-warning">Suplier</span>
														</span>
													</a>
												</li>
												<li class="navi-item">
													<a href="#" class="navi-link">
														<span class="navi-text">
															<span class="label label-xl label-inline label-light-primary">Member</span>
														</span>
													</a>
												</li>
												<li class="navi-item">
													<a href="#" class="navi-link">
														<span class="navi-text">
															<span class="label label-xl label-inline label-light-dark">Staff</span>
														</span>
													</a>
												</li>
												<li class="navi-separator mt-3 opacity-70"></li>
												<li class="navi-footer py-4">
													<a class="btn btn-clean font-weight-bold btn-sm" href="#">
													<i class="ki ki-plus icon-sm"></i>Add new</a>
												</li>
											</ul>
											<!--end::Navigation-->
										</div>
									</div>
									<!--end::Dropdown-->
								</div>
								<!--end::Toolbar-->
							</div>
						</div>
						<!--end::Subheader-->
						<!--begin::Entry-->
						<div class="d-flex flex-column-fluid">
							<!--begin::Container-->
							<div class="container">
								<!--begin::Card-->
								<div class="card">
									<!-- begin: custom background-->
									<div class="position-absolute w-100 h-50 rounded-card-top card-custom wave wave-animate-slow wave-primary"></div>
									<!-- end: custom background-->
									<div class="card-body position-relative">
										<h3 class="7 text-secondary display-4 text-center my-10 my-lg-15 pt-5 pb-5">Agrega nuevos Tags</h3>
										<!-- begin: Tabs-->
										
										<!-- end: Tabs-->
										<div class="tab-content">
											<!-- begin: Tab pane-->
											<form method="POST" action="{{ route("guardarTag", $contactos->id) }}">
                                                @csrf
                                                @method('POST')
                                                <div class="form-group pt-5" hidden>
                                                    <input type="text" name="organizacion" value="{{$contactos->id}}">
                                                </div>

                                                <div class="form-group pt-5">
                                                    <label>Selección de tags:</label>
                                                    &nbsp;<BR>
                                                
                                                    <select name="tag" class="selectpicker col-md-12" multiple data-live-search="true">
                                                            @foreach($tags as $tag)
                                                                <option value="{{$tag->id}}">{{$tag->descripcion}}</option>
                                                            @endforeach
                                                    </select>
                                                </div>

                                                <div class="form-group d-flex justify-content-center">
                                                    <button class="btn btn-light-primary  " type="submit">Guardar tag</button>
                                                </div>
                                            </form>
											<!-- end: Tab pane-->
											<!-- begin: Tab pane-->
											<div class="tab-pane row text-center" id="kt-pricing-2_content2" role="tabpanel" aria-labelledby="pills-tab-2">
												<div class="card-body bg-white col-11 col-lg-12 col-xxl-10 mx-auto">
													<div class="row justify-content-center">
														<!-- begin: Pricing-->
														<div class="col-md-4">
															<div class="pt-30 pt-md-25 pb-15 px-5 text-center">
																<!--begin::Icon-->
																<div class="d-flex flex-center position-relative mb-25">
																	<span class="svg svg-fill-primary opacity-4 position-absolute">
																		<svg width="175" height="200">
																			<polyline points="87,0 174,50 174,150 87,200 0,150 0,50 87,0"></polyline>
																		</svg>
																	</span>
																	<span class="svg-icon svg-icon-5x svg-icon-primary">
																		<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Home/Flower3.svg-->
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<polygon points="0 0 24 0 24 24 0 24"></polygon>
																				<path d="M1.4152146,4.84010415 C11.1782334,10.3362599 14.7076452,16.4493804 12.0034499,23.1794656 C5.02500006,22.0396582 1.4955883,15.9265377 1.4152146,4.84010415 Z" fill="#000000" opacity="0.3"></path>
																				<path d="M22.5950046,4.84010415 C12.8319858,10.3362599 9.30257403,16.4493804 12.0067693,23.1794656 C18.9852192,22.0396582 22.5146309,15.9265377 22.5950046,4.84010415 Z" fill="#000000" opacity="0.3"></path>
																				<path d="M12.0002081,2 C6.29326368,11.6413199 6.29326368,18.7001435 12.0002081,23.1764706 C17.4738192,18.7001435 17.4738192,11.6413199 12.0002081,2 Z" fill="#000000" opacity="0.3"></path>
																			</g>
																		</svg>
																		<!--end::Svg Icon-->
																	</span>
																</div>
																<!--end::Icon-->
																<!--begin::Content-->
																<h4 class="font-size-h3 mb-10">Basic Plan</h4>
																<div class="d-flex flex-column line-height-xl mb-10">
																	<span>1 Domain</span>
																	<span>10 Users</span>
																	<span>20 Copies</span>
																	<span>Free Assets</span>
																</div>
																<span class="font-size-h1 d-block font-weight-boldest text-dark">19 
																<sup class="font-size-h3 font-weight-normal pl-1">$</sup></span>
																<div class="mt-7">
																	<button type="button" class="btn btn-primary text-uppercase font-weight-bolder px-15 py-3">Purchase</button>
																</div>
																<!--end::Icon-->
															</div>
														</div>
														<!-- end: Pricing-->
														<!-- begin: Pricing-->
														<div class="col-md-4 border-x-0 border-x-md border-y border-y-md-0">
															<div class="pt-30 pt-md-25 pb-15 px-5 text-center">
																<!--begin::Icon-->
																<div class="d-flex flex-center position-relative mb-25">
																	<span class="svg svg-fill-primary opacity-4 position-absolute">
																		<svg width="175" height="200">
																			<polyline points="87,0 174,50 174,150 87,200 0,150 0,50 87,0"></polyline>
																		</svg>
																	</span>
																	<span class="svg-icon svg-icon-5x svg-icon-primary">
																		<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Tools/Compass.svg-->
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<rect x="0" y="0" width="24" height="24"></rect>
																				<path d="M7.07744993,12.3040451 C7.72444571,13.0716094 8.54044565,13.6920474 9.46808594,14.1079953 L5,23 L4.5,18 L7.07744993,12.3040451 Z M14.5865511,14.2597864 C15.5319561,13.9019016 16.375416,13.3366121 17.0614026,12.6194459 L19.5,18 L19,23 L14.5865511,14.2597864 Z M12,3.55271368e-14 C12.8284271,3.53749572e-14 13.5,0.671572875 13.5,1.5 L13.5,4 L10.5,4 L10.5,1.5 C10.5,0.671572875 11.1715729,3.56793164e-14 12,3.55271368e-14 Z" fill="#000000" opacity="0.3"></path>
																				<path d="M12,10 C13.1045695,10 14,9.1045695 14,8 C14,6.8954305 13.1045695,6 12,6 C10.8954305,6 10,6.8954305 10,8 C10,9.1045695 10.8954305,10 12,10 Z M12,13 C9.23857625,13 7,10.7614237 7,8 C7,5.23857625 9.23857625,3 12,3 C14.7614237,3 17,5.23857625 17,8 C17,10.7614237 14.7614237,13 12,13 Z" fill="#000000" fill-rule="nonzero"></path>
																			</g>
																		</svg>
																		<!--end::Svg Icon-->
																	</span>
																</div>
																<!--end::Icon-->
																<!--begin::Content-->
																<h4 class="font-size-h3 mb-10">For Business</h4>
																<div class="d-flex flex-column line-height-xl mb-10">
																	<span>10 Domains</span>
																	<span>Unlimited Users</span>
																	<span>Unlimited Copies</span>
																	<span>Free Assets</span>
																</div>
																<span class="font-size-h1 d-block font-weight-boldest text-dark">49 
																<sup class="font-size-h3 font-weight-normal pl-1">$</sup></span>
																<div class="mt-7">
																	<button type="button" class="btn btn-primary text-uppercase font-weight-bolder px-15 py-3">Purchase</button>
																</div>
																<!--end::Content-->
															</div>
														</div>
														<!-- end: Pricing-->
														<!-- begin: Pricing-->
														<div class="col-md-4">
															<div class="pt-30 pt-md-25 pb-15 px-5 text-center">
																<!--begin::Icon-->
																<div class="d-flex flex-center position-relative mb-25">
																	<span class="svg svg-fill-primary opacity-4 position-absolute">
																		<svg width="175" height="200">
																			<polyline points="87,0 174,50 174,150 87,200 0,150 0,50 87,0"></polyline>
																		</svg>
																	</span>
																	<span class="svg-icon svg-icon-5x svg-icon-primary">
																		<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Shopping/Cart2.svg-->
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<rect x="0" y="0" width="24" height="24"></rect>
																				<path d="M12,4.56204994 L7.76822128,9.6401844 C7.4146572,10.0644613 6.7840925,10.1217854 6.3598156,9.76822128 C5.9355387,9.4146572 5.87821464,8.7840925 6.23177872,8.3598156 L11.2317787,2.3598156 C11.6315738,1.88006147 12.3684262,1.88006147 12.7682213,2.3598156 L17.7682213,8.3598156 C18.1217854,8.7840925 18.0644613,9.4146572 17.6401844,9.76822128 C17.2159075,10.1217854 16.5853428,10.0644613 16.2317787,9.6401844 L12,4.56204994 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
																				<path d="M3.28077641,9 L20.7192236,9 C21.2715083,9 21.7192236,9.44771525 21.7192236,10 C21.7192236,10.0817618 21.7091962,10.163215 21.6893661,10.2425356 L19.5680983,18.7276069 C19.234223,20.0631079 18.0342737,21 16.6576708,21 L7.34232922,21 C5.96572629,21 4.76577697,20.0631079 4.43190172,18.7276069 L2.31063391,10.2425356 C2.17668518,9.70674072 2.50244587,9.16380623 3.03824078,9.0298575 C3.11756139,9.01002735 3.1990146,9 3.28077641,9 Z M12,12 C11.4477153,12 11,12.4477153 11,13 L11,17 C11,17.5522847 11.4477153,18 12,18 C12.5522847,18 13,17.5522847 13,17 L13,13 C13,12.4477153 12.5522847,12 12,12 Z M6.96472382,12.1362967 C6.43125772,12.2792385 6.11467523,12.8275755 6.25761704,13.3610416 L7.29289322,17.2247449 C7.43583503,17.758211 7.98417199,18.0747935 8.51763809,17.9318517 C9.05110419,17.7889098 9.36768668,17.2405729 9.22474487,16.7071068 L8.18946869,12.8434035 C8.04652688,12.3099374 7.49818992,11.9933549 6.96472382,12.1362967 Z M17.0352762,12.1362967 C16.5018101,11.9933549 15.9534731,12.3099374 15.8105313,12.8434035 L14.7752551,16.7071068 C14.6323133,17.2405729 14.9488958,17.7889098 15.4823619,17.9318517 C16.015828,18.0747935 16.564165,17.758211 16.7071068,17.2247449 L17.742383,13.3610416 C17.8853248,12.8275755 17.5687423,12.2792385 17.0352762,12.1362967 Z" fill="#000000"></path>
																			</g>
																		</svg>
																		<!--end::Svg Icon-->
																	</span>
																</div>
																<!--end::Icon-->
																<!--end::Content-->
																<h4 class="font-size-h3 mb-10">Enterprise</h4>
																<div class="d-flex flex-column line-height-xl mb-10">
																	<span>Unlimited Domain</span>
																	<span>Unlimited Users</span>
																	<span>Unlimited Copies</span>
																	<span>Free Assets</span>
																</div>
																<span class="font-size-h1 d-block font-weight-boldest text-dark">29 
																<sup class="font-size-h3 font-weight-normal pl-1">$</sup></span>
																<div class="mt-7">
																	<button type="button" class="btn btn-primary text-uppercase font-weight-bolder px-15 py-3">Purchase</button>
																</div>
																<!--end::Content-->
															</div>
														</div>
														<!-- end: Pricing-->
													</div>
												</div>
											</div>
											<!-- end: Tab pane-->
										</div>
									</div>
								</div>
								<!--end::Card-->
							</div>
							<!--end::Container-->
						</div>
						<!--end::Entry-->
					</div>

@endsection
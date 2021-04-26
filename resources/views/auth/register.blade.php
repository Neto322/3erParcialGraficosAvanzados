<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head><base href="../../../">
		<meta charset="utf-8" />
		<title>Registrate | CFS</title>
		<meta name="description" content="Login page example" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<link rel="canonical" href="https://keenthemes.com/metronic" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Page Custom Styles(used by this page)-->
		<link href="assets/css/pages/login/login-1.css" rel="stylesheet" type="text/css" />
		<!--end::Page Custom Styles-->
		<!--begin::Global Theme Styles(used by all pages)-->
		<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Global Theme Styles-->
		<!--begin::Layout Themes(used by all pages)-->
		<link href="assets/css/themes/layout/header/base/light.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/themes/layout/header/menu/light.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/themes/layout/brand/dark.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/themes/layout/aside/dark.css" rel="stylesheet" type="text/css" />
		<!--end::Layout Themes-->
		<link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
		<!--begin::Main-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Login-->
			<div class="login login-1 login-signin-on d-flex flex-column flex-lg-row flex-column-fluid bg-white" id="kt_login">
				<!--begin::Aside-->
				<div class="login-aside d-flex flex-column flex-row-auto" style="background-color: #F9F9F9;">
					<!--begin::Aside Top-->
					<div class="d-flex flex-column-auto flex-column pt-lg-40 pt-15">
						<a href="#" class="text-center mb-10">
							<img src="/assets/media/logos/centro100.png" class="max-h-80px" alt="" />
						</a>
						<!--end::Aside header-->
						<!--begin::Aside title-->
						<h3 class="font-weight-bolder text-center font-size-h4 font-size-h1-lg" style="color: #5C8397;">Bienvenido
						
						<!--end::Aside title-->
					</div>
					<!--end::Aside Top-->

					<!--begin::Aside Bottom-->
					<div class="aside-img d-flex flex-row-fluid bgi-no-repeat bgi-position-y-bottom bgi-position-x-center" style="background-image: url(assets/media/svg/illustrations/login-visual-4.svg)"></div>
					<!--end::Aside Bottom-->
				</div>
				<!--begin::Aside-->


				<!--begin::Content-->
				<div class="login-content flex-row-fluid d-flex flex-column justify-content-center  p-7 mx-auto">
					<!--begin::Content body-->
					<div class="d-flex flex-column-fluid flex-center">
						<!--begin::SignUP-->

						<div >
							<!--begin::Form-->
							<form method="POST" action="{{ route('register') }}" class="form" >
                                @csrf
								<!--begin::Title-->
								<div class="pb-13 pt-lg-0 pt-5">
									<h3 class="font-weight-bolder text-dark font-size-h4 font-size-h1-lg">Registrate</h3>
									<p class="text-muted font-weight-bold font-size-h4">Ingresa tu información para crear tu cuenta</p>
								</div>
								<!--end::Title-->
								<!--begin::Form group-->
								<div class="form-group">
									<input id="name" class="form-control form-control-solid h-auto py-6 px-6 rounded-lg font-size-h6 @error('name') is-invalid @enderror" type="text" placeholder="Nombre" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus />
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
								</div>
								<!--end::Form group-->
								<!--begin::Form group-->
								<div class="form-group">
									<input id="email" class="form-control form-control-solid h-auto py-6 px-6 rounded-lg font-size-h6 @error('email') is-invalid @enderror" type="email" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" />
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                     @enderror
                                </div>
								<!--end::Form group-->
								<!--begin::Form group-->
								<div class="form-group">
									<input id="password" class="form-control form-control-solid h-auto py-6 px-6 rounded-lg font-size-h6 @error('password') is-invalid @enderror" type="password" placeholder="Contraseña" name="password" required autocomplete="new-password" />
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
								</div>
								<!--end::Form group-->
								<!--begin::Form group-->
								<div class="form-group">
									<input id="password-confirm" class="form-control form-control-solid h-auto py-6 px-6 rounded-lg font-size-h6" type="password" placeholder="Repetir contraseña" name="password_confirmation" required autocomplete="new-password" />
								</div>
								<!--end::Form group-->
                                	<!--begin::Form group-->
								<div class="form-group">
									<input id="id_tipo_usuario" class="form-control form-control-solid h-auto py-6 px-6 rounded-lg font-size-h6" type="number" placeholder="id Tipo de Usuario" name="id_tipo_usuario" required autocomplete="1" />
                                   
								</div>
								<!--end::Form group-->
								<!--begin::Form group-->
								

								<!--end::Form group-->
								<!--begin::Form group-->
								<div class="form-group d-flex flex-wrap pb-lg-0 pb-3">
									<button type="submit" id="kt_login_signup_submit" class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-4">Comenzar</button>
									
								</div>
								<!--end::Form group-->
							</form>
							<!--end::Form-->
						</div>

						<!--end::SignUp-->
						<!--begin::Forgot-->
						
						<!--end::Forgot-->
					</div>
					<!--end::Content body-->
					<!--begin::Content footer-->
					<div class="d-flex justify-content-lg-start justify-content-center align-items-end py-7 py-lg-0">
						<div class="text-dark-50 font-size-lg font-weight-bolder mr-10">
							<span class="mr-1">2021©</span>
							<a href="http://keenthemes.com/metronic" target="_blank" class="text-dark-75 text-hover-primary">Keenthemes</a>
						</div>
						
					</div>
					<!--end::Content footer-->
				</div>
				<!--end::Content-->
			</div>
			<!--end::Login-->
		</div>
		<!--end::Main-->
		<script>var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";</script>
		<!--begin::Global Config(global config for global JS scripts)-->
		<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1400 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#3699FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#E4E6EF", "dark": "#181C32" }, "light": { "white": "#ffffff", "primary": "#E1F0FF", "secondary": "#EBEDF3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#3F4254", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#EBEDF3", "gray-300": "#E4E6EF", "gray-400": "#D1D3E0", "gray-500": "#B5B5C3", "gray-600": "#7E8299", "gray-700": "#5E6278", "gray-800": "#3F4254", "gray-900": "#181C32" } }, "font-family": "Poppins" };</script>
		<!--end::Global Config-->
		<!--begin::Global Theme Bundle(used by all pages)-->
		<script src="assets/plugins/global/plugins.bundle.js"></script>
		<script src="assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
		<script src="assets/js/scripts.bundle.js"></script>
		<!--end::Global Theme Bundle-->
	</body>
	<!--end::Body-->
</html>



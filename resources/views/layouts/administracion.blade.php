<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ config('app.name', 'Laravel') }}</title>

	<!-- Font Awesome Icons -->
	<link href="{{ asset('css/adminlte/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
	<!-- Theme style -->
	<link rel="stylesheet" href="{{ asset('css/adminlte/adminlte.css') }}">
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

	<!-- Main Sidebar Container -->
	<aside class="main-sidebar sidebar-dark-primary elevation-4">
		<!-- Brand Logo -->
		<a href="{{ route('administracion.index') }}" class="brand-link">
			<img src="{{ asset('imagenes/site-assets/logo-admin.png') }}" alt="Forinder" class="brand-image img-circle elevation-3"
					 style="opacity: .8">
			<span class="brand-text font-weight-light">Forinder</span>
		</a>

		<!-- Sidebar -->
		<div class="sidebar">
			<!-- Sidebar user panel (optional) -->
			<div class="user-panel mt-3 pb-3 mb-3 d-flex">
				<!-- <div class="image">
					<img src="{{ asset('img/adminltemp/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
				</div> -->
				<div class="info">
					<span class="d-block text-white">Nombre usuario</span>
				</div> 
			</div>

			<!-- Sidebar Menu -->
			<nav class="mt-2">
				<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
					<!-- Add icons to the links using the .nav-icon class
							 with font-awesome or any other icon font library -->
							 <!-- la clase menu-open lo abre por defecto -->
					<li class="nav-item has-treeview menu-open">
						<a href="#" class="nav-link active">
							<i class="nav-icon fas fa-tachometer-alt"></i>
							<p>
								Starter Pages
								<i class="right fas fa-angle-left"></i>
							</p>
						</a>
						<ul class="nav nav-treeview">
							<li class="nav-item">
								<a href="#" class="nav-link active">
									<i class="far fa-circle nav-icon"></i>
									<p>Active Page</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link">
									<i class="far fa-circle nav-icon"></i>
									<p>Inactive Page</p>
								</a>
							</li>
						</ul>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link">
							<i class="nav-icon fas fa-th"></i>
							<p>
								Simple Link
								<span class="right badge badge-danger">New</span>
							</p>
						</a>
					</li>
				</ul>
			</nav>
			<!-- /.sidebar-menu -->
		</div>
		<!-- /.sidebar -->
	</aside>

	<!-- Cuerpo de la página -->
	@yield('content')

	<!-- Control Sidebar -->
	@yield('sidebar')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{ asset('js/plugins/jquery.3.4.1.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('js/plugins/bootstrap.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('js/plugins/adminlte.min.js') }}"></script>
</body>
</html>
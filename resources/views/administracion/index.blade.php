@extends('layouts.administracion')

@section('content')
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="container-fluid">
				<div class="row mb-2">
					<div class="col-sm-6">
						<h1 class="m-0 text-dark">Panel de control Sitio Forinder</h1>
					</div><!-- /.col -->
					<div class="col-sm-6">
						<ol class="breadcrumb float-sm-right">
							<li class="breadcrumb-item"><a href="{{ route('administracion.index') }}">Inicio</a></li>
							<li class="breadcrumb-item active">Pagina principal</li>
						</ol>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.container-fluid -->
		</div>
		<!-- /.content-header -->

		<!-- Main content -->
		<div class="content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-6">
						<div class="card card-primary card-outline">
							<div class="card-header border-0">
				            	<h3 class="card-title">Artículos</h3>
				            </div>
				            <div class="card-body table-responsive p-0">
				            	<table class="table table-striped table-valign-middle">
				                	<thead>
				                		<tr>
				                    		<th>Imagen</th>
				                    		<th>Título</th>
				                    		<th>Fecha publicación</th>
					                	</tr>
				                	</thead>
				                	<tbody>
				                		@foreach ($articulos as $articulo)
					                		<tr>
					                    		<td>
						                      		<img style="height:32px;" src="./imagenes/noticias/{{ $articulo->imagen }}" class="img-circle img-size-32 mr-2">
							                    </td>
							                    <td><a href='./administracion/articulo/{{ $articulo->id }}'>{{ $articulo->nombre }}</a></td>
					                    		<td>{{ date("d/m/Y H:i", strtotime($articulo->fecha_publicacion)) }}</td>
					                    	</tr>
					                    @endforeach
				                	</tbody>
				                </table>
				            </div>
				            <div class="card-body ">
				            	<a href="{{ route('articulos.index') }}" class="btn btn-primary">Ver todos</a>
				            </div>
							<!-- <div class="card-header">
								<h5 class="m-0">Artículos</h5>
							</div>
							<div class="card-body">
								<h6 class="card-title">Últimos artículos cargados</h6>
								<p class="card-text">
									Some quick example text to build on the card title and make up the bulk of the card's
									content.
								</p>
								
							</div> -->
						</div>

						<div class="card card-primary card-outline">
							<div class="card-header">
								<h5 class="m-0">Información de interés</h5>
							</div>
							<div class="card-body">
								<h6 class="card-title">Últimas informaciones cargadas</h6>
								<p class="card-text">
									Some quick example text to build on the card title and make up the bulk of the card's
									content.
								</p>
								<a href="#" class="btn btn-primary">Ver todas</a>
							</div>
						</div>

						<div class="card card-primary card-outline">
							<div class="card-header">
								<h5 class="m-0">Secciones</h5>
							</div>
							<div class="card-body">
								<p class="card-text">
									Some quick example text to build on the card title and make up the bulk of the card's
									content.
								</p>
								<a href="#" class="btn btn-primary">Ver detalle</a>
							</div>
						</div>
					</div>
					<!-- /.col-md-6 -->
					<div class="col-lg-6">
						<div class="card card-primary card-outline">
							<div class="card-header">
								<h5 class="m-0">Noticias</h5>
							</div>
							<div class="card-body">
								<h6 class="card-title">Últimas noticias cargadas</h6>
								<p class="card-text">
									Some quick example text to build on the card title and make up the bulk of the card's
									content.
								</p>
								<a href="#" class="btn btn-primary">Ver todas</a>
							</div>
						</div>

						<div class="card card-primary card-outline">
							<div class="card-header">
								<h5 class="m-0">Solicitudes de búsqueda laboral</h5>
							</div>
							<div class="card-body">
								<h6 class="card-title">Últimas solicitudes cargadas</h6>
								<p class="card-text">
									Some quick example text to build on the card title and make up the bulk of the card's
									content.
								</p>
								<a href="#" class="btn btn-primary">Ver todas</a>
							</div>
						</div>

						<div class="card card-primary card-outline">
							<div class="card-header">
								<h5 class="m-0">Datos profesionales asociados</h5>
							</div>
							<div class="card-body">
								<h6 class="card-title">Últimos datos cargadas</h6>
								<p class="card-text">
									Some quick example text to build on the card title and make up the bulk of the card's
									content.
								</p>
								<a href="#" class="btn btn-primary">Ver todos</a>
							</div>
						</div>
					</div>
					<!-- /.col-md-6 -->
				</div>
				<!-- /.row -->
			</div><!-- /.container-fluid -->
		</div>
		<!-- /.content -->
	</div>
@endsection

@section('sidebar')
	<!-- <aside class="control-sidebar control-sidebar-dark">
		<div class="p-3">
			<h5>Tadá dinamico!</h5>
			<p>Esto te muestra cuando haces click en los cuatro cuadritos de arriba a la derecha</p>
		</div>
	</aside> -->
@endsection 
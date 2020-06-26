<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body style="font-family:Arial; padding:30px;">
	Cargando datos de prueba 123
	<form method="POST" action="{{ route('administracion.procesar') }}" enctype="multipart/form-data">
		@csrf

		<p><input type="text" value="aaa" id="primero" name="primero"></p>
		<p><input type="text" value="bbb" id="segundo" name="segundo"></p>
		
		<p><input type="file" name="adjunto" id="adjunto"></p>

		<input type="submit" value="Guardar info" id="cmdGrabar">
	</form>
</body>
</html>
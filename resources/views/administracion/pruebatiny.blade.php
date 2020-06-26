<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://cdn.tiny.cloud/1/uuzw97zip26j58t2zggxbufdxsmsj8tgtieq9tnucw73m4qc/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
	
	<script src="https://unpkg.com/axios/dist/axios.min.js"></script>

	<style type="text/css">
		@font-face {
			font-family: Oxygen;
			src: url(http://localhost:4741/DevStudio/Proyectos/forinder/public/css/fuentes/Oxygen-Regular.ttf);
		}
		@font-face {
			font-family: OxygenBold;
			src: url(http://localhost:4741/DevStudio/Proyectos/forinder/public/css/fuentes/Oxygen-Bold.ttf);
		}
		@font-face {
			font-family: OxygenLight;
			src: url(http://localhost:4741/DevStudio/Proyectos/forinder/public/css/fuentes/Oxygen-Light.ttf);
		}
	</style>
</head>
<body style="font-family:Arial; padding:30px;">
	<form method="POST" action="{{ route('administracion.grabar') }}">
		@csrf

		<h2>{{ $seccion->nombre }}</h2>

		<p><input type="text" value="aaa" id="primero" name="primero"></p>
		<p><input type="text" value="bbb" id="segundo" name="segundo"></p>
		<input type="hidden" id="mceContent" name="mceContent" value="{{ $seccion->cuerpo }}">

		<input type="submit" value="Guardar info" id="cmdGrabar">
	</form>
	<hr>
	<button id="cmdCheck">Hola 2</button>

	<br><br>
	<textarea id="txtMce">
	</textarea>
	<script>
		tinymce.init({
			selector: 'textarea',
			height : 600,
			plugins: 'image autolink lists media mediaembed table anchor link autosave charmap code fullscreen hr searchreplace template toc wordcount',
			toolbar: 'bold italic underline | undo redo | styleselect | alignleft aligncenter alignright alignjustify | link anchor image table numlist bullist | charmap code hr searchreplace template toc wordcount restoredraft | fullscreen',
			autosave_ask_before_unload: false,
			autosave_interval: "20s",
			autosave_retention: "2880m",
			templates: [
			    {title: 'Noticia', description: 'Agregar una noticia', url: 'templates/noticia.html'}
			],
			media_url_resolver: function (data, resolve) {
			    if (data.url.indexOf('YOUR_SPECIAL_VIDEO_URL') !== -1) {
			      var embedHtml = '<iframe src="' + data.url +
			      '" width="400" height="400" ></iframe>';
			      resolve({html: embedHtml});
			    } else {
			      resolve({html: ''});
			    }
			  },
			image_list: [
			    {title: 'My image 1', value: 'http://rian.inta.gob.ar/Imagenes/Logo_INTA.jpg'},
			    {title: 'My image 2', value: 'http://rian.inta.gob.ar/Imagenes/LogoRIAN.jpg'}
			],
			setup: function (editor) {
				editor.on('init', function () {
					editor.setContent($("#mceContent").val());
				});
			},
			style_formats: [
				 { title: 'Título 1', block: 'h2', classes: 'titulo-1' },
			     { title: 'Título 2', block: 'h3', classes: 'titulo-2' },
			     { title: 'Título 3', block: 'h4', classes: 'titulo-3' },
			     { title: 'Título 4', block: 'h5', classes: 'titulo-4' },
			     { title: 'Título 5', block: 'h6', classes: 'titulo-5' },
			    {
			        title: 'Imagen izquierda',
			        selector: 'img',
			        styles: {
			            'float': 'left', 
			            'margin': '0 10px 0 0'
			        }
			     },
			     {
			         title: 'Imagen derecha',
			         selector: 'img', 
			         styles: {
			             'float': 'right', 
			             'margin': '0 0 0 10px'
			         }
			     },

			],
			content_css : "http://localhost:4741/DevStudio/Proyectos/forinder/public/css/tinymce_styles.css",
			language: 'es',
			file_picker_types: 'image',
		    images_upload_handler: function (blobInfo, success, failure) {
		        let data = new FormData();
		        data.append('file', blobInfo.blob(), blobInfo.filename());
		        axios.post('http://localhost:4741/DevStudio/Proyectos/forinder/public/file-upload', data)
		            .then(function (res) {
		                success(res.data.location);
		            })
		            .catch(function (err) {
		                failure('HTTP Error: ' + err.message);
		            });
		    }
		});

		$(function(){
			$(document).on('click', '#cmdCheck', function(event){
				event.preventDefault();

				alert(tinyMCE.activeEditor.getContent())
				$("#mceContent").val(tinyMCE.activeEditor.getContent())
				alert($("#mceContent").val())
			});

			$(document).on('click', '#cmdGrabar', function(event){
				$("#mceContent").val(tinyMCE.activeEditor.getContent())
			});
		})
  </script>
</body>
</html>
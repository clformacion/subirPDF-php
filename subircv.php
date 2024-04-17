<?php
	$formatos   = array( '.pdf','.docx');
	$directorio = 'archivos'; 
	if (isset($_POST['boton'])){  
		$nombreArchivo    = $_FILES['archivo']['name'];
		$nombreTmpArchivo = $_FILES['archivo']['tmp_name'];
		$ext              = substr($nombreArchivo, strrpos($nombreArchivo, '.'));
		if (in_array($ext, $formatos)){
			if (move_uploaded_file($nombreTmpArchivo, "$directorio/$nombreArchivo")){
				
				
			}else{
				echo 'Ocurrió un error subiendo su cv, valida los permisos de la carpeta "archivos"';
			}
		}else{
			echo 'su cv fue enviado';
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		subir tareas
	</title>
	<meta charset="utf-8">
	<meta description="Subir archivos en PHP por José Parra">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="js.js"></script>


</head>
<body>
	
    
				<?php
					if ($dir = opendir($directorio)){
						
					
							
						}if ($archivo = readdir($dir)) {
							
					
						}
					
				?>








      
			
		<p>FAVOR SUBIR SU CV</p>
		<form method="post" action="" enctype="multipart/form-data">
			<div class="form-group">
				<label for="archvio">Archivo</label>
				<input type="file" class="form-control-file" id="archvio" aria-describedby="fileHelp" name="archivo">
				<small id="fileHelp" class="form-text text-muted">Archivos permitidos (.pdf .doc)</small>
			</div>
			<button  onclick="click()"  type="submit" class="btn btn-primary" name="boton" onclick="click()">Subir archivo</button>
		</form>
	</div>
	</div--->
	
	
        
<p>----- </p>
	
	
	
	
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</body>
</html>
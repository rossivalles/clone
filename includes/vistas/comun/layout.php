<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="icon" type="image/png" href="img/favicon.png">
	<link rel="stylesheet" type="text/css" href="<?= RUTA_CSS.'/estilo.css'?>" />
	<link rel="stylesheet" href="https://fonts.cdnfonts.com/css/baloo">
	
	<title><?= $tituloPagina ?></title>
</head>

<body>
	<div id="contenedor">
		<?php
			require('cabecera.php');
		?>

		<main>
			<article>
				<?= $contenidoPrincipal ?>
			</article>
		</main>
		
		<?php
			require('pie.php');
		?>
	</div>
</body>
</html>
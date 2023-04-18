<?php
	require_once __DIR__.'/../helpers/usuarios.php';
	require_once __DIR__.'/../helpers/barrabusqueda.php';
	$logo=RUTA_IMGS."/logo-changeit.svg";
?>      

<header>

	
	<div class="main-header">
		<a href="index.php"><img src="<?php echo $logo ?>" alt="logo de la empresa change-it "></a>
		<h1>CHANGE-IT</h1>
	</div>
	
	<div class="menu-header">
		<ul>
			<li><a href="<?= RUTA_APP?>/index.php">Home</a></li>
			<li><a href="<?= RUTA_APP?>/post.php">Swap</a></li>
			<li><a href="<?= RUTA_APP?>/additem.php">add items</a></li>
			<li><a href="<?= RUTA_APP?>/addpost.php">add post</a></li>
			<li><a href="<?= RUTA_APP?>/admin.php">Admin</a></li>
			<li><a href="<?= RUTA_APP?>/miembros.php">About Us</a></li>
			<li><?= buildFormularioBusqueda()?></li>
			
		</ul>
	</div>
	
	<div class="saludo">

		<?= 
		saludo()
		?>
	</div>
	
</header>

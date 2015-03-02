<!DOCTYPE html>
<html lang="es-CO">
<head>
	<meta charset="<?php bloginfo ("charset"); ?>">
	<title><?php bloginfo("name"); ?></title>
	<link rel="stylesheet" href="<?php bloginfo ("template_url"); ?>/style.css">
	<Link rel="icono de acceso directo" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico"/>
</head>
<body class="container">
	<header>
	<nav>
		<?php wp_nav_menu(array(
		'theme-location' => 'menu-top',
	)); ?>
	</nav>
		<a href="<?php echo home_url('/'); ?>"><h1><?php bloginfo("name"); ?></h1></a>
		<p><?php bloginfo("descripcion"); ?></p>
	</header>
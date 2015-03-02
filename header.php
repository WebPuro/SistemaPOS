<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="<?php bloginfo ("charset"); ?>">
	<title><?php bloginfo("name"); ?></title>
	<link rel="stylesheet" href="<?php bloginfo ("template_url"); ?>/style.css">
</head>
<body class="container">
	<header>
		<a href="<?php echo home_url('/'); ?>"><h1><?php bloginfo("name"); ?></h1></a>
		<p><?php bloginfo("descripcion"); ?></p>
	<nav>
		<?php wp_nav_menu(array(
		'theme-location' => 'menu-top',
	)); ?>
	</nav>
	</header>
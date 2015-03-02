<?php

	//Soporte para menu
	register_nav_menus(array(
		'menu-top'=>'Menu header',
		));
	//Soporte imagen destacadas
	add_theme_support('post-thumbnails');
	add_image_size( 'thb-index', 250, 250, true);
?>
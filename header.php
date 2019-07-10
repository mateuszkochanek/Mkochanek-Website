<!DOCTYPE html>
<html>
	<head>
		<?php wp_head();?>
		<link href="https://fonts.googleapis.com/css?family=Inconsolata&display=swap" rel="stylesheet"> 
	</head>
	
	<body <?php body_class();?> >
	
	<header id="main-header" >
			<nav class="nav">
				<h1><a href="http://127.0.0.1/Strona/">Mkochanek</a></h1>
				<?php wp_nav_menu(
					array(
						'theme_location' => 'top-menu',
						'menu_class' => 'navigation'
					)
				);?>
			</nav>
	</header>
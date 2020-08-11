<?php
/**
 * Header file for the RTG Golf WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage RTG_Golf
 * @since RTG Golf 1.0
 */

?>

<!doctype html>

<html <?php language_attributes(); ?> class="no-js">

<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">

	<meta name="viewport" content="width=device-width, initial-scale=1.0" >

	<link rel="profile" href="https://gmpg.org/xfn/11">

	<!-- <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Rufina:wght@400;700&display=swap" rel="stylesheet"> -->

	<!--

		font-family: 'Montserrat', sans-serif;
		font-family: 'Rufina', serif;

	-->

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

	<header role="banner" id="" class="header">

		<div class="wrap header__wrap">

			<div class="logo">

				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo__link">
				
					<?php bloginfo( 'name' ); ?>
				
				</a>

			</div>

			<nav role="navigation" class="nav">

				<div class="nav__toggle">

					<span class="nav__label">Menu</span>

				</div>

				<?php

					wp_nav_menu(
			
						array(
			
							'menu'					=> 'Primary Navigation',
							'menu_class'			=> '',
							'menu_id'				=> '',
							'container'				=> '',
							// 'container_class'	=> '',
							// 'container_id'		=> '',
							// 'fallback_cb'		=> '',
							// 'before'				=> '',
							// 'after'				=> '',
							// 'link_before'		=> '',
							// 'link_after'			=> '',
							// 'echo'				=> true,
							'depth'					=> 1,
							// 'walker'				=> '',
							'theme_location'		=> 'primary',
							'items_wrap'			=> '<ol class="nav__list %2$s">%3$s</ol>',
							// 'item_spacing'		=> 'preserve'
							
						)
						
					);

				?>

			</nav>

			<div id="" class="utilities">

				<ul class="utilities__list">

					<li class="utilities__item">

						<a href="#" class="utilities__link">Member Login</a>

					</li>

					<li class="utilities__item">

						<a href="#" class="utilities__link">Contact Us</a>

					</li>

					<!-- <li class="utilities__item">

						<a href="#" class="utilities__link">Shopping Bag</a>

					</li> -->

				</ul>

			</div>

		</div>

	</header>

	<main role="main" id="" class="main">

		<div class="wrap main___wrap">

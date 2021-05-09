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

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="profile" href="https://gmpg.org/xfn/11">

    <link type="text/css" href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,700;1,400;1,700&family=Merriweather:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet" media="screen, projection" />
	
	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

	<div class="pre-header">

		<div class="wrap pre-header__wrap">

			<div id="" class="utilities">

				<ul class="utilities__list">

					<?php /*

					<li class="utilities__item">

						<a href="#" class="utilities__link">Member Login</a>

					</li>

					*/ ?>

					<li class="utilities__item utilities__item--social utilities__item--social-facebook">

						<a href="<?php the_field( 'social_media_facebook', 'option' ); ?>" rel="external" class="utilities__link utilities__item--social-link utilities__social-link-facebook">Facebook</a>

					</li>

					<li class="utilities__item utilities__item--social utilities__item--social-twitter">

						<a href="<?php the_field( 'social_media_twitter', 'option' ); ?>" rel="external" class="utilities__link utilities__item--social-link utilities__social-link-twitter">Twitter</a>

					</li>

					<li class="utilities__item utilities__item--social utilities__item--social-instagram">

						<a href="<?php the_field( 'social_media_instagram', 'option' ); ?>" rel="external" class="utilities__link utilities__item--social-link utilities__social-link-instagram">Instagram</a>

					</li>

					<li class="utilities__item">

						<a href="/contact-us/" class="utilities__link">Contact Us</a>

					</li>

					<?php /*

					<li class="utilities__item utilities__shopping-bag">

						<a href="#" class="utilities__link">
							
							Shopping Cart
						
							<span class="utilities__quantity">3</span>

						</a>

					</li>

					*/ ?>

				</ul>

			</div>

		</div>

	</div>

	<header role="banner" id="" class="header">

		<div class="wrap header__wrap">

			<div class="logo">

				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo__link">
				
					<img src="<?php bloginfo( 'template_directory' ); ?>/assets/img/logo.png" srcset="<?php bloginfo( 'template_directory' ); ?>/assets/img/logo_2x.png 2x" alt="" class="logo__img" />
				
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

		</div>

	</header>

	<?php /* Section */ ?>

	<div class="section">

		<div class="wrap section__wrap">

			<?php if ( is_page( 'home' ) ) : ?>

				<?php get_template_part( 'inc/hero' ); ?>

			<?php else : ?>

				<?php get_template_part( 'inc/banner' ); ?>

			<?php endif; ?>

		</div>

	</div>

	<main role="main" id="" class="main">

		<div class="wrap main__wrap">

			<div class="main__primary">

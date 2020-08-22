<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage RTG_Golf
 * @since RTG Golf 1.0
 */

?>

				<?php /* Testimonial */ ?>

				<?php get_template_part( 'inc/testimonial' ); ?>

			</div>

			<?php if ( ! is_front_page() && is_home() OR is_single() && ! is_singular( 'trip' ) && ! is_singular( 'destination' ) ) : ?>

				<div class="main__secondary">

					<div class="widgets">

						<div class="widget__item widget__recent-posts">

							<h3 class="widget__header">Title</h3>

							<div class="widget__content">

								<article class="summary">

									<h1 class="summary__title">

										<a href="#" class="summary__link">Title</a>

									</h1>

									<footer class="summary__footer">

										<time datetime="" class="summary__time">August 11, 2020</time>

									</footer>

								</article>

							</div>

						</div>

					</div>

				</div>

			<?php endif; ?>

		</div>

	</main>

	<div class="pre-footer">

		<div class="wrap pre-footer__wrap">

			<?php /* Newsletter */ ?>

			<?php /* Form */ ?>

			<?php /*

			<div class="newsletter">

				<div class="newsletter__inner-wrap">

					<iframe class="newsletter__iframe airtable-embed" src="https://airtable.com/embed/shrCKH5OjqWsRTRUi?backgroundColor=purple"; frameborder="0" onmousewheel="" width="100%" height="533"></iframe>

				</div>

			</div>

			*/ ?>

			<?php /* CTA */ ?>

			<div class="newsletter">

				<div class="newsletter__inner-wrap">

					<div class="newsletter__cta">

						<h3 class="newsletter__title"><?php the_field( 'newsletter_headline', 'option' ); ?></h3>

						<div class="newsletter__detail">

							<p><?php the_field( 'newsletter_detail', 'option' ); ?></p>

						</div>

					</div>

					<div class="newsletter__more">

						<a href="<?php the_field( 'newsletter_url', 'option' ); ?>" rel="external" class="newsletter__link">Sign Up</a>

					</div>

				</div>

			</div>

		</div>

	</div>

	<footer role="contentinfo" id="" class="footer">

		<div class="wrap footer__wrap">

			<div class="widgets">

				<?php /* Navigation Widget */ ?>

				<div class="widget__item">

					<h3 class="widget__header">Explore</h3>

					<div class="widget__content">

						<nav role="navigation" class="secondary-nav">

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
										'items_wrap'			=> '<ol class="secondary-nav__list %2$s">%3$s</ol>',
										// 'item_spacing'		=> 'preserve'
										
									)
									
								);

							?>

						</nav>

					</div>

				</div>

				<?php /* Recent Posts Widget */ ?>

				<div class="widget__item">

					<h3 class="widget__header">Recent Post</h3>

					<div class="widget__content">

						<?php

							$post_listing_options = array(

								'post_type'		=> 'post',
								'post_status'	=> 'publish',
								'numberposts'	=> 1,
								'orderby'		=> 'menu_order',
								'order'			=> 'ASC'

							);

							$posts = get_posts( $post_listing_options );

						?>

						<?php foreach ( $posts as $post ) : ?>

							<article class="summary">

								<h1 class="summary__title">

									<a href="<?php the_permalink(); ?>" class="summary__link"><?php the_title(); ?></a>

								</h1>

								<footer class="summary__footer">

									<time datetime="" class="summary__time">August 11, 2020</time>

								</footer>

								<div class="summary__excerpt">

									<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat hic provident quae ducimus dolorem asperiores repudiandae, excepturi illo culpa distinctio laboriosam molestiae? Vero eaque, repellendus minus eos fugit magni voluptatem!</p>

								</div>

								<div class="summary__more">

									<a href="<?php the_permalink(); ?>" class="summary__more-link">Read More</a>

								</div>

							</article>

						<?php endforeach; ?>

					</div>

				</div>

				<?php /* Contact Us Widget */ ?>

				<div class="widget__item">

					<h3 class="widget__header">Contact Us</h3>

					<div class="widget__content">

						<div class="h-card contact__h-card">

							<div class="p-name">Tom Kozlak</div>

							<div class="p-adr">

								<span class="p-locality">St. Paul,</span>
									
								<span class="p-region">MN</span>

							</div>

							<div class="p-tel">(612) 816-3337</div>

							<div class="u-email">

								<a href="mailto:tomk@rtggolf.com" class="u-email__link">tomk@rtggolf.com</a>

							</div>

						</div>

						<div class="h-card contact__h-card">

							<div class="p-name">Scott Cole</div>

							<div class="p-adr">

								<span class="p-locality">New Richmond,</span>

								<span class="p-region">WI</span>

							</div>

							<div class="p-tel">(715) 529-4979</div>

							<div class="u-email">

								<a href="mailto:scottc@rtggolf.com" class="u-email__link">scottc@rtggolf.com</a>

							</div>

						</div>

						<div class="social">

							<ul class="social__list">

								<li class="social__item social__facebook">

									<a href="https://www.facebook/rtggolf" rel="external" class="social__link">Facebook</a>

								</li>

								<li class="social__item social__twitter">

									<a href="https://www.twitter/rtggolf" rel="external" class="social__link">Twitter</a>

								</li>

								<li class="social__item social__instagram">

									<a href="https://www.instagram/rtggolf" rel="external" class="social__link">Instagram</a>

								</li>

							</ul>

						</div>

					</div>

				</div>

			</div>

			<div class="affiliations">

				<?php if ( have_rows( 'affiliations_list', 'option' ) ) : ?>

					<ul class="affiliations__list">

						<?php while ( have_rows( 'affiliations_list', 'option' ) ) : the_row(); ?>

							<?php

								$affiliations_name = get_sub_field( 'affiliations_name', 'option' );

								$affiliations_url = get_sub_field( 'affiliations_url', 'option' );

								// TODO: Create a 400 x 160 and 200 x 80 if possible

								$affiliations_image = get_sub_field( 'affiliations_image', 'option' );

							?>

							<li class="affiliations__item">

								<a href="<?php echo $affiliations_url; ?>" rel="external" class="affiliations__link">
								
									<picture class="affiliations__picture">

										<source srcset="<?php echo $affiliations_image; ?> 2x">

										<img src="<?php echo $affiliations_image; ?>" alt="<?php echo $affiliations_name; ?>" class="banner__img">

									</picture>

								</a>
							
							</li>

						<?php endwhile; ?>

					</ul>

				<?php endif; ?>

			</div>

			<p class="copyright">Copyright <?php echo date_i18n( _x( 'Y', 'copyright date format', 'rtggolf' ) ); ?> <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="copyright__link"><?php bloginfo( 'name' ); ?></a>. All rights reserved.</p>

		</div>

	</footer>

	<?php wp_footer(); ?>

</body>

</html>

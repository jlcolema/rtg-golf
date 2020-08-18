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

			</div>

			<?php if ( ! is_front_page() && is_home() ) : ?>

				<div class="main__secondary">Secondary</div>

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

					<h3 class="newsletter__title">Join Our E-mail List</h3>

					<div class="newsletter__detail">

						<p><a href="https://airtable.com/shrCKH5OjqWsRTRUi">Sign up for our newsletter</a> to keep up to date with new destinations and trip ideas.</p>

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

						<article class="summary">

							<h1 class="summary__title">

								<a href="#" class="summary__link">Title</a>

							</h1>

							<footer class="summary__footer">

								<time datetime="" class="summary__time">August 11, 2020</time>

							</footer>

							<div class="summary__excerpt">

								<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat hic provident quae ducimus dolorem asperiores repudiandae, excepturi illo culpa distinctio laboriosam molestiae? Vero eaque, repellendus minus eos fugit magni voluptatem!</p>

							</div>

							<div class="summary__more">

								<a href="/blog/" class="summary__more-link">Read More</a>

							</div>

						</article>

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

								<li class="social__item">

									<a href="https://www.facebook/rtggolf" rel="external" class="social__link">Facebook</a>

								</li>

								<li class="social__item">

									<a href="https://www.twitter/rtggolf" rel="external" class="social__link">Twitter</a>

								</li>

								<li class="social__item">

									<a href="https://www.instagram/rtggolf" rel="external" class="social__link">Instagram</a>

								</li>

							</ul>

						</div>

					</div>

				</div>

			</div>

			<div class="affiliations">

				<ul class="affiliations__list">

					<li class="affiliations__item">
						
						<a href="#" class="affiliations__link">RTG Golf</a>
					
					</li>

					<li class="affiliations__item">
						
						<a href="#" rel="external" class="affiliations__link">St. Andrews Links</a>
					
					</li>
					
					<li class="affiliations__item">
						
						<a href="#" rel="external" class="affiliations__link">IAGTO</a>
					
					</li>

				</ul>

			</div>

			<p class="copyright">Copyright <?php echo date_i18n( _x( 'Y', 'copyright date format', 'rtggolf' ) ); ?> <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="copyright__link"><?php bloginfo( 'name' ); ?></a>. All rights reserved.</p>

		</div>

	</footer>

	<?php wp_footer(); ?>

</body>

</html>

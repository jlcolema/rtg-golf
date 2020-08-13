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

	</main>

	<footer role="contentinfo" id="" class="footer">

		<div class="wrap footer__wrap">

			<div class="widgets">

				<?php /* Explore */ ?>

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

				<?php /* Recent Posts */ ?>

				<div class="widget__item">

					<h3 class="widget__header">Recent Post</h3>

					<div class="widget__content">

						<article class="">

							<h1 class="">

								<a href="#" class="">Title</a>

							</h1>

							<div class="">

								<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat hic provident quae ducimus dolorem asperiores repudiandae, excepturi illo culpa distinctio laboriosam molestiae? Vero eaque, repellendus minus eos fugit magni voluptatem!</p>

							</div>

							<footer class="">

								<time datetime="" class="">August 11, 2020</time>

							</footer>

						</article>

						<div class="">

							<a href="#" class="">See More</a>

						</div>

					</div>

				</div>

				<?php /* Contact Us */ ?>

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

								<a href="mailto:tomk@rtggolf.com">tomk@rtggolf.com</a>

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

								<a href="mailto:scottc@rtggolf.com">scottc@rtggolf.com</a>

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

			<div class="callout">

				<a href="https://airtable.com/shrCKH5OjqWsRTRUi" rel="external" class="callout__link">Sign up for monthly newsletter</a> and stay up to date with news and updates.

			</div>

			<p class="copyright">Copyright <?php echo date_i18n( _x( 'Y', 'copyright date format', 'rtggolf' ) ); ?> <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class=""><?php bloginfo( 'name' ); ?></a>. All rights reserved.</p>

		</div>

	</footer>

	<?php wp_footer(); ?>

</body>

</html>

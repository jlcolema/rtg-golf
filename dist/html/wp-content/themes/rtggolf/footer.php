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

			<div class="contact">

				<h3 class="contact__header">Contact</h3>

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

			</div>

			<!-- Social -->

			Facebook: https://facebook.com/rtggolf

			Twitter: https://twitter.com/rtggolf

			Instagram: https://instagram.com/rtggolf [???]

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

			<div class="">

				<a href="" class="">Sign up for monthly newsletter</a> and stay up to date with news and updates.

			</div>

			<p class="copyright">Copyright <?php echo date_i18n( _x( 'Y', 'copyright date format', 'rtggolf' ) ); ?> <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class=""><?php bloginfo( 'name' ); ?></a>. All rights reserved.</p>

		</div>

	</footer>

	<?php wp_footer(); ?>

</body>

</html>

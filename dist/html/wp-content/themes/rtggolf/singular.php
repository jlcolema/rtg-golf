<?php
/**
 * The template for displaying single posts and pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage RTG_Golf
 * @since RTG Golf 1.0
 */

get_header();
?>

	<?php /* Post */ ?>

	<article class="post">

		<div class="post__inner-wrap">

			<h1 class="post__title"><?php the_title(); ?></h1>

			<footer class="post__footer">

				<time datetime="" class="post__time"><?php echo get_the_date( 'F j, Y' ); ?></time>

				<div class="post__category">

					<?php

						$post_categories = get_field( 'post_category' );
					
					?>

					<?php if ( $post_categories ) : ?>

						<ul class="post__category-list">

							<?php foreach ( $post_categories as $post_category ) : ?>

								<li class="post__category-item">

									<a href="<?php echo esc_url( get_term_link( $post_category ) ); ?>" class="post__category-link"><?php echo esc_html( $post_category->name ); ?></a>

								</li>

							<?php endforeach; ?>

						</ul>

					<?php endif; ?>

				</div>

			</footer>

			<div class="post__content">

				<?php the_field( 'post_content' ); ?>

			</div>

		</div>

	</article>

<?php get_footer(); ?>

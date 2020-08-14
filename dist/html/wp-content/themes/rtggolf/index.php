<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage RTG_Golf
 * @since RTG Golf 1.0
 */

get_header();

?>

	<?php /* Banner */ ?>

	<div class="banner">

		<div class="banner__inner-wrap">

			<h1 class="">Blog</h1>

		</div>

	</div>

	<?php /* List of Posts */ ?>

	<div class="">

		<div class="">

			<div class="posts__list">

				<article class="posts__item h-entry">

					<div class="">

						<img src="https://via.placeholder.com/400x300" alt="A very nice description." class="" />

					</div>

					<h1 class="">
						
						<a href="#" class="">Title</a>
					
					</h1>

					<div class="">

						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid corporis quasi sequi quos sit repellendus odio, est hic voluptatibus odit, accusantium animi quidem officia quae cupiditate nisi, pariatur repudiandae laborum.</p>

					</div>

					<div class="">

						<a href="#" class="">Read More</a>

					</div>

					<footer class="">

						<time datetime="" class="">August 20, 2020</time>

					</footer>

				</article>

			</div>

			<div class="">

				<?php /* Post Navigation */ ?>

			</div>

		</div>

	</div>

	<?php /* Sidebar */ ?>

	<div class="">

		<?php /* List of Recent Posts */ ?>

		<div class="">

			<h3 class="">Recent Posts</h3>

			Date

		</div>

		<?php /* List of Categories */ ?>

		<div class="">

			<h3 class="">Categories</h3>

		</div>

	</div>

<?php get_footer();

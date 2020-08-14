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

	<?php /* Banner */ ?>

	<div class="banner">

		<div class="banner__inner-wrap">

			<h1 class="">Blog (Individual Entry)</h1>

		</div>

	</div>

	<?php /* Post */ ?>

	<article class="">

		<h1 class="">Title</h1>

		<footer class="">

			<time datetime="" class="">August 20, 2020</time>

			<div class="">

				Category

			</div>

		</footer>

		<div class="">

			<p>RTG golf traveled with a small group of golfers in August of 2019. Most of the travelers are veterans of several trips to Ireland & Scotland having played most of the courses that grab the headlines.</p>

			<p>This trip was designed to play a couple of the big names as well as get off the beaten path. Total success on both initiatives. The group loved Ailsa at Turnberry, Dundonald Links and Western Gailes–but the trip became memorable once we ventured further west from the Ayrshire coast.</p>

			<p>We took the long and winding road (yes, the one of Beatles lore) to the tiny village of Machrihanish located in the shadow of Campbeltown.</p>

		</div>

	</article>

	<?php /* Sidebar */ ?>

	<div class="">

		<?php /* Recent Posts Widget */ ?>

		<div class="">

			<h3 class="">Recent Posts</h3>

			Date

		</div>

		<?php /* Categories Widget */ ?>

		<div class="">

			<h3 class="">Categories</h3>

		</div>

	</div>

<?php get_footer(); ?>

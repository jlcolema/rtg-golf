<?php get_header(); ?>

	<?php /* Form */ ?>

	<?php $contact_us_overview = get_field( 'contact_us_overview' ); ?>

	<?php if ( $contact_us_overview ) : ?>

		<div class="contact_us_overview">

			<div class="contact_us_overview__inner-wrap">

				<h2 class="contact_us_overview__header"><?php echo $contact_us_overview[ 'contact_us_overview_header' ]; ?></h2>

				<h3 class="contact_us_overview__subheader"><?php echo $contact_us_overview[ 'contact_us_overview_subheader' ]; ?></h3>

				<div class="contact_us_overview__content">

					<?php echo $contact_us_overview[ 'contact_us_overview_content' ]; ?>

				</div>

				<?php echo do_shortcode( '[contact-form-7 id="27" title="Contact"]' ); ?>

			</div>

		</div>

	<?php endif; ?>

<?php get_footer(); ?>
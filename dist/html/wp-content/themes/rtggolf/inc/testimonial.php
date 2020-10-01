<div class="testimonial">

	<div class="inner-wrap testimonial__inner-wrap">

		<h3 class="testimonial__header">What Our Clients Say</h3>

	<?php

		$testimonial_listing_options = array(

			'post_type'		=> 'testimonial',
			'post_status'	=> 'publish',
			'numberposts'	=> 1,
			'orderby'		=> 'rand',
			'order'			=> 'ASC'

		);

		$testimonials = get_posts( $testimonial_listing_options );

	?>

	<?php foreach ( $testimonials as $testimonial ) : ?>

		<?php

			/* Thumbnail
			------------------------------*/

			// Attachment

			$testimonial_thumbnail_attachment_id = get_field( 'testimonial_thumbnail', $testimonial->ID );

			// Size

			$testimonial_thumbnail_size_full = 'full';

			// Options

			$testimonial_thumbnail_full = wp_get_attachment_image_src( $testimonial_thumbnail_attachment_id, $testimonial_thumbnail_size_full );

			$testimonial_title = get_field( 'testimonial_title', $testimonial->ID );

			$testimonial_quote = get_field( 'testimonial_quote', $testimonial->ID );

		?>

			<blockquote class="testimonial__blockquote">

				<div class="testimonial__quote">

					<?php echo $testimonial_quote; ?>

				</div>

				<div class="testimonial__source">

					<span class="testimonial__dash">&mdash;</span>

					<strong class="testimonial__name"><?php echo $testimonial->post_title; ?></strong>
					
					<i class="testimonial__title">
					
						<?php echo $testimonial_title; ?>
					
					</i>

				</div>	

			</blockquote>

		<?php endforeach; ?>

	</div>

</div>
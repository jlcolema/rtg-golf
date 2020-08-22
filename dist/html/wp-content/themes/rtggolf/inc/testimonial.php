<div class="testimonial">

	<div class="inner-wrap testimonial__inner-wrap">

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

		?>

			<blockquote class="testimonial__blockquote">

				<div class="testimonial__quote">

					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti et iste eius! Excepturi, recusandae laboriosam! Ipsum facere molestias eum iure esse pariatur nulla, similique sit porro necessitatibus fugit eligendi quos.</p>

				</div>

				<div class="testimonial__source">

					<span class="testimonial__dash">&mdash;</span>

					<strong class="testimonial__name"><?php echo $testimonial->post_title; ?></strong>
					
					<i class="testimonial__title">CEO</i>

				</div>	

			</blockquote>

		<?php endforeach; ?>

	</div>

</div>
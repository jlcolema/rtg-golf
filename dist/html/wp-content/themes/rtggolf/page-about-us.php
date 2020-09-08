<?php get_header(); ?>

	<?php /* Story */ ?>

	<?php if ( have_rows( 'story' ) ) : ?>

		<?php while ( have_rows( 'story' ) ) : ?>

			<?php the_row(); ?>

			<?php if ( get_row_layout() == 'story_image_and_content' ) : ?>

				<?php

					// Image

					$story_image = get_sub_field( 'story_image' );

					// Header

					$story_header = get_sub_field( 'story_header' );

					// Subheader

					$story_subheader = get_sub_field( 'story_subheader' );

					// Content

					$story_content = get_sub_field( 'story_content' );

				?>

				<div class="">

					<div class="">

						<div class="">

							<picture class="">

								<source srcset="<?php echo $story_image; ?>" media="(min-width: 1000px)">

								<source srcset="<?php echo $story_image; ?>" media="(min-width: 700px)">

								<img src="<?php echo $story_image; ?>" alt="A very nice description." class="">

							</picture>

						</div>

						<div class="">

							<h2 class=""><?php echo $story_header; ?></h2>

							<h3 class=""><?php echo $story_subheader; ?></h3>

							<div class="">

								<?php echo $story_content; ?>

							</div>

						</div>

					</div>

				</div>

			<?php endif; ?>

		<?php endwhile; ?>

	<?php endif; ?>

	<?php /* Partners */ ?>

	<div class="partners">

		<div class="inner-wrap partners__inner-wrap">

			<div class="partners__one">

				<ul class="partners__list">

					<?php

						$partner_listing_options = array(

							'post_type'		=> 'partner',
							'post_status'	=> 'publish',
							'numberposts'	=> -1,
							'orderby'		=> 'menu_order',
							'order'			=> 'ASC'

						);

						$partners = get_posts( $partner_listing_options );

					?>

					<?php foreach ( $partners as $partner ) : ?>

						<?php

							/* Thumbnail
							------------------------------*/

							// Attachment

							$partner_photo_attachment_id = get_field( 'partner_photo', $partner->ID );

							// Size (use Small, Medium, Large, and Full)

							$partner_photo_size_full = 'full';

							// Options

							$partner_photo_full = wp_get_attachment_image_src( $partner_photo_attachment_id, $partner_photo_size_full );

							// Fields

							$partner_title = get_field( 'partner_title', $partner->ID );

							$partner_bio = get_field( 'partner_bio', $partner->ID );

						?>

						<li class="partners__item">

							<picture class="partners__picture">

								<source srcset="<?php echo $partner_photo_full[0]; ?>" media="(min-width: 1000px)">

								<source srcset="<?php echo $partner_photo_full[0]; ?>" media="(min-width: 700px)">

								<img src="<?php echo $partner_photo_full[0]; ?>" alt="A very nice description." class="partners__img">

							</picture>

							<h2 class="partners__name"><?php echo $partner->post_title; ?></h2>

							<h3 class="partners__title"><?php echo $partner_title; ?></h3>

							<div class="partners__bio">

								<?php echo $partner_bio; ?>

							</div>

						</li>

					<?php endforeach; ?>

				</ul>

			</div>

		</div>

	</div>

<?php get_footer(); ?>
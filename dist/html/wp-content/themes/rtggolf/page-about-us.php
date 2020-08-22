<?php get_header(); ?>

	<?php /* Title */ ?>

	<div class="matrix">

		<div class="matrix__inner-wrap">

			<div class="">

				<picture class="title__picture">

					<source srcset="https://via.placeholder.com/600x600" media="(min-width: 1000px)">

					<source srcset="https://via.placeholder.com/600x600" media="(min-width: 700px)">

					<img src="https://via.placeholder.com/600x600" alt="A very nice description." class="title__img">

				</picture>

			</div>

			<div class="">

				<h2 class="">Another Trip of a Lifetime</h2>

				<h3 class="">Professional Design and Management of Golf Travel</h3>

				<div class="">

					<p>At RTG Golf our business is the professional design and management of golf travel. We are expert at tying together all the details involved in the planning and execution of great golf trips. From site selection, accommodations and expense management to creating and scoring the appropriate competition.</p>

					<p>RTG Golf is a Twin Cities based business established in 1999. Since that time we have sent thousands of golf travelers to destinations around the globe. We have tremendous experience in both domestic and international destinations – with a particular expertise in the British Isles.</p>

					<p>We are golfers that go on golf trips and understand the nuances that transform golf trips from Good to Great!</p>

				</div>

			</div>

		</div>

	</div>

	<?php /* Title */ ?>

	<div class="">

		<div class="">

			<div class="">

				<img src="https://via.placeholder.com/400x400" alt="A very nice description." class="" />

			</div>

			<h2 class="">The Experience</h2>

			<h3 class="">Taking Golf Trips from Good to Great</h3>

			<div class="">

				<p>Anyone can book a golf trip. At RTG Golf we take your golf trip from good to great by eliminating the trial and error of finding the right courses, accommodations, transportation, restaurants, pubs, sights, etc.</p>

				<p>We have not only been to the destinations we sell, we have sent thousands of travelers to the same. Our first hand experience and feedback from our clients keeps us in the know and up to date on great golf travel.</p>

				<div class="">

					<img src="https://via.placeholder.com/300x100" alt="Signature" class="" />

				</div>

			</div>

		</div>

	</div>
					
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
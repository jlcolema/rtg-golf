<div class="main__secondary">

	<div class="secondary-widgets">

		<?php /* Widget for the Contact Us page */ ?>

		<?php if ( is_page( 'contact-us' ) ) : ?>

			<div class="secondary-widget secondary-widget__contacts">

				<h3 class="secondary-widget__header">Contact Us</h3>

				<div class="secondary-widget__content">

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

							/* Options
							------------------------------*/

							$partner_title = get_field( 'partner_title', $partner->ID );

							$partner_location = get_field( 'partner_location', $partner->ID );

							$partner_city = get_field( 'partner_city', $partner->ID );

							$partner_state = get_field( 'partner_state', $partner->ID );

							$partner_phone_number = get_field( 'partner_phone_number', $partner->ID );

							$partner_email_address = get_field( 'partner_email_address', $partner->ID );

						?>

						<div class="secondary-h-card contact__h-card">

							<div class="secondary-p-name"><?php echo $partner->post_title; ?></div>

							<div class="secondary-p-adr">

								<span class="secondary-p-locality"><?php echo $partner_location[ 'partner_city' ]; ?>,</span>
									
								<span class="secondary-p-region"><?php echo $partner_location[ 'partner_state' ]; ?></span>

							</div>

							<div class="secondary-p-tel"><?php echo $partner_phone_number; ?></div>

							<div class="secondary-u-email">

								<a href="mailto:<?php echo $partner_email_address; ?>" class="secondary-u-email__link"><?php echo $partner_email_address; ?></a>

							</div>

						</div>

					<?php endforeach; ?>

				</div>

			</div>

			<div class="secondary-widget secondary-widget__social">

				<h3 class="secondary-widget__header">Social</h3>

				<div class="secondary-widget__content">

					<ul class="secondary-social__list">

						<li class="secondary-social__item secondary-social__facebook">

							<a href="<?php the_field( 'secondary-social_media_facebook', 'option' ); ?>" rel="external" class="secondary-social__link">Facebook</a>

						</li>

						<li class="secondary-social__item secondary-social__twitter">

							<a href="<?php the_field( 'secondary-social_media_twitter', 'option' ); ?>" rel="external" class="secondary-social__link">Twitter</a>

						</li>

						<li class="secondary-social__item secondary-social__instagram">

							<a href="<?php the_field( 'secondary-social_media_instagram', 'option' ); ?>" rel="external" class="secondary-social__link">Instagram</a>

						</li>

					</ul>

				</div>

			</div>

		<?php /* Widgets for the Blog and Individual Post pages */ ?>

		<?php else : ?>

			<div class="secondary-widget secondary-widget__item secondary-widget__categories">

				<h3 class="secondary-widget__header">Categories</h3>

				<div class="secondary-widget__content">

					<ul class="categories__list">

						<?php $categories = get_categories(); ?>

						<?php foreach( $categories as $category ) : ?>

							<li class="categories__item">

								<a href="<?php echo get_category_link( $category->term_id ); ?>" class="categories__link"><?php echo $category->name; ?></a>

							</li>

						<?php endforeach; ?>

					</ul>

				</div>

			</div>

			<div class="secondary-widget secondary-widget__social">

				<h3 class="secondary-widget__header">Social</h3>

				<div class="secondary-widget__content">

					<ul class="secondary-social__list">

						<li class="secondary-social__item secondary-social__facebook">

							<a href="<?php the_field( 'secondary-social_media_facebook', 'option' ); ?>" rel="external" class="secondary-social__link">Facebook</a>

						</li>

						<li class="secondary-social__item secondary-social__twitter">

							<a href="<?php the_field( 'secondary-social_media_twitter', 'option' ); ?>" rel="external" class="secondary-social__link">Twitter</a>

						</li>

						<li class="secondary-social__item secondary-social__instagram">

							<a href="<?php the_field( 'secondary-social_media_instagram', 'option' ); ?>" rel="external" class="secondary-social__link">Instagram</a>

						</li>

					</ul>

				</div>

			</div>

		<?php endif; ?>

	</div>

</div>
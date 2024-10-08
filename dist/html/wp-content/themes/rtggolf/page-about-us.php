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

				<div class="story">

					<div class="story__inner-wrap">

						<div class="story__image">

							<picture class="story__picture">

								<source srcset="<?php echo $story_image; ?>" media="(min-width: 1000px)">

								<source srcset="<?php echo $story_image; ?>" media="(min-width: 700px)">

								<img src="<?php echo $story_image; ?>" alt="A very nice description." class="story__img">

							</picture>

						</div>

						<div class="story__contents">

							<h2 class="story__header"><?php echo $story_header; ?></h2>

							<h3 class="story__subheader"><?php echo $story_subheader; ?></h3>

							<div class="story__content">

								<?php echo $story_content; ?>

							</div>

						</div>

					</div>

				</div>

			<?php endif; ?>

		<?php endwhile; ?>

	<?php endif; ?>

	<?php /* Partners */ ?>

	<?php $partners = get_field( 'partners' ); ?>

	<?php if ( $partners ) : ?>

		<div class="partners">

			<div class="inner-wrap partners__inner-wrap">

				<div class="partners__one">

				<?php if ( $partners[ 'partners_list' ] ) : ?>

						<ul class="partners__list">

							<?php foreach ( $partners[ 'partners_list' ] as $post ) : ?>

								<?php setup_postdata( $post ); ?>

								<?php

									// Options

								?>

								<li class="partners__item">

									<div class="partners__image">

										<picture class="partners__picture">

											<source srcset="<?php the_field( 'partner_photo' ); ?>" media="(min-width: 1000px)">

											<source srcset="<?php the_field( 'partner_photo' ); ?>" media="(min-width: 700px)">

											<img src="<?php the_field( 'partner_photo' ); ?>" alt="A very nice description." class="partners__img">

										</picture>

									</div>

									<div class="partners__content">

										<h2 class="partners__name"><?php the_title(); ?></h2>

										<h3 class="partners__title"><?php the_field( 'partner_title' ); ?></h3>

										<div class="partners__bio">

											<?php the_field( 'partner_bio' ); ?>

										</div>

									</div>

								</li>

							<?php endforeach; ?>

							<?php wp_reset_postdata(); ?>

						</ul>

					<?php endif; ?>

				</div>

			</div>

		</div>

	<?php endif; ?>

<?php get_footer(); ?>
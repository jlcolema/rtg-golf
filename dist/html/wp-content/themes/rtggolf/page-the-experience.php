<?php get_header(); ?>

	<?php /* Overview */ ?>

	<?php $experience_overview = get_field( 'experience_overview' ); ?>

	<?php if ( $experience_overview ) : ?>

		<div class="experience__overview">

			<div class="inner-wrap experience__overview-inner-wrap">

				<h2 class="experience__overview-header"><?php echo $experience_overview[ 'experience_overview_header' ]; ?></h2>

				<h3 class="experience__overview-subheader"><?php echo $experience_overview[ 'experience_overview_subheader' ]; ?></h3>

				<div class="experience__overview-content">

					<?php echo $experience_overview[ 'experience_overview_content' ]; ?>

				</div>

			</div>

		</div>

	<?php endif; ?>

	<?php /* Services */ ?>

	<?php $experience_services = get_field( 'experience_services' ); ?>

	<?php if ( have_rows( 'experience_services' ) ) : ?>

		<?php while ( have_rows( 'experience_services' ) ) : the_row(); ?>

			<div class="experience__services">

				<div class="inner-wrap experience__services-inner-wrap">

					<div class="experience__services-section-one">

						<?php /*

							TODO: Is this content needed? It's a duplicate of the the section above it.

						<h2 class="experience__services-header"><?php echo $experience_services[ 'experience_services_header' ]; ?></h2>

						<h3 class="experience__services-subheader"><?php echo $experience_services[ 'experience_services_subheader' ]; ?></h3>

						<div class="experience__services-content">

							<?php echo $experience_services[ 'experience_services_content' ]; ?>

						</div>

						*/ ?>

					</div>

					<div class="experience__services-section-two">

						<?php if ( have_rows( 'experience_services_list' ) ) : ?>

							<ul class="experience__services-list">

								<?php while ( have_rows( 'experience_services_list' ) ) : the_row(); ?>

									<li class="experience__services-item">
										
										<div class="experience__services-icon">

											<img src="<?php the_sub_field( 'experience_services_icon' ); ?>" alt="" class="experience__services-img" />

										</div>

										<div class="experience__services-title">

											<?php the_sub_field( 'experience_services_title' ); ?>

										</div>

									</li>

								<?php endwhile; ?>

							</ul>

						<?php endif; ?>

					</div>

				</div>

			</div>

		<?php endwhile; ?>

	<?php endif; ?>

	<?php /* Story */ ?>

	<?php if ( have_rows( 'story_two' ) ) : ?>

		<?php while ( have_rows( 'story_two' ) ) : ?>

			<?php the_row(); ?>

			<?php if ( get_row_layout() == 'story_two_image_and_content' ) : ?>

				<?php

					// Image

					$story_two_image = get_sub_field( 'story_two_image' );

					// Header

					$story_two_header = get_sub_field( 'story_two_header' );

					// Subheader

					$story_two_subheader = get_sub_field( 'story_two_subheader' );

					// Content

					$story_two_content = get_sub_field( 'story_two_content' );

				?>

				<div class="story-two">

					<div class="story-two__inner-wrap">

						<div class="story-two__image">

							<picture class="story-two__picture">

								<source srcset="<?php echo $story_two_image; ?>" media="(min-width: 1000px)">

								<source srcset="<?php echo $story_two_image; ?>" media="(min-width: 700px)">

								<img src="<?php echo $story_two_image; ?>" alt="A very nice description." class="story-two__img">

							</picture>

						</div>

						<div class="story-two__contents">

							<h2 class="story-two__header"><?php echo $story_two_header; ?></h2>

							<h3 class="story-two__subheader"><?php echo $story_two_subheader; ?></h3>

							<div class="story-two__content">

								<?php echo $story_two_content; ?>

							</div>

						</div>

					</div>

				</div>

			<?php endif; ?>

		<?php endwhile; ?>

	<?php endif; ?>

<?php get_footer(); ?>
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

	<?php /* Details */ ?>

	<div class="experience__details">
	
		<div class="inner-wrap experience__details-inner-wrap">

			<div class="">

				<picture class="experience__picture">

					<source srcset="https://via.placeholder.com/400x400" media="(min-width: 1000px)">

					<source srcset="https://via.placeholder.com/400x400" media="(min-width: 700px)">

					<img src="https://via.placeholder.com/400x400" alt="A very nice description." class="experience__img">

				</picture>

			</div>

			<div class="">

				<h2 class="">RTG Golf is expert in assisting trip leaders with moving their trip -- from "great idea to looking "on the calendar".</h2>

				<div class="">

					<p><i>We understand that your trip is full up until the minute the first payment is due! We have discovered that if you provide your golf pals with: dates, destination, and price -- they will have all the information they need to accept or decline the invitation.</i></p>

				</div>

			</div>

		</div>

	</div>

<?php get_footer(); ?>
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

	<div class="experience__services">

		<div class="inner-wrap experience__services-inner-wrap">

			<div class="">

				<h2 class="">RTG will take your golf trip from concept to completion with attention to every detail in between.</h2>

				<h3 class="">Subheader</h3>

				<div class="">

					<p>Content</p>

				</div>

			</div>

			<div class="">

				<ul class="">

					<li class="">Detailed proposals delivered online in a format that is easy to share with fellow travelers</li>
					<li class="">Online Registration and payments</li>
					<li class="">Individual trip websites</li>
					<li class="">Detailed trip itineraries</li>
					<li class="">All your trip details at your finger tips while you travel</li>
					<li class="">Competition Design and real-time scoring</li>

				</ul>

			</div>

		</div>

	</div>

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
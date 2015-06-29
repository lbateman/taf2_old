<?php
/**
 * The Template for displaying all audition posts.
 *
 * @package taf
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<!-- show information (left column) -->
			<section class="main-content">
				<section class="show-info">
					<?php the_post_thumbnail(); ?>
					<h1><?php the_title(); ?></h1>
				</section> <!-- End of show-info -->

				<section class="audition-info">
					<h2>General Audition Information</h2>
					<p><?php the_field('audition_dates'); ?></p>
					<p><?php the_field('callback_date'); ?></p>
					<p><?php the_field('audition_blurb'); ?></p>
					<ul>
						<li><?php the_field('audition_venue'); ?></li>
						<li><?php the_field('audition_information_blurb'); ?></li>
						<li><?php the_field('audition_form_blurb'); ?></li>
						<li><?php the_field('audition_materials'); ?></li>
						<li><?php the_field('audition_sides_blurb'); ?></li>
						<li><?php the_field('calendar_blurb'); ?></li>
					</ul>
				</section> <!-- End of audition-info -->

				<section class="performance-info">
					<h3>About the Show</h3>
					<p><?php the_field('performance_info'); ?></p>
					<p><?php the_field('about_the_play'); ?></p>
					<p><?php the_field('about_the_director'); ?></p>
				</section><!-- End of performance-info -->
				
				<section class="character-descriptions">
					<h3>Character Descriptions</h3>
					<!-- <?php while (have_rows('character_descriptions')): the_row(); ?>
						<section class="char-desc">
							<?php the_sub_field('character_name'); ?>
							<?php the_sub_field('character_description'); ?>
						</section> <!-- End of char-desc -->
					<!-- <?php endwhile; ?> -->
				</section><!-- End of character-descriptions -->
				
				<section class="reservation-form">
					<h2>Audition Reservation Form</h2>
				</section><!-- End of reservation-form -->
				
			</section> <!-- main-content -->
				
			<!-- Sidebar (right column) -->
			<section class="custom-sidebar">
				<section class="sidebar-icons clear">
					<section class="social-media">
						<img src="http://taf.leahbateman.com/wp-content/themes/taf/images/facebook.png" alt="Facebook icon">
						<img src="http://taf.leahbateman.com/wp-content/themes/taf/images/twitter.png" alt="Twitter icon">
						<img src="http://taf.leahbateman.com/wp-content/themes/taf/images/youtube.png" alt="YouTube icon">
						<img src="http://taf.leahbateman.com/wp-content/themes/taf/images/googleplus.png" alt="Google+ icon">
					</section>
					<section class="awards">
						<img src="http://taf.leahbateman.com/wp-content/themes/taf/images/phoenix-best2010-ribbon.png" alt="Boston Phoenix Best of 2010 ribbon icon">
					</section>
				</section>
				
				<section class="sidebar-buttons clear">
					<button type="button">Buy Tickets</button>
					<button type="button">Subscribe</button>
					<button type="button">Donate</button>
				</section>
				
				<section class="about-us">
					<h1>About Us</h1>
					<p>Theatre@First is an all-volunteer community theatre based in Somerville, MA. Founded in 2003, we fill a vital niche in the vibrant Davis Square arts scene. We draw upon the talents and support of individuals and organizations throughout the community to provide opportunities for our participants and audiences to experience quality live theatre in a variety of local venues. For more about our recent history, see our In the Press page.</p>
				</section>
			</section>
				
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
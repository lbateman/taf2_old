<?php
/*
Template Name: Current
*/

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<!-- show information (left column) -->
			<section class="main-content">
				<h1>Current Projects</h1>
					<?php
						// check if the repeater field has rows of data
						if( have_rows('email') ):
					 		// loop through the rows of data
	    					while ( have_rows('email') ) : the_row(); ?>
	    						<tr>
		    						<?php //get the email address for the mailto link
		    						$addr = get_sub_field('email_address');
							        // display a sub field value ?>
							        <td><?php the_sub_field('email_purpose'); ?>:</td>
						        	<td><a href="mailto:<?php $addr ?>"><?php the_sub_field('email_address'); ?></a></td>
						        </tr>
		    					<?php endwhile;
							else :
								echo "There are currently no open auditions for Theatre@First productions. For announcements about auditions for upcoming shows, join our <a href="www.theatreatfirst.org/mailinglist.html">mailing list</a> or email <a href="mailto:auditions@theatreatfirst.org">auditions@theatreatfirst.org</a>.";
							endif;
					?>
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

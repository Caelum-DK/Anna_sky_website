<?php 

/*
Template Name: Frontpage
*/

get_header(); ?>

<div class="row">
<div class="twelve columns centered">

<div id="featured">

	<?php SliderContent(); ?>
	
</div>	

<div class="twelve columns centered">

<!-- Skip Nav -->
<a id="content"></a>

	<!-- Start the Loop -->
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
		<!-- Begin the first div -->
		<div>
				
			<h2>
				<?php the_title(); ?>
			</h2>
			
			<!-- Display the Page's Content in a div box. -->
			<div class="entry six columns first">
				<?php the_content(); ?>
			</div>
			<div class="entry six columns">
				<?php the_field( "2nd_row" ); ?>
			</div>
		</div>
		<!-- Closes the first div -->
	
	<!-- Stop The Loop (but note the "else:" - see next line). -->
	<?php endwhile; else: ?>
	
		<!-- The very first "if" tested to see if there were any Posts to -->
		<!-- display.  This "else" part tells what do if there weren't any. -->
		<div class="alert-box error">Sorry, the page you requested was not found</div>
	
	<!--End the loop -->
	<?php endif; ?>
	
</div>

</div>
</div>

<?php get_footer(); ?>
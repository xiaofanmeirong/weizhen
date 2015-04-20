<?php
/*
Template Name: Homepage
*/
get_header(); ?>

		<!-- begin main -->
		<section class="main">

		<!-- begin .post -->
		<div class="post">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<?php the_content(); ?>

			<?php endwhile; endif;?>

		</div>
		<!-- end .post -->

		</section>
		<!-- end main -->

<div class="clear"></div>
<?php get_footer(); ?>
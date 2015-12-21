<?php
/** Template Name: Forums */

get_header(); ?>
<div class="small-12 large-8 columns">
		<div id="container">
			<div id="content" role="main">
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				<?php 

				$exclude = array('page', '');

				// echo get_post_type();

				if( !in_array(get_post_type(), $exclude) ) { ?>

					<h1 class="entry-title"><?php the_title(); ?></h1>

				<?php } ?>

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<div class="entry-content">
						<?php the_content(); ?>
					</div><!-- .entry-content -->

				</div><!-- #post-## -->

				<?php comments_template( '', true ); ?>

			<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #container -->
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>



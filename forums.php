<?php
/** Template Name: Forums */

get_header(); ?>
<div class="row">
	<div class="col-md-8">

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

	</div>
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>



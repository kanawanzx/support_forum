<?php
/** 
 * Template Name: Search Forum 
 *
 * Template for displaying forum search results
 */
get_header();

$search = '';
$http_get = ('GET' == $_SERVER['REQUEST_METHOD']); 
if($http_get && isset($_GET['q']))
{
	$search = $_GET['q'] ;
}
$args = array(
	's' => $search,
);
?>

	<div id="container">
		<div id="content" role="main">

			<br/>
			<hr/>

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<div class="entry-content">

						<div id="bbpress-forums">

							<?php if ( bbp_has_topics( $args ) ) : ?>

								<?php bbp_get_template_part( 'loop',       'topics'    ); ?>

								<?php bbp_get_template_part( 'pagination', 'topics'    ); ?>

							<?php else : ?>

									Sorry, no results found for <strong><?php echo $search ?></strong>.

							<?php endif; ?>

						</div>
						
					</div><!-- .entry-content -->

				</div><!-- #post-## -->

			<?php endwhile; endif; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #container -->
<?php get_footer(); ?>



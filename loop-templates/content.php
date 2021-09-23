<?php
/**
 * Post rendering content according to caller of get_template_part
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">


	<div class="entry-content">

		<a href="<?php echo get_permalink() ?>">
			<div class="card-container">
				<div class="image-title"><?php the_title( ); ?></div>
				<div class="image-container">
					<?php $thumb = get_the_post_thumbnail_url(); ?>
					<div class="feature-image" style="background-image: url('<?php echo $thumb;?>')"></div>

				</div>

				<div class="image-overlay"></div>
			</div>
		</a>
		
		
		<?php // the_excerpt(); ?>

		<?php 
		/*wp_link_pages(
			array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
				'after'  => '</div>',
			)
		);
		*/
		?>

	</div><!-- .entry-content -->



</article><!-- #post-## -->

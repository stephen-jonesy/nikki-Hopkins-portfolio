<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );

?>

<div class="wrapper front-page-wrapper" id="page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">
		<!--<h1>I'm the homepage, Biatch!</h1> -->
		<div class="row">

			<!-- Do the left sidebar check -->
			<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>

			<main class="site-main" id="main">
				<div class="card-container">
						<a href="<?php echo get_site_url(); ?>/photography-gallery/">
							<div class="image-card"></div>
							<div class="image-container">
								<div id="home-image-1"></div>
								<button class="btn btn-dark">Photography</button>
							</div>
						</a>
				</div>
				<div class="card-container">
					<a href="<?php echo get_site_url(); ?>/category/production/">

						<div class="image-card"></div>
						<div class="image-container">
							<div id="home-image-2"></div>
							<button class="btn btn-dark">Production</button>
						</div>
					</a>
				</div>


			</main><!-- #main -->

			<!-- Do the right sidebar check -->
			<?php get_template_part( 'global-templates/right-sidebar-check' ); ?>

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #page-wrapper -->

<?php
get_footer();

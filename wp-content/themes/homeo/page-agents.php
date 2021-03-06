<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Homeo
 * @since Homeo 1.0
 */
/*
*Template Name: Agents Template
*/

if ( isset( $_REQUEST['load_type'] ) && WP_RealEstate_Mixes::is_ajax_request() ) {
	if ( get_query_var( 'paged' ) ) {
	    $paged = get_query_var( 'paged' );
	} elseif ( get_query_var( 'page' ) ) {
	    $paged = get_query_var( 'page' );
	} else {
	    $paged = 1;
	}

	$query_args = array(
		'post_type' => 'agent',
	    'post_status' => 'publish',
	    'post_per_page' => wp_realestate_get_option('number_agents_per_page', 10),
	    'paged' => $paged,
	);
	$params = null;
	if ( WP_RealEstate_Agent_Filter::has_filter() ) {
		$params = $_GET;
	}

	$agents = WP_RealEstate_Query::get_posts($query_args, $params);
	
	if ( 'items' !== $_REQUEST['load_type'] ) {
		echo WP_RealEstate_Template_Loader::get_template_part('archive-agent-ajax-full', array('agents' => $agents));
	} else {
		echo WP_RealEstate_Template_Loader::get_template_part('archive-agent-ajax-agents', array('agents' => $agents));
	}
} else {
	get_header();

	$sidebar_configs = homeo_get_agents_layout_configs();

	$agents_page = WP_RealEstate_Mixes::get_agents_page_url();
	$display_mode = homeo_get_agents_display_mode();
	$display_mode_html = homeo_display_mode_form($display_mode, $agents_page);
	homeo_render_breadcrumbs($display_mode_html);

	?>

		<section id="main-container" class="inner">
			
			<div class="main-content <?php echo apply_filters('homeo_page_content_class', 'container');?> inner">
				
				<?php if ( homeo_get_agents_layout_sidebar() == 'main' && is_active_sidebar( 'agents-filter-top-sidebar' ) ) { ?>
					<div class="agents-filter-top-sidebar-wrapper filter-top-sidebar-wrapper">
				   		<?php dynamic_sidebar( 'agents-filter-top-sidebar' ); ?>
				   	</div>
				<?php } ?>
				
				<?php homeo_before_content( $sidebar_configs ); ?>
				
				<div class="row">
					<?php homeo_display_sidebar_left( $sidebar_configs ); ?>

					<div id="main-content" class="col-sm-12 <?php echo esc_attr($sidebar_configs['main']['class']); ?>">
						<main id="main" class="site-main" role="main">

							<?php
							// Start the loop.
							while ( have_posts() ) : the_post();
								
								// Include the page content template.
								the_content();

								// If comments are open or we have at least one comment, load up the comment template.
								if ( comments_open() || get_comments_number() ) :
									comments_template();
								endif;

							// End the loop.
							endwhile;
							?>


						</main><!-- .site-main -->
					</div><!-- .content-area -->
					
					<?php homeo_display_sidebar_right( $sidebar_configs ); ?>
				</div>

			</div>
		</section>


	<?php

	get_footer();
}
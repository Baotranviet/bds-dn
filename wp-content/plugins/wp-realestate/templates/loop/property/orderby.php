<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$orderby_options = apply_filters( 'wp-realestate-properties-orderby', array(
	'menu_order' => esc_html__('Default', 'wp-realestate'),
	'newest' => esc_html__('Newest', 'wp-realestate'),
	'oldest' => esc_html__('Oldest', 'wp-realestate'),
	'price-lowest' => esc_html__('Lowest Price', 'wp-realestate'),
	'price-highest' => esc_html__('Highest Price', 'wp-realestate'),
	'random' => esc_html__('Random', 'wp-realestate'),
));
$orderby = isset( $_GET['filter-orderby'] ) ? wp_unslash( $_GET['filter-orderby'] ) : 'menu_order';
if ( !WP_RealEstate_Mixes::is_ajax_request() ) {
	wp_enqueue_script('wre-select2');
	wp_enqueue_style('wre-select2');
}
?>
<div class="properties-ordering">
	<form class="properties-ordering" method="get" action="<?php echo WP_RealEstate_Mixes::get_properties_page_url(); ?>">
		<div class="label"><?php esc_html_e('Sort by:', 'wp-realestate'); ?></div>
		<select name="filter-orderby" class="orderby" data-placeholder="<?php esc_attr_e('Sort by', 'wp-realestate'); ?>">
			<?php foreach ( $orderby_options as $id => $name ) : ?>
				<option value="<?php echo esc_attr( $id ); ?>" <?php selected( $orderby, $id ); ?>><?php echo esc_html( $name ); ?></option>
			<?php endforeach; ?>
		</select>
		<input type="hidden" name="paged" value="1" />
		<?php WP_RealEstate_Mixes::query_string_form_fields( null, array( 'filter-orderby', 'submit', 'paged' ) ); ?>
	</form>
</div>
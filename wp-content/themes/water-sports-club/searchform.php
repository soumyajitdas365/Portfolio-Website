<?php
/**
 * Template for displaying search forms in Water Sports Club
 *
 * @subpackage Water Sports Club
 * @since 1.0
 * @version 0.1
 */
?>

<?php $water_sports_club_unique_id = esc_attr( uniqid( 'search-form-' ) ); ?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="screen-reader-text"><?php esc_html_e('Search for:','water-sports-club'); ?></span>
		<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search', 'placeholder','water-sports-club' ); ?>" value="<?php echo get_search_query(); ?>" name="s">
	</label>
	<button type="submit" class="search-submit"><?php echo esc_html_x( 'Search', 'submit button', 'water-sports-club' ); ?></button>
</form>
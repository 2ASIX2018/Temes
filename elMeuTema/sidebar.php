
<?php if ( is_active_sidebar( 'sidebar-1' )  ) : ?>
        <aside id="secondary" class="sidebar widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-1' ); 
		wp_list_categories( string|array $args = '' );
?>

<?php endif; ?>


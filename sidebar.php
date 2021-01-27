<?php 
	$sidebar = airl_sidebar_primary();
	$layout = airl_layout_class();
	if ( $layout != 'col-1c'):
?>

	<div class="sidebar s1">
		
		<div class="sidebar-content">
			
			<?php if ( get_theme_mod( 'post-nav', 'sidebar' ) == 'sidebar' ) { get_template_part('inc/post-nav'); } ?>
			
			<?php get_template_part('inc/author-bio'); ?>
			
			<?php dynamic_sidebar($sidebar); ?>
			
		</div><!--/.sidebar-content-->
		
	</div><!--/.sidebar-->
	
<?php endif; ?>
<?php get_header(); ?>

<div class="content">

	<?php if ( get_theme_mod('heading-enable','off') == 'on' ) : ?>
		<?php get_template_part('inc/page-title'); ?>
	<?php endif; ?>
	
	<?php get_template_part('inc/front-widgets-top'); ?>
	
	<?php if ( have_posts() ) : ?>

		<?php if ( get_theme_mod('blog-layout','blog-grid') == 'blog-grid' ) : ?>
			
			<div class="article-grid">
				<?php while ( have_posts() ): the_post(); ?>
					<?php get_template_part('content-grid'); ?>
				<?php endwhile; ?>
			</div>
			
		<?php elseif ( get_theme_mod('blog-layout','blog-grid') == 'blog-list' ) : ?>
			
			<div class="article-list">
				<?php while ( have_posts() ): the_post(); ?>
					<?php get_template_part('content-list'); ?>
				<?php endwhile; ?>
			</div>
			
		<?php else: ?>
		
			<?php while ( have_posts() ): the_post(); ?>
				<?php get_template_part('content'); ?>
			<?php endwhile; ?>
			
		<?php endif; ?>

		<?php get_template_part('inc/front-widgets-bottom'); ?>
		<?php get_template_part('inc/pagination'); ?>
		
	<?php endif; ?>
	
</div><!--/.content-->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
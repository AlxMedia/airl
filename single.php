<?php get_header(); ?>

<div class="content">

	<?php while ( have_posts() ): the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class('group'); ?>>	
			
			<div class="entry-media">
				<?php if( get_post_format() ) { get_template_part('inc/post-formats'); } ?>
			</div>
			
			<?php do_action( 'alx_ext_sharrre' ); ?>
			
			<header class="entry-header group">
				<h1 class="entry-title"><?php the_title(); ?></h1>
			</header>
			<div class="entry-content">
				<div class="entry themeform">	
					<?php the_content(); ?>
					<?php wp_link_pages(array('before'=>'<div class="post-pages">'.esc_html__('Pages:','airl'),'after'=>'</div>')); ?>
					<div class="clear"></div>				
				</div><!--/.entry-->
			</div>
			<div class="entry-footer group">
				
				<?php the_tags('<p class="post-tags"><span>'.esc_html__('Tags:','airl').'</span> ','','</p>'); ?>
				
				<?php do_action( 'alx_ext_sharrre_footer' ); ?>
				
				<div class="clear"></div>
				
				<?php if ( get_theme_mod( 'related-posts', 'categories' ) != 'disable' ) { get_template_part('inc/related-posts'); } ?>
				
				<?php if ( get_theme_mod( 'post-nav', 'sidebar' ) == 'content' ) { get_template_part('inc/post-nav'); } ?>

				<?php if ( comments_open() || get_comments_number() ) :	comments_template( '/comments.php', true ); endif; ?>
				
			</div>

		</article><!--/.post-->

	<?php endwhile; ?>
	
</div><!--/.content-->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
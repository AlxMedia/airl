<?php
// Query highlight entries
$highlight = new WP_Query(
	array(
		'no_found_rows'				=> false,
		'update_post_meta_cache'	=> false,
		'update_post_term_cache'	=> false,
		'ignore_sticky_posts'		=> 1,
		'posts_per_page'			=> absint( get_theme_mod('highlight-posts-count','7') ),
		'cat'						=> absint( get_theme_mod('highlight-category','') )
	)
);
?>

<?php if ( is_home() && !is_paged() && ( get_theme_mod('highlight-posts-count','7') !='0') || is_single() || is_archive() || is_search() || is_404() || is_page()  ): ?>
<div class="card-articles-wrap">
	<div class="card-articles container-inner">

		<div class="card-header">
			<h2 class="card-header-title"><i class="fas fa-fire"></i> <?php esc_html_e('Highlight','magaziner'); ?></h2>
		</div>
		<div class="mini-card-grid">	
			<?php while ( $highlight->have_posts() ): $highlight->the_post(); ?>
			<article class="mini-card">
				<h3 class="mini-card-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
				<div class="mini-card-category"><?php the_category(' / '); ?></div>
				<div class="mini-card-date"><i class="far fa-calendar"></i><?php the_time( get_option('date_format') ); ?></div>
				<?php if ( has_post_thumbnail() ): ?><div class="mini-card-thumb"><?php the_post_thumbnail('airl-small'); ?></div><?php endif; ?>
			</article>
			<?php endwhile; ?>
		</div>

	</div>
</div>
<?php wp_reset_postdata(); ?>

<?php endif; ?>
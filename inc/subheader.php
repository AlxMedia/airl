<?php if ( is_home() && !is_paged() && ( get_theme_mod('featured-posts-count','7') !='0') ): ?>
	<div class="subheader">
		<div class="subheader-inner container-inner">
			<ul class="subheader-list group">
				<li><strong><?php esc_html_e('Featured','airl'); ?></strong> <i class="fa fa-arrow-down"></i></li>
				<li><strong><?php echo airl_total_posts(); ?> <?php esc_html_e('Articles','airl'); ?></strong> <i class="fa fa-copy"></i></li>				
			</ul>
		</div>
	</div>
<?php endif; ?>

<?php if ( is_single() ): ?>
	<div class="subheader">
		<div class="subheader-inner container-inner">
			<ul class="subheader-list group">
				<li><?php the_category(' / '); ?></li>
				<li>
					<?php if ( comments_open() && ( get_theme_mod( 'comment-count', 'on' ) == 'on' ) ): ?>
						<a class="post-comments" href="<?php comments_link(); ?>"><span><?php comments_number( '0', '1', '%' ); ?></span></a>
					<?php endif; ?>
				</li>
				<li><i class="far fa-calendar"></i> <?php the_time( get_option('date_format') ); ?></li>
			</ul>
		</div>
	</div>
<?php endif; ?>
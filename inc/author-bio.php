<?php if ( is_single() ): ?>
	<?php if ( ( get_theme_mod( 'author-bio', 'on' ) == 'on' ) && get_the_author_meta( 'description' ) ): ?>
		<div class="author-bio">
			<div class="bio-avatar"><?php echo get_avatar(get_the_author_meta('user_email'),'128'); ?></div>
			<p class="bio-name"><?php the_author_meta('display_name'); ?></p>
			<p class="bio-desc"><?php the_author_meta('description'); ?></p>
			<div class="clear"></div>
		</div>
	<?php endif; ?>
<?php endif; ?>
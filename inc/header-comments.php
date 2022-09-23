<?php if ( is_home() && !is_paged() ): ?>
	<div class="header-recent-comments-wrap">
		<div class="header-recent-comments container-inner">
			<?php $comments = get_comments(array('number'=>3,'status'=>'approve','post_status'=>'publish')); ?>
			<div class="group">
				<ul class="header-comments group">	
					<?php foreach ($comments as $comment): ?>
					<li>
						<a href="<?php echo esc_url(get_comment_link($comment->comment_ID)); ?>" class="group">
							<span class="header-comments-avatar"><?php echo get_avatar($comment->comment_author_email,$size='96'); ?></span>
							<?php $str=explode(' ',get_comment_excerpt($comment->comment_ID)); $comment_excerpt=implode(' ',array_slice($str,0,11)); if(count($str) > 11 && substr($comment_excerpt,-1)!='.') $comment_excerpt.='...' ?>
							<span class="header-comments-inner">
								<strong class="header-comments-title"><?php echo esc_html( $comment->comment_author ); ?>:</strong>
								<i class="header-comments-excerpt"><?php echo esc_html( $comment_excerpt ); ?></i>
								<i class="fa fa-comments"></i>
							</span>
						</a>
					</li>
					<?php endforeach; ?>
				</ul>
			</div>
		</div>
	</div>
<?php endif; ?>
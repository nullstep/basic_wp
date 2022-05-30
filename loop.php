<?php if (have_posts()): while (have_posts()) : the_post(); ?>
				<article>
					<h2 class="post-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
					<p class="post-datetime"><span class="post-date"><?php the_time(get_option('date_format')); ?></span> - <span class="post-time"><?php the_time(); ?></span></p>
					<p class="post-excerpt">
<?php if (has_post_thumbnail()) : ?>
						<img src="/uploads/<?php echo end(explode('/', wp_get_attachment_image_src(get_post_thumbnail_id(), 'post-thumbnail')[0])); ?>">
<?php endif; ?>
						<?php the_excerpt(); ?>

					</p>
				</article>
<?php endwhile; ?>
<?php else: ?>
				<article>
					<h2>No Posts</h2>
				</article>
<?php endif; ?>
				<div class="row feed">
<?php if (have_posts()): while (have_posts()) : the_post(); ?>
					<article class="col-md-3 ">
						<h2 class="post-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
						<p class="post-datetime"><span class="post-date"><?php the_time(get_option('date_format')); ?></span> - <span class="post-time"><?php the_time(); ?></span></p>
<?php if (has_post_thumbnail()) : ?>
							<img class="w-100 mb-3" src="/uploads/<?php echo basename(get_the_post_thumbnail_url(get_the_ID(), 'full')); ?>">
<?php endif; ?>
						<p class="post-excerpt">
							<?php the_excerpt(); ?>

						</p>
						<p><a class="btn btn-primary" href="<?php the_permalink(); ?>">Read Article...</a></p>
					</article>
<?php endwhile; ?>
<?php else: ?>
					<article>
						<h2>No Posts</h2>
					</article>
<?php endif; ?>
				</div>
				<div class="row feed">
<?php if (have_posts()): while (have_posts()) : the_post(); ?>
					<div class="col-md-3 ">
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
							<h2 class="post-title"><?php the_title(); ?></h2>
							<p><span class="post-date"><?php the_time(get_option('date_format')); ?></span> - <span class="post-time"><?php the_time(); ?></span></p>
<?php if (has_post_thumbnail()) : ?>
							<img class="w-100 mb-3" src="/uploads/<?php echo basename(get_the_post_thumbnail_url(get_the_ID(), 'full')); ?>">
<?php endif; ?>
						</a>
						<p class="post-excerpt">
							<?php the_excerpt(); ?>

						</p>
						<p><a class="btn btn-primary" href="<?php the_permalink(); ?>">Read Article&hellip;</a></p>
					</div>
<?php endwhile; ?>
<?php else: ?>
					<div>
						<h2 class="post-title">No Articles</h2>
					</div>
<?php endif; ?>
				</div>
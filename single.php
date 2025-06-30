<?php get_header(); ?>

			<div class="row g-0">
				<div class="col">
<?php if (have_posts()): while (have_posts()) : the_post(); ?>
					<h2 class="post-title"><?php the_title(); ?></h2>
					<p><span class="post-date"><?php the_time(get_option('date_format')); ?></span> - <span class="post-time"><?php the_time(); ?></span></p>
<?php the_content(); ?>
<?php endwhile; ?>
<?php else: ?>
					<h2 class="post-title">No Content</h2>
<?php endif; ?>
				</div>
			</div>
<?php get_footer(); ?>
<?php get_header(); ?>

			<div class="row g-0">
				<div class="col">
<?php if (have_posts()): while (have_posts()) : the_post(); ?>
<?php the_content(); ?>
<?php endwhile; ?>
<?php else: ?>
					<h2 class="post-title">No Content</h2>
<?php endif; ?>
				</div>
			</div>
<?php get_footer(); ?>

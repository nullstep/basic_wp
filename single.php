<?php get_header(); ?>

		<main class="row">
			<div class="col-sm-12">
<?php if (have_posts()): while (have_posts()) : the_post(); ?>
				<article>
					<h2 class="post-title"><?php the_title(); ?></h2>
					<p class="post-datetime"><span class="post-date"><?php the_time(get_option('date_format')); ?></span> - <span class="post-time"><?php the_time(); ?></span></p>
<?php the_content(); ?>

				</article>
<?php endwhile; ?>
<?php else: ?>
				<article>
					<h2 class="post-title">No Posts</h2>
				</article>
<?php endif; ?>
			</div>
		</main>
<?php get_footer(); ?>
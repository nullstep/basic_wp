<?php get_header(); ?>
			<section class="row">
				<article class="col-sm-12">
<?php if (have_posts()): while (have_posts()) : the_post(); ?>
					<h2 class="page-title"><?php the_title(); ?></h2>
<?php the_content(); ?>
<?php endwhile; ?>
<?php else: ?>
					<h2>No Content</h2>
<?php endif; ?>
				</article>
			</section>
<?php get_footer(); ?>

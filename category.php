<?php get_header(); ?>

		<main class="row">
			<section class="col-sm-12">
				<h2 class="feed-title"><?php single_cat_title(); ?></h2>
				<?php the_archive_description('<div class="description">', '</div>'); ?>
<?php get_template_part('loop'); ?>
				<div class="pagination">
<?php pagination(); ?>

				</div>
			</section>
		</main>
<?php get_footer(); ?>
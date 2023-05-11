<?php get_header(); ?>

		<main class="row">
			<section class="col-sm-12">
				<h2 class="feed-title"><?php single_cat_title(); ?></h2>
				<div class="description">
					<?php the_archive_description(); ?>
				</div>
<?php get_template_part('loop'); ?>
				<div class="pagination">
<?php BWP::pagination(); ?>

				</div>
			</section>
		</main>
<?php get_footer(); ?>
<?php get_header(); ?>

		<main class="row">
			<section class="col-sm-12">
<?php get_template_part('loop'); ?>
				<div class="pagination">
<?php get_pagination(); ?>

				</div>
			</section>
		</main>
<?php wp_footer(); ?>
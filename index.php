<?php get_header(); ?>

		<main class="row">
			<div class="col-sm-12">
<?php get_template_part('loop'); ?>
				<div class="pagination">
<?php BWP::pagination(); ?>

				</div>
			</div>
		</main>
<?php get_footer(); ?>
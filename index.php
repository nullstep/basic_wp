<?php get_header(); ?>

		<div class="row">
			<div class="col-sm-12">
<?php get_template_part('loop'); ?>
				<div class="pagination">
<?php BWP::pagination(); ?>

				</div>
			</div>
		</div>
<?php get_footer(); ?>
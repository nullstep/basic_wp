	<section id="banner-area" class="py-0">
<?php if (is_front_page()): ?>
<<<<<<< HEAD
		<div id="banner-image" style="background:url(/uploads/<?php BWP::featured(); ?>)">
			<div class="<?php BWP::value('container_class'); ?>">
				<div class="row">
					<div class="col-xs-12">
						<h2><?php the_title(); ?></h2>
					</div>
=======
	<div id="banner-area">
		<div class="<?php BWP::value('container_class'); ?>">
			<header class="row">
				<div class="col-sm-12 text-center">
					<p>banner text</p>
>>>>>>> origin/main
				</div>
			</div>
		</div>
<?php elseif (is_page() || is_singular('post')): ?>

<?php elseif (is_home()): ?>

<?php endif; ?>
	</section>

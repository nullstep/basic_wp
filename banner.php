	<header id="banner-area" class="py-0">
<?php if (is_front_page()): ?>
		<div id="home-banner-image">
			<div class="<?php B::value('container_class'); ?> relative">
				<?php B::featured('img'); ?>
				<div class="banner-box">
					<div class="text-center mt-5">
						<h1><?php the_title(); ?></h1>
					</div>
				</div>
			</div>
		</div>
<?php elseif (is_page() || is_singular('post')): ?>
		<div id="page-banner-image">
			<div class="<?php B::value('container_class'); ?>"<?php B::featured('bg'); ?>>
				<div class="row">
					<div class="col-xs-12 text-center">
						<h1><?php the_title(); ?></h1>
					</div>
				</div>
			</div>
		</div>
<?php elseif (is_home()): ?>
		<div id="blog-banner-image">
			<div class="<?php B::value('container_class'); ?>"<?php B::featured('bg'); ?>>
				<div class="row">
					<div class="col-xs-12 text-center">
						<h1><?php the_title(); ?></h1>
					</div>
				</div>
			</div>
		</div>
<?php endif; ?>
	</header>

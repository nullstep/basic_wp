	<header id="banner-area" class="py-0 mb-3">
<?php if (is_front_page()): ?>
		<div id="home-banner" class="h-100 d-flex align-items-center" <?php B::featured('bg'); ?>>
			<div class="<?php B::value('container_class'); ?>">
				<div class="row">
					<div class="col-12 banner-box text-center">
						<div class="banner-content">
							<h1><?php the_title(); ?></h1>
						</div>
					</div>
				</div>
			</div>
		</div>
<?php elseif (is_page() || is_singular('post')): ?>
		<div id="page-banner" class="h-100 d-flex align-items-center" <?php B::featured('bg'); ?>>
			<div class="<?php B::value('container_class'); ?>">
				<div class="row">
					<div class="col-12 banner-box text-center">
						<div class="banner-content">
							<h1><?php the_title(); ?></h1>
						</div>
					</div>
				</div>
			</div>
		</div>
<?php elseif (is_search()): ?>
		<div id="search-banner" class="h-100 d-flex align-items-center">
			<div class="<?php B::value('container_class'); ?>">
				<div class="row">
					<div class="col-12 banner-box text-center">
						<div class="banner-content">
							<h1>Search Results</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
<?php elseif (is_home()): ?>
		<div id="blog-banner" class="h-100 d-flex align-items-center">
			<div class="<?php B::value('container_class'); ?>">
				<div class="row">
					<div class="col-12 banner-box text-center">
						<div class="banner-content">
							<h1>Feed Page</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
<?php elseif (is_category()): ?>
		<div id="blog-banner" class="h-100 d-flex align-items-center">
			<div class="<?php B::value('container_class'); ?>">
				<div class="row">
					<div class="col-12 banner-box text-center">
						<div class="banner-content">
							<h1><?php single_cat_title(); ?></h1>
							<?php the_archive_description(); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
<?php endif; ?>
	</header>

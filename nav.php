	<div id="nav-area" class="content">
		<nav class="navbar navbar-expand-md navbar-dark bg-dark shadow" role="navigation">
			<div class="<?php echo getvalue('container_class'); ?>">
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle Navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
<?php
	$nav_logo = getvalue('nav_logo');
	$logo_image = getvalue('logo_image_' . $nav_logo);
	if (($nav_logo != 'none') && ($logo_image != '')) {
?>
				<a class="navbar-brand" href="<?php echo home_url(); ?>"><img id="nav-logo" src="/uploads/<?php echo getvalue('logo_image_' . $nav_logo); ?>"></a>
<?php
	}
?>
				<div id="navbar" class="navbar-collapse collapse">
					<?php wp_nav_menu([
						'theme_location' => 'primary',
						'depth' => 5,
						'container' => false,
						'menu_class' => 'navbar-nav mx-auto position-relative',
						'fallback_cb' => '__return_false',
						'walker' => new WP_Bootstrap_Navwalker()
					]);
?>

				</div>
			</div>
		</nav>
	</div>

	<div id="nav-area" class="content">
		<nav class="navbar navbar-expand-md navbar-dark bg-dark shadow" role="navigation">
			<div class="<?php echo getvalue('container_class'); ?> px-0">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-collapse" aria-controls="nav-collapse" aria-expanded="false" aria-label="Toggle Navigation">
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
				<?php wp_nav_menu([
					'theme_location' => 'primary',
					'item_spacing' => 'discard',
					'depth' => 2,
					'container' => 'div',
					'container_class' => 'collapse navbar-collapse',
					'container_id' => 'nav-collapse',
					'menu_class' => 'nav navbar-nav mr-auto',
					'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
					'walker' => new WP_Bootstrap_Navwalker()
				]);
?>

			</div>
		</nav>
	</div>

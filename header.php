<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<title><?php echo trim(wp_title('', false)); ?><?php if (wp_title('', false)) { echo ' : '; } ?><?php bloginfo('name'); ?></title>
	<link href="<?php get_favicon(); ?>" rel="shortcut icon">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
<?php wp_head(); ?>
	<style>
		<?php get_fonts(); ?><?php get_css(); ?>
	</style>
</head>
<body id="override" class="<?php echo get_post_field('post_name'); ?>">
<?php get_template_part('info'); ?>
<?php get_template_part('nav'); ?>
<?php get_template_part('banner'); ?>
	<div id="content-area" class="content">
		<div class="<?php get_value('container_class'); ?>">
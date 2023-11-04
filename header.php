<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<?php if (is_singular()): ?>
	<meta name="description" content="<?php BWP::excerpt(); ?>">
<?php else: ?>
	<meta name="description" content="<?php bloginfo('description'); ?>">
<?php endif; ?>
	<title><?php echo wp_title('&#8211;', FALSE, 'right') . get_option('blogname'); ?></title>
<?php if (BWP::value('font_awesome', 0) == 'yes'): ?>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
<?php endif; ?>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css">
<?php wp_head(); ?>
	<link rel="canonical" href="<?php echo get_site_url(); ?>/">
	<link rel="shortcut icon" type="image/x-icon" href="<?php BWP::favicon(); ?>">
	<style>
		<?php BWP::fonts(); BWP::colours(); BWP::css(); ?>

	</style>
</head>
<body id="body" class="<?php echo get_post_field('post_name'); ?>">
<?php BWP::sections(); ?>
	<main id="content-area">
		<div class="<?php BWP::value('container_class'); ?>">

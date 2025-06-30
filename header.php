<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<?php if (is_singular()) { ?>
	<meta name="description" content="<?php B::description(); ?>">
	<meta name="keywords" content="<?php B::keywords(); ?>">
<?php } else { ?>
	<meta name="description" content="<?php bloginfo('description'); ?>">
<?php } ?>
	<title><?php B::title(); ?></title>
<?php if (B::value('font_awesome', 0) == 'yes') { ?>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
<?php } ?>
<?php if (B::is_gf()) { ?>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="<?php B::gf_href(); ?>" rel="stylesheet">
<?php } ?>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.7/css/bootstrap.min.css">
<?php wp_head(); ?>
	<link rel="canonical" href="<?php echo get_site_url(); ?>/">
	<link rel="shortcut icon" type="image/x-icon" href="<?php B::favicon(); ?>">
	<style>
		<?php B::css(); ?>

	</style>
</head>
<body id="body" <?php echo body_class();?>>
<?php B::sections(); ?>
	<main id="content-area">
		<div class="<?php B::value('container_class'); ?>">
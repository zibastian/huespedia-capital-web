<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="icon" href="https://www.huespedia.com/wp-content/uploads/2018/09/cropped-cropped-favicon-512x512-32x32.png" sizes="32x32" />
	<link rel="icon" href="https://www.huespedia.com/wp-content/uploads/2018/09/cropped-cropped-favicon-512x512-192x192.png" sizes="192x192" />
	<link rel="apple-touch-icon-precomposed" href="https://www.huespedia.com/wp-content/uploads/2018/09/cropped-cropped-favicon-512x512-180x180.png" />
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php get_template_part( 'templates/navigation' ); ?>
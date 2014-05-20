<!doctype html>
<html class="no-js" lang="en">
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title><?php bloginfo( 'name' ); ?><?php wp_title( '|' ); ?></title>
  <meta name="author" content="Rodrigo Ibarra">
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
  <link rel="icon" href="/favicon.ico" type="image/x-icon">
  <?php wp_head(); ?>

 </head>
<body <?php body_class(); ?>>

  <?php include("includes/header.php"); ?>

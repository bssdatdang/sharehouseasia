<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html <?php language_attributes(); ?> >
<html>

<head>
  <title>
    <?php is_front_page() ? bloginfo('name') : wp_title(''); ?>
  </title>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <meta name="author" content="http://hkhung.com/">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <!--Import lib css-->
  <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Open+Sans%3A300%2C300italic%2Cregular%2Citalic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic&#038;subset=greek%2Ccyrillic-ext%2Ccyrillic%2Clatin%2Clatin-ext%2Cvietnamese%2Cgreek-ext&#038;ver=4.3.4' type='text/css' media='all' />
  <?php wp_head() ?>
</head>

<body <?php body_class( $class ); ?>>
  <div class="sharehouse-site">
    <header>
      <div class="navbar-header">
        <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sh-main-navbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a href="index.html" class="navbar-brand img-logo">
          <?php get_header_logo()?> 
        </a>
      </div>
      <?php get_main_menu() ?>  
    </header>

<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package _tk
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta property="og:image" content="https://mrstevedev.io/wp-content/uploads/2018/11/bg-portfolio.jpg">
  	<meta name="description" content="San Diego Web Design, Web Development, User Interface Design, & Wordpress Development. Need a website presence? I am an expert designer and developer. I am an expert in Wordpress, and using various languanges and tools to bring a modern and elegant design to life.">
    <link rel="preload" as="font" href="/wp-content/themes/Portfolio-Site-2017/includes/fonts/Charter-Roman.woff2" type="font/woff2" crossorigin />
    <link rel="preload" as="font" href="/wp-content/themes/Portfolio-Site-2017/includes/fonts/Charter-Black.woff2" type="font/woff2" crossorigin />
    <link rel="preload" as="font" href="/wp-content/themes/Portfolio-Site-2017/includes/fonts/Charter-BlackItalic.woff2" type="font/woff2" crossorigin />
    <link rel="preload" as="font" href="https://mrstevedev.io/wp-content/themes/Portfolio-Site-2017/includes/fonts/Apple-Chancery.woff2" type="font/woff2" crossorigin />
    <link rel="preload" as="font" href="https://mrstevedev.io/wp-content/themes/Portfolio-Site-2017/includes/fonts/helvetica_neu_bold-webfont.woff2" type="font/woff2" crossorigin />
    <link rel="preload" as="image" href="https://mrstevedev.io/wp-content/uploads/2018/11/bg-portfolio.jpg" />
	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php do_action( 'before' ); ?>

<nav class="navbar navbar-default">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div>
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>    

       <ul class="social nav navbar-nav col-sm-4 col-md-4 col-lg-4">
          <!--<li><a target="_blank" href="https://www.facebook.com/spolido1"><svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            width="16" height="16" viewBox="0 0 430.113 430.114" style="enable-background:new 0 0 430.113 430.114;"
            xml:space="preserve">
          <g>
            <path id="Facebook" d="M158.081,83.3c0,10.839,0,59.218,0,59.218h-43.385v72.412h43.385v215.183h89.122V214.936h59.805
              c0,0,5.601-34.721,8.316-72.685c-7.784,0-67.784,0-67.784,0s0-42.127,0-49.511c0-7.4,9.717-17.354,19.321-17.354
              c9.586,0,29.818,0,48.557,0c0-9.859,0-43.924,0-75.385c-25.016,0-53.476,0-66.021,0C155.878-0.004,158.081,72.48,158.081,83.3z"/>
          </g>
          </svg></a></li>-->
          <li><a target="_blank" href="https://www.linkedin.com/in/spolido/"><svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            width="16" height="16" viewBox="0 0 430.117 430.117" style="enable-background:new 0 0 430.117 430.117;"
            xml:space="preserve">
          <g>
            <path id="LinkedIn" d="M430.117,261.543V420.56h-92.188V272.193c0-37.271-13.334-62.707-46.703-62.707
              c-25.473,0-40.632,17.142-47.301,33.724c-2.432,5.928-3.058,14.179-3.058,22.477V420.56h-92.219c0,0,1.242-251.285,0-277.32h92.21
              v39.309c-0.187,0.294-0.43,0.611-0.606,0.896h0.606v-0.896c12.251-18.869,34.13-45.824,83.102-45.824
              C384.633,136.724,430.117,176.361,430.117,261.543z M52.183,9.558C20.635,9.558,0,30.251,0,57.463
              c0,26.619,20.038,47.94,50.959,47.94h0.616c32.159,0,52.159-21.317,52.159-47.94C103.128,30.251,83.734,9.558,52.183,9.558z
              M5.477,420.56h92.184v-277.32H5.477V420.56z"/>
          </g>

          </svg></a></li>
          	<li>
				<a href="https://github.com/mrstevedev?tab=repositories" target="_blank">
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
				</a>
			</li>
          <li><a href="#">
</a></li>
        </ul> 

          <div class="site-brand col-sm-3 col-md-4 col-lg-4">
			<a href="/">
              <img src="<?php bloginfo('url')?>/wp-content/uploads/2018/11/logo.svg" style="width: 150px;">  
			</a>
          </div>
        
         <!-- The WordPress Menu goes here -->
          <?php wp_nav_menu(
            array(
              'theme_location'    => 'primary',
              'depth'             => 2,
              'container'         => 'div',
              'container_id'      => 'navbar',
              'container_class'   => 'collapse navbar-collapse navbar-right',
              'menu_class'        => 'nav navbar-nav',
              'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
              'menu_id'           => 'main-menu',
              'walker'            => new wp_bootstrap_navwalker()
            )
          ); ?>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="main-content">
<?php // substitute the class "container-fluid" below if you want a wider content area ?>
	<div class="container">
		<div class="row">
			<div id="content" class="main-content-inner col-sm-12 col-md-12">


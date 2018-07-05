<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo( 'name' ) ?></title>
    <?php wp_head(); ?>
    <link rel='stylesheet' id='owl-carousel-css'  href='http://localhost:8888/wp-content/plugins/custom-testimonials/css/owl.carousel.min.css?ver=4.9.6' type='text/css' media='all' />
    <link rel='stylesheet' id='owl-theme-css'  href='http://localhost:8888/wp-content/plugins/custom-testimonials/css/owl.theme.default.min.css?ver=4.9.6' type='text/css' media='all' />
    <script type='text/javascript' src='http://localhost:8888/wp-content/plugins/custom-testimonials/js/owl.carousel.min.js?ver=4.9.6'></script>
  </head>
  <body>
    <nav id="nav-full" class="site-nav">
      <div class="nav-mobile" id="mobileNav">
        <?php
          $menuMobile = wp_nav_menu( array( 'theme_location' => 'mobile' ) );
          if ( has_nav_menu('mobile') ){
            echo $menuMobile;
          } else {
            echo '<a href="/">Home</a>';
          }
        ?>
      </div>
      <div class="container">
        <div class="brand-logo col four-col">
          <a href="/">
          <?php
          $custom_logo_id = get_theme_mod( 'custom_logo' );
          $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
          if ( has_custom_logo() ) {
                echo '<img src="'. esc_url( $logo[0] ) .'" alt="'. get_bloginfo( 'name' ) .'">';
          } else {
                echo '<h1>'. get_bloginfo( 'name' ) .'</h1>';
          }
          ?>
          </a>
        </div>
        <div class="nav-bar col eight-col">
          <?php
            $menu = wp_nav_menu( array( 'theme_location' => 'primary' ) );
            if ( has_nav_menu('primary') ){
              echo $menu;
            } else {
              echo '<a href="/">Home</a>';
            }
          ?>
        </div>
        <div id="toggleMenu" class="toggle-menu">
          <i class="fas fa-bars" id="toggleIcon"></i>
        </div>
      </div>
    </nav>

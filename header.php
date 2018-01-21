<!DOCTYPE html>
  <html lang="en">
    <head>
      <!--Import Google Icon Font-->
      <meta charset="<?php bloginfo( 'charset' ); ?>" />
              <title><?php wp_title(); ?></title>
              <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta name="description" content="<?php echo get_bloginfo( 'description' ); ?>">
      
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

  
  <title><?php bloginfo('name'); ?> </title>
              
    <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

    <nav>
    <div class="nav-wrapper container">
      <a href="<?php echo get_bloginfo('wpurl')?>" class="brand-logo"><?php echo get_bloginfo('name') ?></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
          <?php wp_list_pages( '&title_li=' ); ?>
      </ul>
    </div>
  </nav>
    
<!-- Compiled and minified CSS -->

  <!-- Compiled and minified JavaScript -->
          

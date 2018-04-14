<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
  <meta charset="<?php bloginfo("charset"); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

<?php wp_head(); ?>

</head>
<body <?php body_class("top"); ?> >
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row1">
  <header id="header" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div id="logo" class="fl_left">
      <h1><a href="index.html"><?php bloginfo("name"); ?></a></h1>
      <p><?php bloginfo("description"); ?></p>
    </div>
    <div id="quickinfo" class="fl_right">
      <ul class="nospace inline">
        <li><strong>Placerat:</strong><br>
          +00 (123) 456 7890</li>
        <li><strong>Porttitor:</strong><br>
          +00 (123) 456 7890</li>
      </ul>
    </div>
    <!-- ################################################################################################ -->

  </header>
  <nav id="mainav" class="hoc clear"> 
    <!-- ################################################################################################ -->
  
    <?php 
        if( has_nav_menu( 'header_menu' ) ){
            wp_nav_menu(array(
              'theme_location'            =>  'header_menu',
              'container'                 =>  false,
              'fallback_cb'               =>  false,
              'depth'                     =>  3
            ));
          }
     ?>
    <!-- ################################################################################################ -->
  </nav>
</div>

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper bgded overlay" style="background-image:url('<?php echo( get_header_image() ); ?>" alt="<?php echo( get_bloginfo( 'title' ) ); ?>');" >

  <div id="pageintro" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <article>
      <p>Change Your Websit Stay Up to Date</p>
      <h3 class="heading">WordPress Developer</h3>
      <p>We build your website with  care. Your pleasure is our responsibility</p>
      <footer><a class="btn" href="#">gearup your template</a></footer>
    </article>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
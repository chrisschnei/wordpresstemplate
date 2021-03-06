<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php bloginfo('description'); ?>" />
    <meta name="author" content="">
    <link rel="icon" href=<?php echo esc_url( get_theme_mod( 'theme_favicon') ); ?>>

    <link href=<?php print(get_template_directory_uri()  . "/css/bootstrap.css") ?> rel="stylesheet">
    

    <title>
      <?php 
        if(wp_title("", false) != "") {
          print("". get_bloginfo('name', false) . " | " . wp_title("", false));
        } else {
          print(get_bloginfo('name', false));
        }
      ?>
    </title>
    <?php wp_head() ?>
  </head>

  <body>
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button onclick="showHideMenu()" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        <a class="navbar-brand" href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'>
          <img class="headerlogo" src='<?php echo esc_url( get_theme_mod( 'theme_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'>
        </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
            <?php echo wp_nav_menu( array(
                    'container'       => false,
                    'echo'            => false,
                    'items_wrap'      => '%3$s',
                    'depth'           => '1'
                )
              ); 
            ?>
          </ul>
        </div>
      </div>
    </nav>
    <?php if(!is_front_page()) {
      echo '<h3 class="sitetitle"><div class="container"><div class="jumbotron-right-group">'. wp_title("", false) .'</div></div></h3>';
    } else {
      $month = date('n');
      if($month >=12 || $month <= 2) {
        $backgroundimage = esc_url(get_theme_mod("theme_frontpageimagewinterdezfeb"));
        print('<div style="background-image:url(\''.$backgroundimage.'\'); filter: blur(5px); -webkit-filter: blur(5px);" class="frontpageimage blur animated fadeIn"></div>');
      } else if ($month <= 5 || $month >= 10) {
        $backgroundimage = esc_url(get_theme_mod("theme_frontpageimagewinter"));
        print('<div style="background-image:url(\''.$backgroundimage.'\'); filter: blur(5px); -webkit-filter: blur(5px);" class="frontpageimage blur animated fadeIn"></div>');
      } else {
        $backgroundimage = esc_url(get_theme_mod("theme_frontpageimage"));
        print('<div style="background-image:url(\''.$backgroundimage.'\'); filter: blur(5px); -webkit-filter: blur(5px);" class="frontpageimage blur animated fadeIn"></div>');
      }
    } ?>

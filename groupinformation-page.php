<?php
/**
 * Page Section for our theme.
 * Template Name: GroupinformationTemplate
 *
 * @package Treffpunkt60plusminus
 * @subpackage Treffpunkt60plusminus
 * @since Treffpunkt60plusminus 0.0
 */
?>

<?php get_header(); ?>

  <div class="container">
    <div class="jumbotron-right-group">
       <?php while ( have_posts() ) : the_post(); ?>
          <?php the_content(); ?>
       <?php endwhile; ?>
      </p>
    </div>
      <div class="rightsidebar">
      <h3>Termine</h3>
    <?php
      setlocale(LC_TIME, "de_DE.UTF-8"); 
      $args = array(
        'category'         => get_the_category()[0]->cat_ID,
        'post_type'        => 'post',
        'posts_per_page'   => -1,
        'post_status'      => 'future, publish',
        'orderby'          => 'title',
        'order'            => 'asc',
        'date_query' => array(
           'after' => date('Y-m-d', strtotime('- 1 days')))
      );  
      $posts_array = get_posts( $args );
      if(count($posts_array) == 0) {
          echo "Es sind keine Termine geplant.";
      } else {
        include_once('inc/sortposts_helper.php');
        usort($posts_array, 'date_compare');
        foreach($posts_array as $singlepost) {
          $date = date_create($singlepost->post_date);
          $formattedDay = date_format($date, "d");
          $formattedMonth = date_format($date, "m");
          $formattedYear = date_format($date, "Y");
          $day = strftime('%a', mktime(0, 0, 0, $formattedMonth, $formattedDay, $formattedYear));
          echo "<p>";
          echo "<h4>".$day.', '.$formattedDay.'.'.$formattedMonth.'.'.$formattedYear."</h4>";
          echo wpautop($singlepost->post_content);
          echo "</p>";
        }
      }
    ?>
    </div>
  </div>

<?php get_footer(); ?>

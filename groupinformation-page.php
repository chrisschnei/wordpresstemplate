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
          echo "Bisher wurden keine Termine eingetragen.";
      } else {
        include_once('inc/sortposts_helper.php');
        usort($posts_array, 'date_compare');
        foreach($posts_array as $singlepost) {
          echo "<p>";
          $categorytitle = get_the_category($post->ID)[0]->name;
          echo "<h4>".$singlepost->post_title." - ".$categorytitle."</h4>";
          echo wpautop($singlepost->post_content);
          echo "</p>";
        }
      }
    ?>
    </div>
  </div>

<?php get_footer(); ?>

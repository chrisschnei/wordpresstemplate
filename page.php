<?php
/**
 * Page Section for our theme.
 * Template Name: Frontpage Sidebar Page Template
 *
 * @package Treffpunkt60plusminus
 * @subpackage Treffpunkt60plusminus
 * @since Treffpunkt60plusminus 0.0
 */
?>
<?php include_once('inc/sortposts_helper.php'); ?>

<?php get_header(); ?>

  <div class="container">
    <div class="jumbotron-right">
       <?php while ( have_posts() ) : the_post(); ?>
          <?php the_content(); ?>
       <?php endwhile; ?>
      </p>
    </div>
    <div class="rightsidebar">
    <h3>Agenda</h3>
    <?php
      $args = array(
         'posts_per_page' => -1,
         'post_status' => 'future, publish',
         'orderby' => 'title',
         'order' => 'asc',
         'date_query' => array(
           'after' => date('Y-m-d', strtotime('- 1 days'))
           )
      );
      $postsbymonth = get_posts($args); 
      usort($postsbymonth, 'date_compare');
      foreach($postsbymonth as $post) {
        $pageslink = get_the_category($post->ID)[0]->slug;
        $categorytitle = get_the_category($post->ID)[0]->name;
        echo "<p>";
        if($categorytitle == "Treffen für alle") {
          echo '<a href="'.get_site_url()."/".$pageslink.'" style="color:black">'.$post->post_title.' - '.$categorytitle.'</a>';
        } else {
          echo '<a href="'.get_site_url()."/".$pageslink.'">'.$post->post_title.' - '.$categorytitle.'</a>';
        }
        echo "</p>";
      }
    ?>
  </div>
  </div>

<?php get_footer(); ?>
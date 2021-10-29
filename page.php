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
      setlocale(LC_TIME, "de_DE.UTF-8");
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
      echo "<p>";
      if (sizeof($postsbymonth) == 0) {
         echo "Zur Zeit sind keine Termine geplant.";
      } else {
         usort($postsbymonth, 'date_compare');
         $month = "";
         foreach($postsbymonth as $post) {
           $pageslink = get_the_category($post->ID)[0]->slug;
           $categorytitle = get_the_category($post->ID)[0]->name;
           $date = date_create($post->post_date);
           $formattedDay = date_format($date, "d");
           $formattedMonth = date_format($date, "m");
           $formattedYear = date_format($date, "Y");
           $monthHeading = strftime('%B %Y', mktime(0, 0, 0, $formattedMonth, 1, $formattedYear));
           $day = strftime('%a', mktime(0, 0, 0, $formattedMonth, $formattedDay, $formattedYear));
           if(strcmp($monthHeading, $month) != 0) {
             $month = $monthHeading;
             print('<h4>'.strtoupper($month).'</h4>');
           }
           if($categorytitle == "Treffen für alle") {
             echo '<a href="'.get_site_url()."/".$pageslink.'" style="color:black">'.$day.', '.$formattedDay.'.'.$formattedMonth.'. - '.$categorytitle.'</a>';
           } else {
             echo '<a href="'.get_site_url()."/".$pageslink.'">'.$day.', '.$formattedDay.'.'.$formattedMonth.'. - '.$categorytitle.'</a>';
           }
           echo '<br>';
         }
         echo '<br>';
      }
      echo "</p>";
    ?>
  </div>
  </div>

<?php get_footer(); ?>

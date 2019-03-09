<?php
/**
 * Page Section for our theme.
 * Template Name: No-Sidebar Page Template
 *
 * @package Treffpunkt60plusminus
 * @subpackage Treffpunkt60plusminus
 * @since Treffpunkt60plusminus 0.0
 */
?>

<?php get_header(); ?>

  <div class="container">
    <div class="jumbotron">
             <?php while ( have_posts() ) : the_post(); ?>
                <?php the_content(); ?>
             <?php endwhile; ?>
      </p>
    </div>
  </div>

<?php get_footer(); ?>
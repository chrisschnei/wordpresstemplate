<?php
/**
 * 404 error page for our theme.
 * Template Name: 404 error page
 *
 * @package Treffpunkt60plusminus
 * @subpackage Treffpunkt60plusminus
 * @since Treffpunkt60plusminus 0.0
 */
?>

<?php get_header(); ?>

  <div class="container">
    <div class="jumbotron">
	<a HREF="javascript:goBack()"><h3>Zurück zur vorherigen Seite.</h3></a>
    </div>
  </div>

<?php get_footer(); ?>

<script>
function goBack() { window.history.back() }
</script>

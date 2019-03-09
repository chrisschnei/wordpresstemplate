<?php

function wp_maintenance_mode(){
    if(!current_user_can('edit_themes') || !is_user_logged_in()){
      wp_die('
         <h1>Maintenance mode</h1>
         <p>Website will be updated.</p>
      ');
    }
}
add_action('get_header', 'wp_maintenance_mode');

?>

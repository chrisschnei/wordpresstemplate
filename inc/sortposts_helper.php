<?php 

function date_compare($a, $b)
{
  $t1 = strtotime($a->post_title);
  $t2 = strtotime($b->post_title);
  return $t1 - $t2;
}

?>
<?php
add_action('wp_head', 'before_closing', '999');
function before_closing()
{
  echo "\n";
}
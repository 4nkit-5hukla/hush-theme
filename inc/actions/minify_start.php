<?php
add_action('get_header', 'minify_start');
function minify_start()
{
  ob_start('do_minify');
}
<?php
add_action('wp_head', 'after_head', '1');
function after_head()
{
  echo '<title>' . wp_get_document_title() . '</title>';
  echo '<meta charset="' . get_bloginfo('charset') . '" />';
  echo '<meta name="viewport" content="width=device-width, initial-scale=1" />';
}
<?php
function do_minify($html)
{
  return new HTML_Minify($html);
}
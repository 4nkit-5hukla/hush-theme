<?php
if (!is_admin()) {
  add_filter('style_loader_src', 'filter_style_loader_src', 15, 2);
}
function filter_style_loader_src($src, $handle)
{
  if ($handle !== 'theme-style') {
    $filename = array_pop(explode('/', $src));
    $file_location = "/assets/css/min/$filename";
    $file_path = get_template_directory() . $file_location;
    $file_src = get_template_directory_uri() . $file_location;
    if (file_exists($file_path)) {
      return $file_src;
    } else {
      $file = @fopen($file_path, "w");
      $str = file_get_contents($src);
      $str = preg_replace('/\/\*((?!\*\/).)*\*\//', '', $str);
      $str = preg_replace('/\s{2,}/', ' ', $str);
      $str = preg_replace('/\s*([:;{}])\s*/', '$1', $str);
      $str = preg_replace('/;}/', '}', $str);
      $bytes = @fwrite($file, $str);
      @fclose($file);
      return $bytes != false ? $file_src : $src;
    }
  } else {
    return $src;
  }
};
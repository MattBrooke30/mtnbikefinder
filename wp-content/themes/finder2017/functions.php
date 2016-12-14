<?php

$post_type_files = scandir('../wp-content/themes/finder2017/post-types/');

foreach ($post_type_files as $file) {
  if ($file != '.' && $file != '..') {
    require_once('post-types/' . $file);
  }
}

$taxonomy_files = scandir('../wp-content/themes/finder2017/taxonomies/');

foreach ($taxonomy_files as $file) {
  if ($file != '.' && $file != '..') {
    require_once('taxonomies/' . $file);
  }
}

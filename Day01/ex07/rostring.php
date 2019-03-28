#!/usr/bin/php
<?php
if ($argc > 1) {
    $exploded_arr = explode(" ", $argv[1]);
    $filtered_arr = array_filter($exploded_arr);
    $word = $filtered_arr[0];
    $filtered_arr = array_splice($filtered_arr, 1);
    foreach ($filtered_arr as $value)
      echo $value." ";
    echo $word."\n";
}
else
    return;
?>

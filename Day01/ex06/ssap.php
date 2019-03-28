#!/usr/bin/php
<?php
	$array = [];
	for ($i = 1; $i < $argc; $i++)
	{
		$exploded_arr = explode(" ", $argv[$i]);
		foreach ($exploded_arr as $value)
			array_push($array, $value);
	}
	$filtered_arr = array_filter($array);
	sort($filtered_arr);
	foreach ($filtered_arr as $value)
		echo $value."\n";
?>

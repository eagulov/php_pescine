#!/usr/bin/php
<?php
if ($argc > 1)
{
	$exploded = explode(" ", $argv[1]);
	$filtered = array_filter($exploded);
	echo implode(" ", $filtered);
	echo "\n";
}
?>

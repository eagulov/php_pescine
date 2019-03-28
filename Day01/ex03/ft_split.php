#!/usr/bin/php
<?PHP
function ft_split($string)
{
	$str_arr = explode(" ", $string);
	$result = array_filter($str_arr, 'strlen');
	sort($result);
	return($result);
}
?>

#!/usr/bin/php
<?php
function ft_is_sort($tab)
{
	$tmp = $tab;
	sort($tmp);
	$i = 0;
	$nb_words = count($tmp);
	while ($i < $nb_words)
	{
		if ($tmp[$i] != $tab[$i])
			return (0);
		$i++;
	}
	return (1);
}
?>

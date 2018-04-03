#!/usr/bin/php
<?
function ft_split($to_split)
{
	$tab = explode(" ", $to_split);
	sort($tab);
	return array_values(array_filter($tab));
}
?>
#!/usr/bin/php
<?
if ($argc > 1)
{
	$str = trim(preg_replace("/\s+/", " ", $argv[1]));
	$tab = explode(" ", $str);
	$max = count($tab);
	for ($i = 1; $i < $max; $i++)
		echo $tab[$i] . " ";
	echo $tab[0] . "\n";
}
?>
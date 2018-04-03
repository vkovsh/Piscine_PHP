#!/usr/bin/php
<?
function ft_sort($tab)
{
	$alpha = array();
	$numbers = array();
	$other = array();
	foreach ($tab as $value)
	{
		$c = $value[0];
		if (($c >= 'a' && $c <= 'z') ||
			($c >= 'A' && $c <= 'Z'))
			array_push($alpha, $value);
		else if ($c >= '0' && $c <= '9')
			array_push($numbers, $value);
		else
			array_push($other, $value);
	}
	natcasesort($alpha);
	//uasort($alpha, 'cmp');
	sort($numbers, SORT_STRING);
	sort($other);
	return array_merge($alpha, array_merge($numbers, $other));
}

if ($argc > 1)
{
	$res = array();
	for ($i = 1; $i < $argc; $i++)
	{
		$str = trim(preg_replace("/\s+/", " ", $argv[$i]));
		$tab = explode(" ", $str);
		$res = array_merge($res, $tab);
	}
	$res = ft_sort($res);
	foreach ($res as $value)
		echo $value . "\n";
}
?>
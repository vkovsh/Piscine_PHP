#!/usr/bin/php
<?
if ($argc > 1)
{
	$res = array();
	for ($i = 1; $i < $argc; $i++)
	{
		$str = trim(preg_replace("/\s+/", " ", $argv[$i]));
		$tab = explode(" ", $str);
		$res = array_merge($res, $tab);
	}
	sort($res);
	foreach ($res as $value)
		echo $value . "\n";
}
?>
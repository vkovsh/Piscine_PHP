#!/usr/bin/php
<?
if ($argc >= 3)
{
	$key = $argv[1];
	$answer = "";
	for ($i = 2; $i < $argc; $i++)
	{
		$str = trim(preg_replace("/\s+/", "", $argv[$i]));
		$pair = explode(":", $str);
		if (!strcmp($key, $pair[0]))
			$answer = $pair[1];
	}
	if ($answer[0])
		echo $answer . "\n";
}
?>
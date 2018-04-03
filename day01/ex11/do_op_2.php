#!/usr/bin/php
<?
if ($argc == 2)
{
	$str = trim(preg_replace("/\s+/", "", $argv[1]));
	if (strstr($str, "*"))
		$operator = "*";
	else if (strstr($str, "/"))
		$operator = "/";
	else if (strstr($str, "-"))
		$operator = "-";
	else if (strstr($str, "+"))
		$operator = "+";
	else if (strstr($str, "%"))
		$operator = "%";
	else
	{
		echo "Syntax Error\n";
		exit();
	}
	$values = explode($operator, $str);
	print_r($values);
	if (!is_numeric($values[0]) || !is_numeric($values[1]))
		echo "Syntax Error\n";
	else
	{
		if (!strcmp($operator, "+"))
			$res = $values[0] + $values[1];
		else if (!strcmp($operator, "-"))
			$res = $values[0] - $values[1];
		else if (!strcmp($operator, "*"))
			$res = $values[0] * $values[1];
		else if (!strcmp($operator, "/"))
			$res = $values[0] / $values[1];
		else if (!strcmp($operator, "%"))
			$res = $values[0] % $values[1];
		echo $res . "\n";
	}
}
else
	echo "Incorrect Parameters\n";
?>
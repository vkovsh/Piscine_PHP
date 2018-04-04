#!/usr/bin/php
<?
if ($argc == 2)
{
	$flag = 1;
	$separator = '';
	$str = trim(preg_replace("/\s+/", "", $argv[1]));
	if (strstr($str, "*"))
		$operator = "*";
	else if (strstr($str, "/"))
		$operator = "/";
	else if (strstr($str, "%"))
		$operator = "%";
	else if (strstr($str, "+-"))
	{
		$operator = "+";
		$separator = "+-";
		$flag = -1;
	}
	else if (strstr($str, "--"))
	{
		$operator = "-";
		$separator = "--";
		$flag = -1;
	}
	else if (strstr($str, "++"))
	{
		$operator = "+";
		$separator = "++";
	}
	else if (strstr($str, "-+"))
	{
		$operator = "-";
		$separator = "-+";
	}
	else if (($k = strstr($str, "-")))
		$operator = "-";
	else if (($k = strstr($str, "+")))
		$operator = "+";
	else
	{
		echo "Syntax Error\n";
		exit();
	}
	if ($separator)
		$values = explode($separator, $str);
	else
		$values = explode($operator, $str);
	if (!is_numeric($values[0]) || !is_numeric($values[1]))
		echo "Syntax Error\n";
	else
	{
		if (!strcmp($operator, "+"))
			$res = $values[0] + $flag * $values[1];
		else if (!strcmp($operator, "-"))
			$res = $values[0] - $flag * $values[1];
		else if (!strcmp($operator, "*"))
			$res = $values[0] * $values[1];
		else if (!strcmp($operator, "/"))
		{
			if ($values[1] == 0)
			{
				echo "Incorrect Parameters\n";
				exit();
			}
			$res = $values[0] / $values[1];
		}
		else if (!strcmp($operator, "%"))
		{
			if ($values[1] == 0)
			{
				echo "Incorrect Parameters\n";
				exit();
			}
			$res = $values[0] % $values[1];
		}
		echo $res . "\n";
	}
}
else
	echo "Incorrect Parameters\n";
?>
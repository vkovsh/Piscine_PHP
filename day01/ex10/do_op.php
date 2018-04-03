#!/usr/bin/php
<?
if ($argc == 4)
{
	$f_op = trim(preg_replace("/\s+/", " ", $argv[1]));
	$op = trim(preg_replace("/\s+/", " ", $argv[2]));
	$s_op = trim(preg_replace("/\s+/", " ", $argv[3]));
	if (!strcmp($op, "+"))
		$res = $f_op + $s_op;
	else if (!strcmp($op, "-"))
		$res = $f_op - $s_op;
	else if (!strcmp($op, "*"))
		$res = $f_op * $s_op;
	else if (!strcmp($op, "/"))
	{
		if ($s_op != 0)
			$res = $f_op / $s_op;
		else
			exit();
	}
	else if (!strcmp($op, "%"))
	{
		if ($s_op != 0)
			$res = $f_op % $s_op;
		else
			exit();
	}

	echo $res . "\n";
}
else
	echo "Incorrect parameters\n"
?>
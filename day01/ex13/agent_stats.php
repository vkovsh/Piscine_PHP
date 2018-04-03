#!/usr/bin/php
<?
if ($argc == 2)
{
	if (!strcmp($argv[1], "average"))
		$mode = 1;
	else if (!strcmp($argv[1], "average_user"))
		$mode = 2;
	else if (!strcmp($argv[1], "moulinette_variance"))
		$mode = 3;
	else
		exit();
	$average = 0;
	$count = 0;
	$av_user = array();
	while (!feof(STDIN))
	{
		$line = trim(fgets(STDIN));
		$tab = explode(";", $line);
		if ($mode == 1)
		{
			if (is_numeric($tab[1]))
			{
				$average += $tab[1];
				$count++;
			}
		}
	}
	if ($count != 0 && $mode == 1)
		$res = $average / $count;
	echo $res . "\n";
}
?>
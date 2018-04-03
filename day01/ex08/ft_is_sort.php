<?
function ft_is_sort($tab)
{
	$c = count($tab);
	if ($c == 1)
		return TRUE;
	$sorted = $tab;
	sort($sorted);
	for ($i = 0; $i < $c; $i++)
	{
		if (strcmp($sorted[$i], $tab[$i]))
			return FALSE;
	}
	return TRUE;
}
?>
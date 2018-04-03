#!/usr/bin/php
<?
include("ft_is_sort.php");
$tab = array(-101, -100, 3, 3, 5);
if (ft_is_sort($tab))
	echo "The array is sorted\n";
else
	echo "The array is not sorted\n";
?>
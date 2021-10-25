<?php

function perkalian_matriks($matriks_a, $matriks_b)
{
	$hasil = array();
	for ($i = 0; $i < sizeof($matriks_a); $i++) {
		for ($j = 0; $j < sizeof($matriks_b[0]); $j++) {
			$temp = 0;
			for ($k = 0; $k < sizeof($matriks_b); $k++) {
				$temp += $matriks_a[$i][$k] * $matriks_b[$k][$j];
			}
			$hasil[$i][$j] = $temp;
		}
	}
	return $hasil;
}

// Matriks A
$a = [];
$a[] = [3, -2];
$a[] = [4, 5];

// Matriks B
$b = [];
$b[] = [5, 1];
$b[] = [-1, 2];

$hasil = perkalian_matriks($a, $b);
for ($i = 0; $i < sizeof($hasil); $i++) {
	echo "\n";
	for ($j = 0; $j < sizeof($hasil[$i]); $j++) {
		echo " " . round($hasil[$i][$j], 4) . "  ";
	}
	echo "\n";
}

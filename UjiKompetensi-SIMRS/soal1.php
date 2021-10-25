<?php
// Membalik rangkaian gerv=bong 1 - 9
$gerbong = [];
$x = 1;
for ($i = 0; $i < 9; $i++) {
    echo "Masukan nomor gerbong ke - " . $x++ . ": ";
    $noGerbong = trim(fgets(STDIN));
    array_push($gerbong, $noGerbong);
}

echo "\n Hasil Urutan Pembalik : \n";
print_r(array_reverse($gerbong));

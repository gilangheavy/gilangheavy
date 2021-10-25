<?php
echo "Masukkan data yang akan diurutkan (separator , ) : ";
$dataInput  = trim(fgets(STDIN));
$data       = explode(",", $dataInput);

echo "Nilai yang di cari :  ";
$keyword = trim(fgets(STDIN));
foreach ($data as $key => $value) {
    if ($value ==  $keyword) {
        echo "Nilai " . $keyword . " ditemukan di index ke " . $key . "\n";
    }
}

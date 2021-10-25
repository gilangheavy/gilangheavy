<?php
$mataPelajaran = ['Matematika', 'Fisika', 'Kimia', 'Biologi', 'Bahasa Indonesia'];

$NilaiSiswa = [];
$Nilai = [];
foreach ($mataPelajaran as $mapel) {
    echo "Nilai Mata Pelajaran " . $mapel . " : ";
    $nilai      = trim(fgets(STDIN));
    $dataNilai  = [$mapel => $nilai];
    $Nilai      += $dataNilai;
}
array_push($NilaiSiswa, $Nilai);

$total = 0;

foreach ($NilaiSiswa[0] as $key => $value) {
    if ($value < 50) {
        echo "Terdapat Nilai < 50 : TIDAK LULUS";
        die;
    }
    $total += $value;
}
$jumlahMapel = count($NilaiSiswa[0]);

$rata2 =  $total / $jumlahMapel;

echo "Nilai Rata - Rata : " . $rata2 . " = ";
if ($rata2 > 70) {
    echo "LULUS";
} else {
    echo "TIDAK LULUS";
}

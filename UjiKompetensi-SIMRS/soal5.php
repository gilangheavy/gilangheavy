<?php
echo "Masukan panjang diamond : ";
$diameter_diamond   =  trim(fgets(STDIN));

$pesan_kesalahan    = '';
if ($diameter_diamond <= 0) {
    //  Tampilkan Pesan Kesalahan   : Lebar Diamond tidak boleh kurang dari 0
    $pesan_kesalahan    .= 'Lebar Diamond tidak boleh kurang atau sama dengan 0<br>';
}
if ($diameter_diamond % 2 == 0) {
    //  Tampilkan Pesan Kesalahan   : Lebar Diamond tidak boleh Genap.
    $pesan_kesalahan    .= 'Lebar Diamond harus ganjil<br>';
}
if ($diameter_diamond % 2 > 99) {
    //  Untuk menghemat memori, maka input diameter tidak boleh lebih dari 99.
    $pesan_kesalahan    .= 'Angka tidak boleh lebih besar dari 99<br>';
}
if ($pesan_kesalahan != '') {
    return $pesan_kesalahan;
} else {
    $jumlah_baris       = $diameter_diamond;
    $jumlah_kolom       = $diameter_diamond;
    $tengah             = ($diameter_diamond + 1) / 2;
    $tampilkan_diamond  = '';
    for ($baris = 1; $baris <= $jumlah_baris; $baris++) {
        for ($kolom = 1; $kolom <= $jumlah_kolom; $kolom++) {

            if (($baris - $kolom < $tengah) &&
                ($baris + $kolom > $tengah) &&
                ($kolom - $baris < $tengah) &&
                ($kolom + $baris < $diameter_diamond + $tengah + 1)
            ) {
                $tampilkan_diamond  .= '*';
            } else {
                $tampilkan_diamond  .= ' ';
            }
        }
        $tampilkan_diamond  .= "\n";
    }
    echo $tampilkan_diamond;
}

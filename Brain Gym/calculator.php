<?php
echo "Kalkulator Luas Bidang Datar" . PHP_EOL;
echo <<<RUMUS
1. Rumus Persegi
2. Rumus Persegi Panjang
3. Rumus Segitiga
RUMUS;
echo PHP_EOL;
echo "Silahkan pilih rumus :";
$rumus = trim(fgets(STDIN));
switch ($rumus) {
    case '1':
        rumusPersegi();
        break;
    case '2':
        rumusPersegiPanjang();
        break;
    case '3':
        rumusSegitiga();
        break;
    default:
        echo "Pilihan rumus tidak tersedia" . PHP_EOL;
        break;
}

function rumusPersegi()
{
    echo "Masukan panjang sisi :";
    $sisi = trim(fgets(STDIN));

    $luas = $sisi * $sisi;
    echo "Luas Persegi adalah : " . $luas . PHP_EOL;
}

function rumusPersegiPanjang()
{
    echo "Masukan panjang :";
    $panjang = trim(fgets(STDIN));

    echo "Masukan lebar :";
    $lebar   = trim(fgets(STDIN));

    $luas    = $panjang * $lebar;
    echo "Luas Persegi Panjang adalah : " . $luas . PHP_EOL;
}

function rumusSegitiga()
{
    echo "Masukan alas :";
    $alas   = trim(fgets(STDIN));

    echo "Masukan tinggi :";
    $tinggi = trim(fgets(STDIN));

    $luas   = 0.5 * $alas * $tinggi;
    echo "Luas Segitiga adalah : " . $luas . PHP_EOL;
}

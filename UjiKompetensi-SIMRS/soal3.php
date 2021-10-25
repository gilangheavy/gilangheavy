<?php
error_reporting(0);
echo "Masukan jumlah Bilangan : ";
$jumlahBilangan = trim(fgets(STDIN));

$x = 1;
$bilangan = [];
for ($y = 0; $y < $jumlahBilangan; $y++) {
    echo "Masukan bilangan ke " . $x++ . " : ";
    array_push($bilangan, trim(fgets(STDIN)));
}
print_r($bilangan);

$jml = count($bilangan);
for ($i = 0; $i <= $jml - 1; $i++) {
    $j = $i + 1;
    if ($bilangan[$i] >= $bilangan[$j]) {
        $j = $bilangan[$j];
    } else {
        $temp = $bilangan[$j];
        if ($bilangan[$j] >= $temp) {
            $maksimal = $bilangan[$j];
        } else {
            $maksimal = $temp;
        }
    }
}

function nilaiMax($array)
{
    $n = count($array);
    $max = $array[0];
    for ($i = 1; $i < $n; $i++)
        if ($max < $array[$i])
            $max = $array[$i];
    return $max;
}

function nilaiMin($array)
{
    $n = count($array);
    $min = $array[0];
    for ($i = 1; $i < $n; $i++)
        if ($min > $array[$i])
            $min = $array[$i];
    return $min;
}

function jumlahDeret($Bilangan)
{
    $jumlahDeret = 0;
    foreach ($Bilangan as $bilangan) {
        echo "Bilangan : " . $bilangan;
        if ($bilangan % 2 == 0) {
            $bil = $bilangan *  nilaiMax($Bilangan);
            echo " * " . nilaiMax($Bilangan) . " = " . $bil;
        } else {
            $bil = $bilangan *  nilaiMin($Bilangan);
            echo " * " . nilaiMin($Bilangan) . " = " . $bil;
        }
        echo "\n";
        $jumlahDeret += $bil;
    }
    return $jumlahDeret;
}

echo "\n";
echo 'Nilai terkecil : ' . nilaiMin($bilangan);
echo "\n";
echo 'Nilai terbesar : ' . nilaiMax($bilangan);
echo "\n";
echo "Hasil penjumlahan deret : " . jumlahDeret($bilangan);

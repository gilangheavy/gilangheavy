<?php
echo "Masukkan data yang akan diurutkan (separator , ) : ";
$dataInput  = trim(fgets(STDIN));
$data       = explode(",", $dataInput);

echo "Apakah Anda akan mengurutkan data (y/n) ? ";
$start = trim(fgets(STDIN));
if ($start == "y") {
    echo "Apa jenis urutan data (asc/desc) ? ";
    $urut = trim(fgets(STDIN));
    if ($urut == 'asc') {
        sort($data);
        $arrlength = count($data);
        for ($x = 0; $x < $arrlength; $x++) {
            echo " " . $data[$x];
        }
    } elseif ($urut ==  'desc') {
        rsort($data);
        $arrlength = count($data);
        for ($x = 0; $x < $arrlength; $x++) {
            echo " " . $data[$x];
        }
    } else {
        echo "Program berhenti Anda salah memilih jawaban";
    }
} elseif ($start == "n") {
    echo "Terima Kasih";
} else {
    echo "Program berhenti Anda salah memilih jawaban";
}

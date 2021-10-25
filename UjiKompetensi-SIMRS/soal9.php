<?php
echo "Masukkan Nilai : ";
$input = trim(fgets(STDIN));

if ($input >= 9) {
    echo "Sangat Baik";
} elseif ($input > 7 && $input < 9) {
    echo "Baik";
} elseif ($input > 5 && $input < 7) {
    echo "Cukup";
} elseif ($input < 5) {
    echo "Kurang";
}

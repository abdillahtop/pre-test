<?php

$tinggi = 10; // dalam meter
$tahun = 4;

echo "Tinggi Awal adalah $tinggi"."<br>";
echo "Tahun Yang diinginkan adalah $tahun"."<br>";
for ($i=1; $i <= $tahun ; $i++) { 
    $pertumbuhan = ($tinggi*2)+1;
    $akhir=$pertumbuhan*$i;
}

$akhir = $pertumbuhan*$tahun;
echo "Tinggi pohon akhir adalah : $akhir Meter";
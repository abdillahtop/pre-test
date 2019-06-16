<?php

  $array_bilangan = [6,22,34,15,2,13,26,57,42,32,100];
    // var_dump($array_bilangan[0]);
    $total = (count($array_bilangan))-1;
    $hasil = implode(", ",$array_bilangan);
    echo "Nilai array : ";
    echo $hasil."<br>";

    //sortir
    sort($array_bilangan);
    echo "Data Terkecil :"." ";
    print_r($array_bilangan[0]);
    echo "<br>";
    echo "Data Terbesar :"." ";
    print_r($array_bilangan[$total]);
    echo "<br>";
    echo "Ascending Sort :"." ";
    $hasil = implode(", ",$array_bilangan);
    echo $hasil;
    echo "<br>";
    rsort($array_bilangan);
    echo "Descending Sort:"." ";
    $hasilbalik = implode(", ",$array_bilangan);

    echo $hasilbalik;


    

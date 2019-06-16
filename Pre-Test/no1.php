<?php
    $uang = 55000;
    $mie = 2500;
    $beli = $uang/$mie;
    $dapat_satu= $beli%4; //dapat satu karena kelipatan 4
    $bonus = ($beli-$dapat_satu)/4; 
    $total = $beli + $bonus;
    echo "dengan uang = $uang, dan harga mie = $mie, Maka :"."<br>";
    echo " Mie instan yang didapat adalah : $total Mie instan";
<?php
    class rumus {
        public function volume_balok ($panjang,$lebar,$tinggi){
            $volume = $panjang*$lebar*$tinggi;
            return $volume;
        }
        public function luas_balok($panjang, $lebar, $tinggi){
            $luas = 2*($panjang*$lebar + $panjang*$tinggi+$lebar * $tinggi);
            return$luas;
        }
    }$abj = new rumus();
    $volume = $abj volume balok (4,3,2);
    $luas = $abj luas_balok (4,3,2);

    echo " menghitung volume dan luas balok <br>";
    echo " volume balok = ".$volume."<br>";
    echo "luas balok = ".$luas;
    ?>
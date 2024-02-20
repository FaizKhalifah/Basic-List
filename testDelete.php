<?php
    $kumpulanNama = ["Faiz","Zufar","Ravi","Bagas"];
    foreach( $kumpulanNama as $kumpulan ) {
        echo "". $kumpulan ."\n";
    }
    $input = fgets(STDIN);
    for( $i = intval($input); $i <= sizeof($kumpulanNama); $i++ ) {
        $kumpulanNama[intval($i)]= $kumpulanNama[intval($i)+1];
    }
    unset($kumpulanNama[(sizeof($kumpulanNama))]);
    foreach( $kumpulanNama as $kumpulan ) {
        echo "". $kumpulan ."\n";  
    }
?>
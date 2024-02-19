<?php
    echo "Selamat datang di basic list"."\n";
    $list = [];
    $opsi = ["Tambah","Hapus"];
    echo"========================="."\n";
    foreach($opsi as $i){
        echo $i."\n";
    }
    echo"========================="."\n";
    echo "Masukkan perintah yang kamu mau : ";
    $pilihan = trim(fgets(STDIN));
    if(strtolower($pilihan)=="tambah"){
        echo "Kamu memilih opsi tambah";
    }

   
?>
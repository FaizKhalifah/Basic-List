<?php
    echo "Selamat datang di basic list"."\n";
    $listTugas = [];
    while(true){
        $opsi = ["Tambah","Hapus","Daftar","Keluar"];
        echo"\n========================="."\n";
        foreach($opsi as $i){
            echo $i."\n";
        }
        echo"\n========================="."\n";
        echo "Masukkan perintah yang kamu mau : ";
        $pilihan = trim(fgets(STDIN));
        if(strtolower($pilihan)=="tambah"){
            echo "Kamu memilih opsi tambah"."\n";
            echo "Masukkan tugas yang ingin kamu tambah : ";
            $tugasTambahan = trim(fgets(STDIN));
            $listTugas[]=$tugasTambahan;
            echo "\n Kamu berhasil menambah tugas barumu";
        }else if(strtolower($pilihan)=="hapus"){
            echo "Masukkan nomor tugas yang ingin kamu hapus : ";
            $hapusTugas = trim(fgets(STDIN));
            unset($listTugas[intval($hapusTugas)]);
        }else if(strtolower($pilihan)=="daftar"){
            foreach($listTugas as $tugas){
                echo $tugas."\n";
            }
        }else if(strtolower($pilihan)== "keluar"){
            echo "Anda keluar dari program";
            return;
        }

    }
    

   
?>
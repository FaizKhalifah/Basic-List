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
            if(isset($listTugas[$hapusTugas - 1])){
                unset($listTugas[$hapusTugas - 1]);
                echo "Tugas berhasil dihapus";
            }else{
                echo "Nomor tugas tidak terdeteksi";
            }
        }else if(strtolower($pilihan)=="daftar"){
            if(sizeof($listTugas)==0){
                echo "Kamu belum memiliki tugas di list";
            }else{
                $i = 1;
                foreach($listTugas as $key=>$tugas){
                    echo $i.". ".$tugas."\n";
                    $i++;
                }
            }
           
        }else if(strtolower($pilihan)== "keluar"){
            echo "Anda keluar dari program";
            return;
        }else{
            echo "Perintah tidak dikenal";
        }

    }
    

   
?>
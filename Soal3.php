<?php
    $kotaKKN = [
        "Lampung",
        "Riau",
        "Jambi",
        "Bengkulu",
        "Makassar",
        "Kendari",
        "Gorontalo",
        "Samarinda",
        "Papua",
        "Nusa Tenggara Barat"
    ];
    $namaPanggilan = "Diego";
    $namaDepan = str_split($namaPanggilan);
    $tujuanKKN = "Jawa Timur"; // Jika tidak ditemukan kota tujuan
    
    foreach ($namaDepan as $huruf) {
        foreach ($kotaKKN as $kota) {
            if (strtolower(substr($kota, 0, 1)) === strtolower($huruf)) {
                $tujuanKKN = $kota;
                break 2;
            }
        }
    }
    
    echo "Nama: $namaPanggilan\n"."<br>";
    echo "Tujuan KKN: $tujuanKKN\n";
    
?>
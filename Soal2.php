<?php
   echo "\n\n";
   $anggotaKelompok = [
        ["nama" => "Zefanya Diego F", "nim" => "550134"],
        ["nama" => "Rasyid Kusnadi", "nim" => "221345"],
        ["nama" => "Rizky Aziz", "nim" => "322411"],
        ["nama" => "Lionel Ronaldo", "nim" => "475578"],
        ["nama" => "Dariel Markerizal", "nim" => "216002"]
    ];

    foreach ($anggotaKelompok as $anggota) {
        $nama = $anggota["nama"];
        $nim = $anggota["nim"];
        $peran = ($nim % 2 == 0) ? "Back-end Developer" : "Front-end Developer";
        

        echo "Nama : " . $nama . "<br>";
        echo "NIM : " . $nim . "<br>";
        echo "Peran : " . $peran . "<br><br>";
    
    }

?>
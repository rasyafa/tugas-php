<?php 

// Membuat array asosiatif nama siswa dan nilai mereka
$siswa = [
    "Ridea" => 85,
    "Sindi" => 70,
    "Alfin" => 90,
    "Tio" => 75,
    "Mira"=> 80
];

// Menggunakan foreach untuk mencetak nama dan nilai siswa
foreach ($siswa as $nama => $nilai) {
    // Menentukan keterangan berdasarkan nilai
    if ($nilai > 75) {
        $keterangan = "Lulus";
    } else {
        $keterangan = "Tidak Lulus";
    }
    
    // Mencetak nama, nilai, dan keterangan
    echo "Nama: $nama, Nilai: $nilai, Keterangan: $keterangan\n" . "<br>";
}
?>
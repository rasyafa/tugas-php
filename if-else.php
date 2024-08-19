<?php 

$usia = 90;

if($usia >= 0 && $usia <= 12) {
    echo"Kategori Usia: Anak-anak";
}elseif ($usia >= 13 && $usia <= 17) {
    echo "Kategori Usia: Remaja";
}elseif ($usia >= 18 && $usia <= 59) {
    echo "Kategori Usia: Dewasa";
}elseif ($usia >= 60 && $usia <= 80) {
    echo "Kategori Usia: Lansia";
}else {
    echo "Silakan masukkan usia yang valid";
}

?>
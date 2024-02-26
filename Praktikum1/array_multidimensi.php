<?php

$mahasiswa = [
    ["Nurhayati", "Teknik Informatika"],
    ["Diah Ayu", "Manajemen"],
    ["Eka Kartini", "Akuntansi"],
    ["Nurhayati", "Ilmu Komunikasi"]
];

foreach($mahasiswa as $mhs) {
    echo "Nama : " . $mhs[0] . "<br>";
    echo "Jurusan : " . $mhs[1] . "<br>";
    echo "<br>";
}

?>
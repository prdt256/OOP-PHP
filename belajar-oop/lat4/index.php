<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include "Mahasiswa.php";
include "MahasiswaTransfer.php";
include "MataKuliah.php";

$Matkul1 = new MataKuliah;
$Matkul2 = new MataKuliah;

$daftar_nilai = [
    "1" => ["sks" => "2", "Nilai" => "A"],
    "2" => ["sks" => "3", "Nilai" => "B"],
    "3" => ["sks" => "2", "Nilai" => "C"],
];

$Mahasiswa1 = new MahasiswaTransfer($daftar_nilai);


$Matkul1 -> setData ("A11.4312", "Pemrograman Berbasis Web");
$Matkul2 -> setData ("A11.4311", "Pemrograman Web Lanjut");

$Mahasiswa1 -> setData("A11.2022.00011", "Budiono Siregar", [$Matkul1, $Matkul2], "2002-11-21");

echo "<pre>";
print_r($Mahasiswa1 -> getData());
echo "</pre>";

?>
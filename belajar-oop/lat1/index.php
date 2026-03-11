<?php
include "Mahasiswa.php";
include "MataKuliah.php";

$Mahasiswa1 = new Mahasiswa;
$Matkul1 = new MataKuliah;
$Matkul2 = new MataKuliah;

$Matkul1 -> setData ("A11.4312", "Pemrograman Berbasis Web");
$Matkul2 -> setData ("A11.4311", "Pemrograman Web Lanjut");

$Mahasiswa1 -> setData("A11.2022.00011", "Budiono Siregar", [$Matkul1, $Matkul2]);

echo "<pre>";
print_r($Mahasiswa1);
echo "</pre>";

?>
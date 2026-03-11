<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include "Mahasiswa.php";
include "MataKuliah.php";

$Mahasiswa1 = new Mahasiswa;
$Matkul1 = new MataKuliah;
$Matkul2 = new MataKuliah;

$Matkul1 -> setData ("A11.4312", "Pemrograman Berbasis Web");
$Matkul2 -> setData ("A11.4311", "Pemrograman Web Lanjut");

$Mahasiswa1 -> setData("A11.2022.00011", "Budiono Siregar", [$Matkul1, $Matkul2], "2002-11-21");

echo "<pre>";
echo "Umur dihitung dengan method atau function : <br>";
print_r($Mahasiswa1 -> getData()[4]);
echo "<br><br>";
echo "Nilai umur diberi secara langsung : <br>";
$Mahasiswa1 -> umur = 100;
print_r($Mahasiswa1 -> umur);
echo "</pre>";

?>
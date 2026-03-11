<?php
include "Mahasiswa.php";

$mahasiswaTI = new Mahasiswa();
$mahasiswaTI->setData('A11.2000.00001', 'Fulan', 'Teknik Informatika');

print_r($mahasiswaTI->getData()); echo "<br>";

$mahasiswaSI = new Mahasiswa();
$mahasiswaSI->setData('A11.2010.00001', 'Bayu', 'Sistem Informasi');

print_r($mahasiswaSI->getData()); echo "<br>";

$mahasiswaDKV = new Mahasiswa();
$mahasiswaDKV->setData('A11.2001.00002', 'Fulan', 'Desain Komunkasi Visual');

print_r($mahasiswaDKV->getData()); echo "<br>";

echo "<hr>";
echo "<h3>Menampilkan dengan Method Baru</h3>";

$mahasiswaTI->tampilkanData();
$mahasiswaSI->tampilkanData();
$mahasiswaDKV->tampilkanData();
?>

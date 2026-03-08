<?php
include "Mahasiswa.php";

$mahasiswaTI = new Mahasiswa();
$mahasiswaTI->setData('A11.2000.00001', 'Fulan', 'Teknik Informatika');

print_r($mahasiswaTI->getData());

echo "<hr>";

// objek baru 1
$mhs1 = new Mahasiswa();
$mhs1->setData('A11.2000.00002', 'Budi', 'Sistem Informasi');

print_r($mhs1->getData());

echo "<hr>";

// objek baru 2
$mhs2 = new Mahasiswa();
$mhs2->setData('A11.2000.00003', 'Siti', 'Teknik Komputer');

print_r($mhs2->getData());

echo "<br>";

echo "<h3>Menampilkan dengan Method Baru</h3>";

$mhs1->tampilkanData();
$mhs2->tampilkanData();
?>

<?php
include"Mahasiswa.php";
$mahasiswaTI = new Mahasiswa();
$mahasiswaTI->setData('A11.2000.00001', 'Fulan', 'Teknik
Informatika');
print_r($mahasiswaTI->getData());
?>

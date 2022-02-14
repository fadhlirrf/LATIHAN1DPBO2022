<?php
include "daftartim.php";

$tim1 = new DaftarTim();
$tim1->setTahun(1980);
$tim1->setNama("Persitra Cikutra");
$tim1->setAsal("Cikutra");
$tim1->setPemain(20);

$tim2 = new DaftarTim(1990, "Persicon Kircon", "Ilmu Kircon", 21);

echo "Tahun :". $tim1->getTahun() ."<br>";
echo "Nama Tim:". $tim1->getNama() ."<br>";
echo "Asal Tim :". $tim1->getAsal() ."<br>";
echo "Jumlah Pemain :". $tim1->getPemain() ."<br>";

echo "---------------------------" ."<br>";

echo "Tahun :". $tim2->getTahun() ."<br>";
echo "Nama Tim:". $tim2->getNama() ."<br>";
echo "Asal Tim :". $tim2->getAsal() ."<br>";
echo "Jumlah Pemain :". $tim2->getPemain() ."<br>";

?>
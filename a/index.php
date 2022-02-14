<?php
include "daftarmhs.php";

$mhs1 = new DaftarMhs();
$mhs1->setNIM(1903907);
$mhs1->setNama("Fadhlirrahman K");
$mhs1->setProdi("Ilmu Komputer");
$mhs1->setSemester(4);

$mhs2 = new DaftarMhs(1903906, "Anang Daring", "Ilmu Komputer", 2);

echo "NIM :". $mhs1->getNIM() ."<br>";
echo "Nama :". $mhs1->getNama() ."<br>";
echo "ProgramStudi :". $mhs1->getProdi() ."<br>";
echo "Semester :". $mhs1->getSemester() ."<br>";

echo "---------------------------" ."<br>";

echo "NIM :". $mhs2->getNIM() ."<br>";
echo "Nama :". $mhs2->getNama() ."<br>";
echo "ProgramStudi :". $mhs2->getProdi() ."<br>";
echo "Semester :". $mhs2->getSemester() ."<br>";

?>
<?php
include 'kendaraan.php';
include 'genap.php';
include 'hewan.php';
include 'cek_angka.php';

echo "<h2>1. Jenis Kendaraan</h2>";
jenisKendaraan(4);

echo "<h2>2. Bilangan Genap 2-10</h2>";
cetakGenap();

echo "<h2>3. Daftar Hewan</h2>";
tampilkanHewan();

echo "<h2>4. Cek Genap/Ganjil</h2>";
cekGenapGanjil(7);
?>

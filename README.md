Auto Table

Adalah class yang bisa digunakan untuk menampilkan tabel dari database secara langsung
yahh intinya menampilkan data dengan gampang

cara pake nya tinggal include 'tabel.php' dan panggil class nya seperti dibawah

<?php
require_once 'tabel.php';

$tabel = new table;
$tabel->query("select * from tabel_user");
$tabel->fetch();
echo $tabel->tampilkan();

//print_r($tabel->fetch());
?>

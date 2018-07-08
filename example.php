<?php
require_once 'tabel.php';

$tabel = new table;
$tabel->query("select * from tabel_user");
$tabel->fetch();
echo $tabel->tampilkan();

//print_r($tabel->fetch());
?>
Auto Table

Adalah class yang bisa digunakan untuk menampilkan tabel dari database secara langsung
yahh intinya menampilkan data dengan gampang

cara pake nya tinggal include 'tabel.php' dan panggil class nya seperti dibawah


$tabel = new table;<br>
$tabel->query("select * from tabel_user");<br>
$tabel->fetch();<br>
echo $tabel->tampilkan();<br>
<br>
//print_r($tabel->fetch());

<?php
require_once 'tabel.php';

$tabel = new table;
$tabel->query("select * from tabel_user");

foreach($tabel->fetch() as $data){
	$records[] = "
					<td>".$data['User']."</td>
					<td>".$data['Email']."</td>
					<td>".$data['Nama']."</td>
					<td>".$data['Jenis Kelamin']."</td>
					<td>".$data['Alamat']."</td>
					<td>".$data['No _HP']."</td>
				";
}
$hasil = implode("</tr><tr>",$records);

echo "<table border='1px'>
		<thead>
			<tr>
				<th>User</th>
				<th>Email</th>
				<th>Nama</th>
				<th>Jenis Kelamin</th>
				<th>Alamat</th>
				<th>No _HP</th>
			</tr>
		</thead>
		<tbody>
			<tr>
			".$hasil."
			</tr>
		</tbody>
	</table>";

?>
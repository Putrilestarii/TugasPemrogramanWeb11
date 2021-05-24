<h2>List Siswa</h2>
<form method="post" action="report.php">
<table border="1">
	<tr><th>NO</th><th>NAMA</th><th>KELAS</th><th>ALAMAT</th></tr>
	<?php
	include 'koneksi.php';
	$siswa = mysqli_query($koneksi, "SELECT * from tb_siswa");
	$no=1;
	foreach ($siswa as $row) {
			echo "<tr>
			<td>$no</td>
			<td>".$row['nama']."</td>
			<td>".$row['kelas']."</td>
			<td>".$row['alamat']."</td>
			</tr>";
		$no++;
	}
	?>
</table>
<tr><td colspan="2"><button type="submit" value="cetak">CETAK</button></td></tr>
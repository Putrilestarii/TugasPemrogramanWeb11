<?php
include 'koneksi.php';
// menyimpan data ke dalam variabel
$nama		= $_POST['nama'];
$kelas		= $_POST['kelas'];
$alamat		= $_POST['alamat'];

// query SQL untuk insert data
$query="INSERT INTO tb_siswa SET nama='$nama', kelas='$kelas', alamat='$alamat'";
mysqli_query($koneksi, $query);

// mengalihkan ke halaman index.php
header("location:listsiswa.php");
?>
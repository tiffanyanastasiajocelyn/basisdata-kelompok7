<?php
include("koneksi.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $nama_makanan = $_POST['nama_makanan'];
    $kalori = $_POST['kalori'];
    $tanggal = $_POST['tanggal'];

    $query = pg_query("UPDATE form_makanan SET nama_makanan='$nama_makanan', kalori='$kalori', tanggal='$tanggal' WHERE id=$id");

    if ($query==TRUE) {
      header('Location: history.php?status=sukses');
    } else {
        header('Location: history.php?status=gagal');
    }
} else {
	die("Akses dilarang...");
}
?>
<?php
include("koneksi.php");
// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['submit'])){

	// ambil data dari formulir
	$nama_makanan = $_POST['nama_makanan'];
	$kalori = $_POST['kalori'];
	$tanggal = $_POST['tanggal'];

	// buat query
    $query = pg_query("INSERT INTO form_makanan (nama_makanan, kalori, tanggal) VALUES ('$nama_makanan', '$kalori', '$tanggal')");

	// apakah query simpan berhasil?
	if( $query==TRUE ) {
		// kalau berhasil alihkan ke halaman index.php dengan status=sukses
		header('Location: history.php?status=sukses');
	} else {
		// kalau gagal alihkan ke halaman indek.ph dengan status=gagal
		header('Location: history.php?status=gagal');
	}


} else {
	die("Akses dilarang...");
}
?>

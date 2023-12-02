<?php
include("koneksi.php");
if( isset($_GET['id']) ){

    $id=$_GET['id'];

    $query=pg_query("DELETE FROM form_makanan WHERE id=$id");

    if($query){
        header('Location: history.php');
    } else {
        die("gagal menghapus...");
    }
}
    else {
        die("akses dilarang...");
    }
    
?>
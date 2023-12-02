<?php
$conn=pg_connect('host=localhost dbname=kalori user=postgres password=998899Gbu.');
if( !$conn ){
    die("Gagal terhubung dengan database: " . pg_connect_error());
}


<?php
include("koneksi.php");

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = pg_query("SELECT * FROM form_makanan WHERE id = $id");
    $user = pg_fetch_array($query);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit your food and beverages</title>
</head>

<body>

  <form action="prosesedit.php" method="POST">
    <fieldset>
      <p>
        <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
      </p>
      <p>
        <label for="nama makanan">Kamu makan apa nih?</label>
        <input type="text" name="nama_makanan" value="<?php echo $user['nama_makanan']; ?>">
      </p>
      <p>
        <label for="kalori">Berpa kalorinya?</label>
        <input type="number" name="kalori" value="<?php echo $user['kalori']; ?>">
      </p>
      <p>
        <label for="tanggal">Makannya kapan?</label>
        <input type="date" name="tanggal" value="<?php echo $user['tanggal']; ?>">
      </p>
      <p>
        <input type="submit" value="Simpan Perubahan" name="simpan_perubahan" />
      </p>
    </fieldset>
  </form>
</body>
</html>
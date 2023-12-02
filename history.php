<?php
require 'koneksi.php';?>


<!DOCTYPE html>
<html>
<head>
	<title>Yuk liat historymu!</title>
	<link rel="stylesheet" href="history.css">
</head>

<?php if(isset($_GET['status'])): ?>
	<p>
		<?php
			if($_GET['status'] == 'sukses'){
				echo "Data berhasil diupdate";
			} else {
				echo "Update data gagal!";
			}
		?>
	</p>
	<?php endif; ?>

<body>
	<header>
        <nav>
            <h1 class="logo">
                <a href="index.php">KallBox</a>
            </h1>
            <ul class="menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="kalori.php">KallBox</a></li>
                <li><a href="history.php">History</a></li>
            </ul>            
            <div class="button-profile">
                <a onclick="toggleMenu()">
                    <img src="image/pp.png" width="60px">
                </a>
            </div>
            <div class="sub-menu-nav" id="subMenu">
                <div class="sub-menu">
                    <div class="user-info">
                        <img src="image/pp.png">
                        <h2>Profile</h2>
                    </div>
                    <hr>
                    <a href="history.php">My History</a><br><br><br><br><br><br><br><hr>
                    <a href="login.html">Sign Out</a>
                </div>
            </div>
        </nav>
        <script>
            let subMenu = document.getElementById("subMenu");

            function toggleMenu(){
                subMenu.classList.toggle("open-menu");
            }
        </script>
	</header>
	<nav>
		<a href="kalori.php" class="add"><img src="image/add.png"></a>
	</nav>

	<br>

	<table border="1">
	<thead>
		<tr>
			<th>id</th>
			<th>Makanan</th>
			<th>Kalori</th>
			<th>Tanggal</th>
			<th></th>
		</tr>
	</thead>
	<tbody>

		<?php
		$query = pg_query("SELECT * FROM form_makanan");


		while($user = pg_fetch_array($query)){
			echo "<tr>";

			echo "<td>".$user['id']."</td>";
			echo "<td>".$user['nama_makanan']."</td>";
			echo "<td>".$user['kalori']."</td>";
			echo "<td>".$user['tanggal']."</td>";

			echo "<td>";
			echo "<a href='hapus.php?id=".$user['id']."'>Delete      </a>";
			echo "<a href='edit.php?id=".$user['id']."'>Edit</a>";
			echo "</td>";


			echo "</tr>";

			}


		?>

	</tbody>
	</table>

	<div class="footer">
        <a href="index.php">
            <img class="tombol-gohome" src="image/Go Home.png" height="18px">
        </a>
    </div>
	</body>
</html>

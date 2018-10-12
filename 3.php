<?php
$konek = mysqli_connect("localhost", "root", "", "d_modul6");
if ($konek->connect_error) {
    die("Connection failed: " . $konek->connect_error);
}
session_start();
	$nim = $_SESSION['nim'];
	$pass = $_SESSION['pass'];
	$hasil = mysqli_query($konek, "SELECT * FROM regis WHERE Nim = '$nim' AND Password = '$pass' ");
	$row = mysqli_fetch_row($hasil);
echo "Nim : ";
	printf("%s",$row['0']);
echo "<br>";
echo "Nama : ";
	printf("%s",$row['1']);
echo "<br>";
echo "Kelas : ";
	printf("%s",$row['2']);
echo "<br>";
echo "Jenis Kelamin : ";
	printf("%s",$row['3']);
echo "<br>";
echo "Hobi : ";
	printf("%s",$row['4']);
echo "<br>";
echo "Fakultas : ";
	printf("%s",$row['5']);
echo "<br>";
echo "Alamat : ";
	printf("%s",$row['6']);
echo "<br>";
?>
	<a href="1.php">REGISTER</a>

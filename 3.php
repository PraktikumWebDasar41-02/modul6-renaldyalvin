<?php
$konek = mysqli_connect("localhost", "root", "", "d_modul6");
if ($konek->connect_error) {
    die("Connection failed: " . $konek->connect_error);
}
session_start();
	$nim = $_SESSION['nim'];
	$pass = $_SESSION['pass'];
	$hasil = mysqli_query($konek, "SELECT * FROM regis WHERE Nim = '$nim' AND Password = '$pass' ");
	$row = mysqli_fetch_array($hasil);
echo "Nama : ";
	printf("%s",$row['Nama']);
echo "<br>";
echo "Nim : ";
	printf("%s",$row['Nim']);
echo "<br>";
echo "Kelas : ";
	printf("%s",$row['Kelas']);
echo "<br>";
echo "Jenis Kelamin : ";
	printf("%s",$row['Jeniskelamin']);
echo "<br>";
echo "Hobi : ";
	printf("%s",$row['Hobi']);
echo "<br>";
echo "Fakultas : ";
	printf("%s",$row['Fakultas']);
echo "<br>";
echo "Alamat : ";
	printf("%s",$row['Alamat']);
echo "<br>";
?>
	<a href="1.php">REGISTER</a>

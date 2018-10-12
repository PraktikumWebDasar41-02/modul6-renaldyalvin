<?php
	$konek = mysqli_connect("localhost", "root", "", "d_modul6");
if ($konek->connect_error) {
    die("Connection failed: " . $konek->connect_error);
}
?>
<form method="post" action="">
	Nim : <input type="text" name="nim"><br>
	Password : <input type="password" name="pass"><br>
	<input type="submit" name="submit" value="Login">
<a href="1.php">Register</a>
</form>

<?php
	if (isset($_POST['submit'])) {
		$nim = $_POST['nim'];
		$pass = $_POST['pass'];
		$hasil = mysqli_query($konek, "SELECT * FROM regis WHERE Nim = '$nim' AND Password = '$pass' ");

	while ($row=mysqli_fetch_row($hasil)){
		session_start();
		$_SESSION['nim'] = $row['0'];
		$_SESSION['pass'] = $row['1'];
		header("Location: 3.php");
		}
		echo "TIdak sesuai!!";
	}	

?>
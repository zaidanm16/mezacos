<?php
include "konfig.php";
$nama = $_POST['nama'];
$username = $_POST['username'];
$email = $_POST['email'];
$hp = $_POST['hp'];
$passwd = md5($_POST['passwd']);

$query = mysqli_query($koneksi, "INSERT INTO users(nama, username, email, hp, password) VALUES('$nama','$username','$email','$hp','$passwd')");
header("location: ../login");

?>
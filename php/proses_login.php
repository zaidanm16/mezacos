<?php
$username = $_POST['username'];
$passwd     = md5($_POST['passwd']);

include 'konfig.php';

$user = mysqli_query($koneksi, "select * from users where username='$username' and password='$passwd'");
$chek = mysqli_num_rows($user);
if($chek>0)
{
  session_start();
  $row = mysqli_fetch_array($user);
  $_SESSION['nama'] = $row['nama'];
  header("location: ../id/");
}else 
{
  header("location: ../login");
}
?>
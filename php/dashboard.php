<?php
session_start();
if($_SESSION['nama']=='')
{
  header("location:../login");
}
?>

Selamat Datang Users <?php echo $_SESSION['nama']?>

<a href="logout.php">Logout</a>
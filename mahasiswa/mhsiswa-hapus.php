<?php 
include ('./mhsiswa-config.php');
$data=mysqli_query($mysqli,"DELETE FROM mahasiswa WHERE npm='".$_GET["npm"]."'");
header("location:mhsiswa.php");
?>
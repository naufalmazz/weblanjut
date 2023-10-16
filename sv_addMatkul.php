<?php
//memanggil file pustaka fungsi
require "fungsi.php";

//memindahkan data kiriman dari form ke var biasa
$code=$_POST["code"];
$idcode = $_POST["id"];
$idmatkul = $code.".".$idcode;
$nama=$_POST["nama"];
$sks=$_POST["sks"];
$jenis=$_POST["jenis"];
$semester=$_POST["semester"];
$uploadOk=1;

//membuat query
$sql="insert into matkul values('$idmatkul','$nama','$sks','$jenis','$semester')";
mysqli_query($koneksi,$sql) or die(mysqli_error($koneksi));
header("location:updateMatkul.php");
?>
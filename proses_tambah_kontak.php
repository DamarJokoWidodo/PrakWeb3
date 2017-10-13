<?php //filename:proses_tambah_kategori.php

include("koneksi.php");

$nama = mysqli_real_escape_string($db, $_POST['nama']);
$phone = mysqli_real_escape_string($db, $_POST['phone']);
$email = mysqli_real_escape_string($db, $_POST['email']);
$ket = mysqli_real_escape_string($db, $_POST['ket']);
$query = "INSERT INTO kontak (nama,phone,email) VALUES ('$_POST[nama]','$_POST[phone]','$_POST[email]','$_POST[ket]')";

mysqli_query($db,$query);

header('Location: index.php');
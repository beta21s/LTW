<?php

require 'ketnoi.php';

$ht = $_POST['HT'];
$ns = $_POST['NS'];
$lop = $_POST['LOP'];
// Ảnh đại diện
$path = "upload/" . basename($_FILES["ANH"]["name"]);
move_uploaded_file(
    $_FILES["ANH"]["tmp_name"],
    $path);

$sql = "INSERT INTO `sinh_vien`(`ho_ten`, `ngay_sinh`, `avata`, `id_lop`) VALUES ('$ht', '$ns', '$path', '$lop')";

$ketnoi->query($sql);

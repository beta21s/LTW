<?php
require 'ketnoi.php';
$anh = "upload/" . basename($_FILES["ANH"]["name"]);
if(isset($_POST["HT"])) {
    move_uploaded_file($_FILES["ANH"]["tmp_name"], $anh);
    $hoten = $_POST['HT'];
    $lop = $_POST['LOP'];
    $ns = $_POST['NS'];

    $sql ="INSERT INTO `sinh_vien`(`ho_ten`, `ngay_sinh`, `avata`, `id_lop`) VALUES ( '$hoten', '$ns', '$anh', '$lop')";

    $ketnoi->query($sql);
}
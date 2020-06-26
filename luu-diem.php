<?php
require 'ketnoi.php';

$lt_mang = $_POST['lt'];
$th_mang = $_POST['th'];
$id_mang = $_POST['id_diem'];

for ($i=0; $i<count($lt_mang);$i++){
    $lt = $lt_mang[$i];
    $th = $th_mang[$i];
    $id = $id_mang[$i];
    $sql = "UPDATE diem SET ly_thuyet='$lt',thuc_hanh='$th' WHERE id_diem='$id'";
    $ketnoi->query($sql);
}

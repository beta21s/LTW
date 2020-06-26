<?php
    session_start();
    if(!isset($_SESSION['da_dang_nhap'])){
        header("Location: login.php");
    }
?>


<h1>Đây là trang quản trị hệ thống</h1>
<a href="dangxuat.php">Đăng xuất</a>
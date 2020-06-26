<?php
session_start();
if(isset($_SESSION['da_dang_nhap'])){
    unset($_SESSION['da_dang_nhap']);
    header('Location: login.php');
}

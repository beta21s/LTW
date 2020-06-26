<?php
    session_start();

    if(isset($_POST['tendn'])){
        $tendn = $_POST['tendn'];
        $pass = $_POST['pass'];



        if($tendn == "admin" && $pass=='12345'){
             $_SESSION['da_dang_nhap'] = 1;
             $_SESSION['tendn'] = $tendn;
             echo "Đăng nhập thành công";
             header("Location: index.php");
        }else{
            echo "Đăng nhập không thành công";
        }

    }

?>

<form action="login.php" method="post">
    <label for="">Tên đăng nhập</label>
    <br>
    <input type="text" name="tendn">
    <br>
    <label for="">Mật khẩu</label>
    <br>
    <input type="password" name="pass">
    <br>
    <input type="submit" value="Đăng nhập">
</form>
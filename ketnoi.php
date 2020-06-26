<?php
    $ketnoi = new mysqli(
        'localhost',
        'root',
        '',
        'qlsv',
        3308);

    if($ketnoi->connect_error == true){
        echo "Kết nối không thành công";
    }
# Thêm dòng này!

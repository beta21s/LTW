<form action="tailen.php" method="post" enctype="multipart/form-data">
    <label for="">Họ tên</label>
    <input type="text" name="HT" required>
    <br><br>

    <label for="">Ngày sinh</label>
    <input type="date" name="NS" required>
    <br><br>

    <label for="">Ảnh đại diện</label>
    <input type="file" name="ANH">
    <br><br>
    
    <label for="">Lớp</label>
    <select name="LOP" id="">
        <option value="1">1CTT19A2</option>
    </select>
    <br><br>

    <input type="submit" name="Lưu">
</form>
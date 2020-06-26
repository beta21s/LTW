<?php
require 'ketnoi.php';
$sql = "SELECT `id_lop`, `ten_lop` FROM lop";
$data = $ketnoi->query($sql);

?>
<form action="them.php" method="post" enctype="multipart/form-data">
    <label for="">HỌ TÊN</label>
    <input onblur="kiemtraHT()" type="text" name="HT" id="HT" required>
    <p id="loiHT" style="color: red;"></p>
    <br>

    <label for="">NGÀY SINH</label>
    <input onblur="kiemtraHT()" type="date" name="NS" id="NS" required>
    <p id="loiNS" style="color: red;"></p>
    <br>

    <label for="">ẢNH</label>
    <input type="file" name="ANH" required>
    <br>
    <br>

    <label for="">LỚP</label>
    <select name="LOP" id="">
        <?php while ($row = $data->fetch_assoc()) { ?>
            <option value="<?php echo $row['id_lop'] ?>">
                <?php echo $row['ten_lop'] ?>
            </option>
        <?php } ?>
    </select>

    <br>
    <br>
    <input disabled id="them" type="submit" value="thêm">

</form>

<script>
    function kiemtraHT() {
        var khongLoi = 0;
        // Kiểm tra họ tên
        var ht = document.getElementById('HT').value;
        ht = ht.trim();
        var manght = ht.split(' ');
        if(manght.length < 2){
            khongLoi = 1;
            document.getElementById('loiHT').innerHTML = "Họ tên có ít nhất 2 từ";

        }else{
            khongLoi = 0;
            document.getElementById('loiHT').innerHTML = "";
        }

        // Kiểm tra ngày sinh
        var ns = document.getElementById('NS').value;

        var nam = ns.split('-')[0];
        var d = new Date();
        var namHT = (new Date()).getFullYear();
        var tuoi = (nam - namHT) * -1;

        if(ns.length > 0){
            if(tuoi < 19){
                khongLoi = 1;
                document.getElementById('loiNS').innerHTML = "Ít nhất 19 tuôit";
            }else {
                khongLoi = 0;
                document.getElementById('loiNS').innerHTML = "";
            }
        }else{
            khongLoi = 1;
            document.getElementById('loiNS').innerHTML = "Vui lòng chọn ngày sinh";
        }


        if(khongLoi ==1){
            document.getElementById("them").disabled = true;
        }else {
            document.getElementById("them").disabled = false;
        }

    }
</script>
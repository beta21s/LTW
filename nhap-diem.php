<?php
require 'ketnoi.php';
$sql = "SELECT * FROM diem, hoc_phan WHERE diem.id_hoc_phan=hoc_phan.id_hoc_phan";
$data = $ketnoi->query($sql);
?>

<form method="post" action="luu-diem.php">
<table>
    <tr>
        <td>MÃ HP</td>
        <td>TÊN HỌC PHẦN</td>
        <td>ĐIỂM LT</td>
        <td>ĐIỂM TH</td>
    </tr>
    <?php
    while ($row = $data->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $row['ma_hoc_phan']; ?></td>
            <td><?php echo $row['ten_hoc_phan']; ?></td>
            <td>
                <input name="id_diem[]" type="hidden" value="<?php echo $row['id_diem']; ?>">
                <input name="lt[]" type="text" value="<?php echo $row['ly_thuyet']; ?>"
            </td>
            <td>
                <input name="th[]" type="text" value="<?php echo $row['thuc_hanh']; ?>">
            </td>
        </tr>
    <?php } ?>
</table>
    <input type="submit" value="Lưu điểm">
</form>
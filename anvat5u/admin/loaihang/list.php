<link rel="stylesheet" href="../css/loaihang.css">
<h1>DANH SÁCH DANH MỤC</h1>
<div class="select">
    <input type="button" value="Chọn tất cả">
    <input type="button" value="Bỏ chọn tất cả">
    <input type="button" value="Xóa các mục đã chọn">
    <a href="index.php?act=adddm"><input type="button" value="Nhập thêm"></a>
</div>
<table class="list-danh-muc">
    <tr>
        <th></th>
        <th>Mã loại</th>
        <th>Tên loại</th>
        <th></th>
    </tr>
    <?php
    foreach ($listdm as $loaihang) {
        extract($loaihang);
        $deldm = "index.php?act=deldm&ma_LoaiHang=" . $maloaihang;
        $suadm = "index.php?act=suadm&ma_LoaiHang=" . $maloaihang;

        echo '  <tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td>' . $ma_loai . '</td>
                        <td>' . $ten_loai . '</td>
                        <td><a href="' . $suadm . '"><input type="button" value="Sửa"></a> | <a href="' . $deldm . '"><input type="button" value="Xóa"></a></td>
                    </tr> ';
    }
    ?>
</table>
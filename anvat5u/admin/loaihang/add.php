<link rel="stylesheet" href="../css/loaihang.css">
<?php
foreach ($listloaihang as $loaihang) {
    extract($loaihang);
}
?>
<div class="add-loaihang">
    <h1>THÊM MỚI LOẠI HÀNG</h1>
    <div class="form">
        <form action="index.php?act=addlh" method="post">
            <p>Mã Loại Hàng</p>
            <input type="text" class="padding" name="maloai" id="" width="170px" value=<?= $ma_LoaiHang + 1 ?> readonly><br>
            <p>Tên Loại Hàng</p>
            <input type="text" class="padding" name="tenloaihang" id="" width="170px"><br>
            <p>Số Thứ Tự</p>
            <input type="text" class="padding" name="sothutu" id="" width="170px" value=<?= $so_thu_tu + 1 ?> readonly><br>
            <p>Trạng Thái</p>
            <input type="text" class="padding" name="trangthai" placeholder="0 là còn hàng, 1 là hết hàng" id="" width="170px"><br>
            <input type="submit" value="Thêm mới" class="button" name="themmoi">
            <input type="reset" value="Nhập lại" class="button">
        </form>
        <?php
        if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
        ?>
    </div>
    <div class="list">
        <table class="list-danh-muc">
            <tr>
                <th></th>
                <th>Mã loại</th>
                <th>STT</th>
                <th>Tên loại</th>
                <th>Trạng thái</th>
                <th></th>
            </tr>
            <?php
            $i = 0;
            foreach ($listloaihang as $loaihang) {
                extract($loaihang);
                $i++;
                if ($trang_thai == 1) {
                    $trang_thai = "Đã Hết Hàng !";
                } else {
                    $trang_thai = "Còn Hàng!!";
                }
                $deldm = "index.php?act=deldm&ma_loaihang=" . $ma_LoaiHang;
                $suadm = "index.php?act=suadm&ma_loaihang=" . $ma_LoaiHang;

                echo '  <tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td>' . $ma_LoaiHang . '</td>
                                    <td>' . $so_thu_tu . '</td>
                                    <td>' . $ten_loaihang . '</td>
                                    <td>' . $trang_thai . '</td>
                                    <td><a href="' . $suadm . '"><input type="button" value="Sửa"></a> | <a href="' . $deldm . '"><input type="button" value="Xóa"></a></td>
                                </tr> ';
            }
            ?>
        </table>
    </div>
</div>
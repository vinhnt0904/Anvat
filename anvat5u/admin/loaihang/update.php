<link rel="stylesheet" href="../css/loaihang.css">

<?php
if (is_array($loaihang)) {
    extract($loaihang);
}
?>
<div class="center">
    <form action="index.php?act=updatedm" method="post">
        <h1>CẬP NHẬT HÀNG HÓA</h1>
        <p>Mã Loại Hàng</p>
        <input type="text" name="maloai" id="" width="150px" value=<?= $ma_LoaiHang ?> readonly><br>
        <p>Tên Loại Hàng</p>
        <input type="text" name="tenloaihang" id="" width="150px" value="<?= $ten_loaihang ?>"><br>
        <p>Số Thứ Tự</p>
        <input type="text" name="sothutu" id="" width="150px" value=<?= $so_thu_tu ?>><br>
        <p>Trạng Thái</p>
        <input type="text" name="trangthai" placeholder="0 là còn hàng, 1 là hết hàng" id="" width="150px"><br>
        <input type="submit" value="Cập nhật" class="button" name="capnhat">
        <input type="reset" value="Nhập lại" class="button">
        <div><a href="index.php?act=listdm">Danh Sách</a></div>
    </form>
    <?php
    if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
    ?>
</div>
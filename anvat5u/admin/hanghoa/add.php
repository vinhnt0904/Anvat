<link rel="stylesheet" href="../css/hoanghoa.css">
<div class="add-hanghoa">
    <h1>THÊM MỚI SẢN PHẨM</h1>
    <div class="form">
        <form action="index.php?act=addhh" method="post" enctype="multipart/form-data">
            <p>Tên Loại Hàng</p>
            <select name="iddm" id="" class="padding">
                <?php
                foreach ($listloaihang as $lh) {
                    extract($lh);
                    echo '<option value="' . $ma_LoaiHang . '">' . $ten_loaihang . '</option>';
                }
                ?>
            </select>
            <p>Mã Hàng Hóa</p>

            <?php
            foreach ($listhanghoa as $hh) {
                extract($hh);
            }
            ?>
            <input type="text" name="mahanghoa" class="padding" id="" value="<?= $ma_HangHoa + 1 ?>"><br>
            <p>Tên Hàng Hóa</p>
            <input type="text" name="tenhanghoa" class="padding" id=""><br>
            <p>Giá Hàng Hóa</p>
            <input type="text" name="giahanghoa" class="padding" id=""><br>
            <p>Ngày Nhập</p>
            <input type="date" name="ngaynhap" class="padding" id=""><br>
            <p>Trạng thái</p>
            <input type="number" name="trangthai" class="padding" placeholder="0 là còn hàng, 1 là hết hàng" id="">
            <p>Hình ảnh Hàng Hóa</p>
            <input type="file" name="hinh" id="">
            <p>Mô tả</p>
            <textarea name="mota" id="" cols="22" rows="10"></textarea><br>
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
                <th>Mã Sp</th>
                <th>Tên Sp</th>
                <th>Giá Sp</th>
                <th>Hình ảnh Sp</th>
                <th>Ngày nhập</th>
                <th>Trạng thái</th>
                <th>Mô tả Sp</th>
                <th>Mã loại</th>
                <th>Hành động</th>
            </tr>
            <?php
            $dem = 0;
            foreach ($listhanghoa as $hanghoa) {
                extract($hanghoa);
                $dem += 1;
                $delsp = "index.php?act=delsp&ma_HangHoa=" . $ma_HangHoa;
                $suasp = "index.php?act=suasp&ma_HangHoa=" . $ma_HangHoa;
                $hinhpath = "../images/" . $hinh;
                if (is_file($hinhpath)) {
                    $hinhsp = "<img src='" . $hinhpath . "' height='50px'>";
                } else {
                    $hinhsp = "no img";
                }
                if ($trang_thai == 1) {
                    $trang_thai_text = "Đã Hết Hàng !";
                } else {
                    $trang_thai_text = "Còn Hàng!!";
                }
                echo '  <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>' . $ma_HangHoa . '</td>
                                <td>' . $ten_hanghoa . '</td>
                                <td>' . $don_gia . '</td>
                                <td>' . $hinhsp . '</td>
                                <td>' . $ngay_nhap . '</td>
                                <td>' . $trang_thai_text . '</td>
                                <td>' . $mo_ta . '</td>
                                <td>' . $ma_loai . '</td>
                                <td class="action"><a href="' . $suasp . '"><input type="button" value="Sửa"></a> | <a href="' . $delsp . '"><input type="button" value="Xóa"></a></td>
                            </tr> ';
            }

            ?>
        </table>
    </div>
</div>
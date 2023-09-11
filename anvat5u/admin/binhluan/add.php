<link rel="stylesheet" href="../css/binhluan.css">
<div class="add-hanghoa">
    <h1>THÊM MỚI SẢN PHẨM</h1>
    <div class="form">
        <form action="index.php?act=dsbl" method="post" class="locsanpham">
            <input type="text" name="keyword">
            <select name="iddm" id="">
                <option value="0" selected>Tất cả</option>
                <?php
                foreach ($listloaihang as $dm) {
                    extract($dm);
                    echo '<option value="' . $ma_LoaiHang . '">' . $ten_loaihang . '</option>';
                }
                ?>
            </select>
            <input type="submit" name="timkiemsp" value="Tìm kiếm">
        </form>
    </div>
    <div class="list">
        <table class="list-danh-muc">
            <tr>
                <th></th>
                <th>Mã bình luận</th>
                <th>Tên người Bl</th>
                <th>Tên Sp</th>
                <th>Nội dung bình luận</th>
                <th>Hành động</th>
            </tr>
            <?php
            $dem = 0;
            foreach ($listbinhluan as $hanghoa) {
                extract($hanghoa);
                $dem += 1;
                $delsp = "index.php?act=delbl&ma_BinhLuan=" . $ma_BinhLuan;
                $suasp = "index.php?act=suabl&ma_BinhLuan=" . $ma_BinhLuan;
                echo '  <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>' . $ma_BinhLuan . '</td>
                                <td>' . $ho_ten . '</td>
                                <td>' . $ten_hanghoa . '</td>
                                <td>' . $noi_dung . '</td>
                                <td><a href="' . $suasp . '"><input type="button" value="Sửa"></a> | <a href="' . $delsp . '"><input type="button" value="Xóa"></a></td>
                            </tr> ';
            }

            ?>
        </table>
    </div>
</div>
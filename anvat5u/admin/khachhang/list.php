<link rel="stylesheet" href="../css/khachhang.css">
<div class="add-hanghoa">
    <h1 class="title" style="text-align:center">CẬP NHẬT TÀI KHOẢN</h1>
    <div class="form">
        <?php

        if (isset($khachhang)) {
            extract($khachhang);

        ?>
            <form action="index.php?act=updatetk" id="thanhvien" method="post">
                <p>
                    <label>Họ Và Tên:</label><br>
                    <input type="text" name="hoten" value="<?= $ho_ten ?>">
                </p>
                <p>
                    <label>Tên đăng nhập:</label><br>
                    <input type="text" name="user" value="<?= $ten_dang_nhap ?>">
                </p>
                <p>
                    <label>Email:</label><br>
                    <input type="text" name="email" value="<?= $email ?>">
                </p>
                <p>
                    <label>Số điện thoại:</label><br>
                    <input type="text" name="sdt" value="<?= $mat_khau ?>">
                </p>
                <p>
                    <label>Mật Khẩu:</label><br>
                    <input type="text" name="pass" value="<?= $mat_khau ?>">
                </p>
                <p>
                    <label>Vai trò:</label><br>
                    <input type="number" name="vaitro" value="<?= $vai_tro ?>">
                </p>
                <input type="hidden" name="id" value="<?= $ma_KhachHang ?>">
                <input type="submit" value="Cập nhật" class="button" name="capnhat">
                </p>
            <?php

        }
        if (isset($thongbao) && ($thongbao != "")) {
            echo $thongbao;
        }
            ?>
    </div>
    <div class="list">
        <table class="list-danh-muc">
            <tr>
                <th></th>
                <th>Mã tài khoản</th>
                <th>Họ và tên</th>
                <th>Tên đăng nhập</th>
                <th>Mật khẩu</th>
                <th>Email</th>
                <th>Sđt</th>
                <th>Kích hoạt</th>
                <th>Vai trò</th>
                <th>Hành động</th>
            </tr>
            <?php
            foreach ($listkhachhang as $khachhang) {
                extract($khachhang);
                $deltk = "index.php?act=deltk&id=" . $ma_KhachHang;
                $suatk = "index.php?act=suatk&id=" . $ma_KhachHang;

                echo '  <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>' . $ma_KhachHang . '</td>
                                <td>' . $ho_ten . '</td>
                                <td>' . $ten_dang_nhap . '</td>
                                <td>' . $mat_khau . '</td>
                                <td>' . $email . '</td>
                                <td>' . $so_dien_thoai . '</td>
                                <td>' . $kich_hoat . '</td>
                                <td>' . $vai_tro . '</td>
                                <td><a href="' . $suatk . '"><input type="button" value="Sửa"></a> | <a href="' . $deltk . '"><input type="button" value="Xóa"></a></td>
                            </tr> ';
            }
            ?>
        </table>
    </div>
    <div class="select">
        <input type="button" value="Chọn tất cả">
        <input type="button" value="Bỏ chọn tất cả">
        <input type="button" value="Xóa các mục đã chọn">
        <a href="index.php?act="><input type="button" value="Nhập thêm"></a>
    </div>
</div>
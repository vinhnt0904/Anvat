<div class="container">
    <div class="dangky">
    <?php
            if(isset($_SESSION['user'])&&(is_array($_SESSION['user']))){
                extract($_SESSION['user']);
        ?>
        <form action="index.php?act=edit_taikhoan" id="thanhvien" method="post">          
            <p>
                <label>Tên đăng nhập:</label><br>
                <input type="text" name="user" value="<?=$ten_dang_nhap?>">
            </p>
            <p>
                <label>Họ Và Tên:</label><br>
                <input type="text" name="hoten" value="<?=$ho_ten?>">
            </p>
            <p>
                <label>Email:</label><br>
                <input type="text" name="email" value="<?=$email?>">   
            </p>
            <p>
                <label>Số điện thoại:</label><br>
                <input type="text" name="sdt" value="<?=$so_dien_thoai?>">   
            </p>
            <p>
                <label>Mật Khẩu:</label><br>
                <input type="text" name="pass" value="<?=$mat_khau?>">
            </p>                     
            <p>
                <input type="hidden" name="id" value="<?=$ma_KhachHang?>">
                <input type="submit" value="Cập nhật" class="button" name="capnhat">
            </p>
            <?php
                }
                if(isset($thongbao)&&($thongbao!="")){
                    echo $thongbao;
                }
            ?>
        </form> 
    </div>
</div>
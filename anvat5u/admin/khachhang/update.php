<div class="container">
    <div class="dangnhap">
        <?php
            if(is_array($khachhang)){
                extract($khachhang);
        ?>
        <form action="index.php?act=updatetk" id="thanhvien" method="post">
            <h1 class="title">CẬP NHẬT TÀI KHOẢN</h1>
            <p>
                <label>Tên đăng nhập:</label><br>
                <input type="text" name="user" value="<?=$ten_dang_nhap?>">
            </p>
            <p>
                <label>Email:</label><br>
                <input type="text" name="email" value="<?=$email?>">   
            </p>
            <p>
                <label>Mật Khẩu:</label><br>
                <input type="text" name="pass" value="<?=$mat_khau?>">
            </p>                     
            <p>
                <label>Vai trò:</label><br>
                <input type="number" name="vaitro" value="<?=$vai_tro?>">
            </p>             
            <p>
                <input type="hidden" name="id" value="<?=$ma_kh?>">
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
<div class="container">
    <div class="dangnhap">
        <?php
            if(isset($_SESSION['user'])){
                extract($_SESSION['user']);
        ?>      
                <div class="chedouser">
                    <p>Xin chào: <?=$ho_ten?></p><br>
                    <a href="index.php?act=edit_taikhoan">Cập nhật tài khoản</a><br>
                    <?php 
                        if($vai_tro==1){
                    ?>
                    <a href="admin/index.php">Đăng nhập admin</a><br>
                    <?php
                        }
                    ?>
                    <a href="index.php?act=thoat">Thoát</a><br>
                </div>
            
        <?php
            }else{
        ?>
                <h1  style="text-align:center">ĐĂNG NHẬP TÀI KHOẢN</h1>
                <p style="text-align:center; color:red"><?php if(isset($thongbao)&&($thongbao!="")) echo $thongbao?></p>
            <form action="index.php?act=dangnhap" method="post" >
                <label for="">Tên Đăng Nhập:</label> <br>
                <input type="text" name="user" id=""> <br>
                <label for="">Mật Khẩu:</label> <br>
                <input type="text" name="pass" id=""> <br>
                <input type="submit" name="dangnhap" value="Đăng Nhập" class="button"><br>
                <a href="index.php?act=dangky" class="register">Bạn chưa có tài khoản ?</a><br>
            </form>
        <?php
            }
        ?>
    </div>
</div>
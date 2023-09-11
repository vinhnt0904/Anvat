<?php 
    foreach ($listkh as $kh) {
        
    }
?>
<div class="container">
    <div class="dangnhap">
        <form action="index.php?act=dangky" id="thanhvien" method="post">
            <h1 class="title" style="text-align:center">ĐĂNG KÝ TÀI KHOẢN</h1>
            <p style="color:red; text-align:center;">
                <?php
                global $thongbao;
                    if(isset($thongbao)&&($thongbao!="")){
                        echo $thongbao;
                    }
                ?>
            </p>
            <p>
                <label>Họ Và Tên:</label><br>
                <!-- <input type="text" name="hoten" value="<?=isset($_POST['hoten']) ? $_POST['hoten'] : false?> "> -->
                <input type="text" name="hoten" >
            </p>
            <p>
                <label>Tên đăng nhập:</label><br>
                <!-- <input type="text" name="user" value="<?=isset($_POST['user']) ? $_POST['user'] : false?> "> -->
                <input type="text" name="user" >
            </p>
            <p>
                <label>Email:</label><br>
                <!-- <input type="text" name="email" value="<?=isset($_POST['email']) ? $_POST['email'] : false?> ">    -->
                <input type="text" name="email" >   
            </p>
            <p>
                <label>Số điện thoại:</label><br>
                <!-- <input type="text" name="sdt" value="<?=isset($_POST['sdt']) ? $_POST['sdt'] : false?> ">    -->
                <input type="text" name="sdt" >   
            </p>
            <p>
                <label>Mật Khẩu:</label><br>
                <input type="text" name="pass">
            </p>           
            <p>
                <input type="submit" value="Đăng Ký" class="button" name="dangky"><br>
                <a href="index.php?act=dangnhap">Đăng nhập</a>
            </p>
            
        </form>
    </div>
</div>

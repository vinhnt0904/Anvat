<?php
    if(is_array($hanghoa)){
        extract($hanghoa);
    }
    $hinhpath ="../images/".$hinh;
    if(is_file($hinhpath)){
        $hinhsp="<img src='".$hinhpath."' height='50px'>";
    }else{
        $hinhsp="no img";
    }
?>
<div class="update-hanghoa">
    <h1>CẬP NHẬT HÀNG HÓA</h1>
    <div class="form">
        <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
            <p>Tên Loại Hàng</p>
            <select name="iddm" id="" class="padding" style="width:170px">
                    <option value="0"  selected>Tất cả</option>
                <?php
                    foreach ($listloaihang as $loaihang) {
                        extract($loaihang);
                        if($ma_LoaiHang==$ma_loai) $s="selected"; else $s="";
                        echo'<option value="'.$ma_LoaiHang.'" '.$s.'>'.$ten_loaihang.'</option>';
                    }
                ?>
            </select>
            <!-- <p>Mã sản phẩm</p>
            <input type="text" name="masp" id="" disabled><br> -->

            <p>Tên Hàng Hóa</p>
            <input type="text" name="tenhanghoa" class="padding" value="<?=$ten_hanghoa?>" id="" style="width:170px;"><br>
            <p>Giá Hàng Hóa</p>
            <input type="text" name="giahanghoa" class="padding" value="<?=$don_gia?>" id="" style="width:170px;"><br>
            <p>Ngày Nhập</p>
            <input type="date" name="ngaynhap" class="padding" value="<?=$ngay_nhap?>" id="" style="width:170px;"><br>
            <p>Trạng thái</p>
            <input type="text" name="trangthai" class="padding" value=<?=$trang_thai?> id="" style="width:170px;"><br>
            <p>Hình ảnh Hàng Hóa</p>
            <input type="file" name="hinh" id="" value="">
            <?=$hinhsp?>
            <p>Mô tả</p>
            <textarea name="mota" id="" cols="22" rows="10" value="<?=$mo_ta?>"></textarea>
            <input type="hidden" name="ma_hh" value="<?=$ma_HangHoa?>">
            <br>
            <input type="submit" value="Cập nhật" class="button" name="capnhat">
            <input type="reset" value="Nhập lại" class="button">
        </form>
            <?php
                if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
            ?>
    </div>
</div>

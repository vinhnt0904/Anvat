<h1>DANH SÁCH LOẠI HÀNG</h1>
<form action="index.php?act=listsp" method="post" class="locsanpham">
    <input type="text" name="keyword">
    <select name="iddm" id="">
        <option value="0" selected>Tất cả</option>
        <?php
            foreach ($listdm as $dm) {
                extract($dm);
                echo'<option value="'.$ma_loai.'">'.$ten_loai.'</option>';
            }
        ?>
    </select>
    <input type="submit" name="timkiemsp" value="Tìm kiếm">
</form>

<div class="select" style="margin-top:10px;">
    <a href="index.php?act=addsp" style="margin-left:423px;margin-top:10px;"><input type="button" value="Nhập thêm"></a>
</div>
<table class="list-danh-muc">
    <tr>
        <th>Đếm</th>
        <th>Mã sản phẩm</th>
        <th>Tên sản phẩm</th>
        <th>Giá sản phẩm</th>
        <th>Hình ảnh sản phẩm</th>
        <th>Mô tả sản phẩm</th>
        <th>Loại bìa</th>
        <th>Mã loại hàng</th>
        <th>Hành động</th>
    </tr>
    <?php 
        $dem=0;
        foreach ($listsp as $sanpham) {
            extract($sanpham);
            $dem+=1;
            $delsp = "index.php?act=delsp&ma_hh=".$ma_hh;
            $suasp = "index.php?act=suasp&ma_hh=".$ma_hh;
            $hinhpath ="../upload/".$hinh;
            if(is_file($hinhpath)){
                $hinhsp="<img src='".$hinhpath."' height='50px'>";
            }else{
                $hinhsp="no img";
            }
            echo '  <tr>
                        <td>'.$dem.'</td>
                        <td>'.$ma_hh.'</td>
                        <td>'.$ten_hh.'</td>
                        <td>'.$don_gia.'</td>
                        <td>'.$hinhsp.'</td>
                        <td>'.$mo_ta.'</td>
                        <td>'.$loai_bia.'</td>
                        <td>'.$ma_loaihang.'</td>       
                        <td><a href="'.$suasp.'"><input type="button" value="Sửa"></a> | <a href="'.$delsp.'"><input type="button" value="Xóa"></a></td>
                    </tr> ';
        }
    ?>
</table>

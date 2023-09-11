<link rel="stylesheet" href="../css/hddathang.css">

<table class="list-danh-muc">
    <thead>
        <tr>
            <th>STT</th>
            <th>Mã hóa đơn Chi tiết</th>
            <th>Mã sản phẩm</th>
            <th>Tên sản phẩm</th>
            <th>Giá sản phẩm</th>
            <th>Giảm giá</th>
            <th>Tổng tiền</th>
            <th>Hình ảnh</th>
            <th>Trạng thái giao hàng</th>
            <th>Hành động</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach (list_hoadonchitiet() as $item) {
            $list = json_decode($item['list_hh'], true);
            // die(print_r($list));

            if (is_array($list)) {
                foreach ($list as $i) {

                    $hang_hoa = loadone_hanghoa($i['ma_hh']);
                    extract($hang_hoa);

                    $delsp = "index.php?act=delhd&ma_hoadon=" . $item['ma_HDCT'];
                    $suasp = "index.php?act=suahd&ma_hoadon=" . $item['ma_HDCT'];
                    $hinhpath = "../images/" . $hinh;
                    if (is_file($hinhpath)) {
                        $hinhsp = "<img src='" . $hinhpath . "' height='50px'>";
                    } else {
                        $hinhsp = "no img";
                    }
        ?>

                    <tr>

                        <td><?= $item['ma_HDCT'] ?></td>

                        <td><?= $ma_HangHoa ?></td>
                        <td><?= $ten_hanghoa ?></td>
                        <td><?= $don_gia ?></td>
                        <td><?= $giam_gia ?></td>

                        <td><?= $item['tong_tien'] ?></td>
                        <td><?= $hinhsp ?></td>
                        <td><input type="number" name="trangthaigiaohang" id="" value=<?= $trang_thai ?>></td>
                        <td><?= $item['id_hddh'] ?></td>
                        <td><a href="<?= $suasp ?>"><input type="button" value="Sửa"></a> |
                            <a href="<?= $delsp ?>"><input type="button" value="Xóa"></a>
                        </td>
                    </tr>

        <?php  }
            }
            echo '<tr><td colspan="8"><hr/><td/><tr/>';
        } ?>

    </tbody>
</table>
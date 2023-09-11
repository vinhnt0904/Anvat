<link rel="stylesheet" href="../css/hddathang.css">

<table class="list-danh-muc">
    <thead>
        <tr>
            <th></th>
            <th>Mã hóa đơn ĐH</th>
            <th>Mã khách hàng</th>
            <th>Họ tên</th>
            <th>Email</th>
            <th>Địa chỉ</th>
            <th>Ngày lập hđ</th>
            <th>Trạng thái</th>
            <th>Ghi chú admin</th>
            <th>Ghi chú user</th>
            <th></th>
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

                    // $khach_hang = loadone_khachhang($i['id']);
                    // extract($khach_hang);


                    // $hoa_don_dat_hang = loadone_hoadondathang($i['ma_hddh']);
                    // extract($hoa_don_dat_hang);

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
                        <td></td>
                        <td><?= $item['id_hddh'] ?></td>

                        <!-- <td><?= $ma_KhachHang ?></td>
                        <td><?= $ho_ten ?></td> -->
                        <td><?= $don_gia ?></td>
                        <td><?= $giam_gia ?></td>

                        <!-- <td><?= $item['tong_tien'] ?></td> -->
                        <td><?= $hinhsp ?></td>
                        <!-- <td><input type="number" name="trangthaigiaohang" id="" value=<?= $trang_thai ?>></td> -->
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
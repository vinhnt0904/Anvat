<?php
function list_hanghoa()
{
    $sql = "select * from hanghoa";
    $listhh = pdo_query($sql);
    return $listhh;
}

function list_hanghoa_8item()
{
    $sql = "select * from hanghoa limit 8";
    $listhh = pdo_query($sql);
    return $listhh;
}

function loadone_hanghoa($ma_hh)
{
    $sql = "select * from hanghoa where ma_HangHoa =" . $ma_hh;
    $sp = pdo_query_one($sql);
    return $sp;
}

function list_sanpham_cungloai($ma_hh, $iddm)
{
    $sql = "select * from hanghoa where ma_loai='" . $iddm . "' and ma_HangHoa!='" . $ma_hh . "' order by rand('" . $ma_hh . "') limit 0,4";
    $listsp = pdo_query($sql);
    return $listsp;
}

function insert_hanghoa($tenhanghoa, $giahanghoa, $hinh, $ngaynhap, $trangthai, $mota, $iddm)
{
    $sql = "insert into hanghoa(ten_hanghoa,don_gia,hinh,ngay_nhap,trang_thai,mo_ta,ma_loai) values('$tenhanghoa','$giahanghoa','$hinh','$ngaynhap','$trangthai','$mota','$iddm')";
    pdo_execute($sql);
}

function list_hanghoa_admin($keyword, $iddm)
{
    $sql = "select * from hanghoa where 1";
    if ($keyword != "") {
        $sql .= " and ten_hanghoa like '%" . $keyword . "%'";
    }
    if ($iddm > 0) {
        $sql .= " and ma_loai = '" . $iddm . "'";
    }
    //nối chuỗi phải có dấu cách, nếu ko sẽ bị lỗi dính chùm cú pháp
    $sql .= " order by ma_HangHoa";
    $listsp = pdo_query($sql);
    return $listsp;
}

function list_sanpham_timkiem($keyword)
{
    $sql = "select * from hanghoa where 1";
    if ($keyword != "") {
        $sql .= " and ten_hanghoa like '%" . $keyword . "%'";
    }
    //nối chuỗi phải có dấu cách, nếu ko sẽ bị lỗi dính chùm cú pháp
    $sql .= " order by ma_HangHoa";
    $listsp = pdo_query($sql);
    return $listsp;
}

function update_hanghoa($maloaihang, $tenhanghoa, $giahanghoa, $hinhsp, $ngaynhap, $trangthai, $mota, $mahh)
{
    if ($hinhsp != "")
        $sql = "update hanghoa set ten_hanghoa='" . $tenhanghoa . "',don_gia='" . $giahanghoa . "',hinh='" . $hinhsp . "',ngay_nhap='" . $ngaynhap . "',trang_thai='" . $trangthai . "',mo_ta='" . $mota . "',ma_loai='" . $maloaihang . "' where ma_HangHoa=" . $mahh;
    else
        $sql = "update hanghoa set ten_hanghoa='" . $tenhanghoa . "',don_gia='" . $giahanghoa . "',                   ngay_nhap='" . $ngaynhap . "',trang_thai='" . $trangthai . "',mo_ta='" . $mota . "',ma_loai='" . $maloaihang . "' where ma_HangHoa=" . $mahh;
    pdo_execute($sql);
}

function delete_hanghoa($ma_HangHoa)
{
    $sql = "delete from hanghoa where ma_HangHoa=" . $ma_HangHoa;
    pdo_execute($sql);
}

function list_sanpham_danhmuc($iddm)
{
    $sql = "select * from hanghoa where ma_loai=" . $iddm . " limit 0,32";
    $listhh = pdo_query($sql);
    return $listhh;
}

<?php
    function insert_binhluan($idpro,$makh,$noidung,$ngaybinhluan){
        $sql="insert into binhluan(ma_hh,ma_kh,noi_dung,ngay_binhluan) values('$idpro','$makh','$noidung','$ngaybinhluan')";
        pdo_execute($sql);
    }

    function list_binhluan($idpro){
        $sql="select binhluan.* , khachhang.ho_ten, hanghoa.ten_hanghoa from binhluan  
            inner join hanghoa on hanghoa.ma_HangHoa = binhluan.ma_hh
            inner join khachhang on khachhang.ma_KhachHang = binhluan.ma_kh
         where 1";
        if($idpro>0){
            $sql.=" and ma_hh='".$idpro."'";
        }
        $sql.=" order by ma_BinhLuan";
        $listbl = pdo_query($sql);
        return $listbl;
    }
    
    function timkiem_binhluan_admin($idpro){
        $sql="select binhluan.* , hanghoa.ten_hanghoa from binhluan  
            inner join hanghoa on hanghoa.ma_HangHoa = binhluan.ma_hh
            inner join khachhang on khachhang.ma_KhachHang = binhluan.ma_kh
        where 1";
        if($idpro>0){
            $sql.=" and ma_hh='".$idpro."'";
        }
        $sql.=" order by ma_BinhLuan";
    }

    function delete_binhluan($id){
        $sql="delete from binhluan where ma_BinhLuan=".$id;
        pdo_execute($sql);
    }

    function loadone_binhluan($id){
        $sql = "select * from binhluan where ma_bl=".$id;
        $sp = pdo_query_one($sql);
        return $sp;
    }

    function update_binhluan($id,$noidung,$mahh,$makh){
        $sql = "update binhluan set noi_dung='".$noidung."', ma_kh='".$makh."', ma_hh='".$mahh."' where ma_bl=".$id;
        pdo_execute($sql);
    }

   
?>
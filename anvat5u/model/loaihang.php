<?php
    function list_loaihang(){
        $sql="select * from loaihang";
        $listloaihang = pdo_query($sql);
        return $listloaihang;
    }
    
    function loadone_loaihang($maLoaiHang){
        $sql = "select * from loaihang where ma_LoaiHang=".$maLoaiHang;
        $loaihang = pdo_query_one($sql);
        return $loaihang;
    }
    
    function insert_loaihang($tenloaihang,$sothutu,$trangthai){
        $sql="insert into loaihang(ten_loaihang,so_thu_tu,trang_thai) values('$tenloaihang','$sothutu','$trangthai')";
        pdo_execute($sql);
    }

    function update_loaihang($maLoaiHang,$tenloaihang,$sothutu,$trangthai){
        $sql= "update loaihang set ten_loaihang='".$tenloaihang."', so_thu_tu='".$sothutu."', trang_thai='".$trangthai."' where ma_LoaiHang=".$maLoaiHang;
        pdo_execute($sql);
    }

    function delete_loaihang($maLoaiHang){
        $sql="delete from loaihang where ma_LoaiHang=".$maLoaiHang;
        pdo_execute($sql);
    }

?>
<?php
    function list_khachhang(){
        $sql="select * from khachhang";
        $listkhachhang = pdo_query($sql);
        return $listkhachhang;
    }
    function list_khachhang_bl($makh){
        $sql="select * from khachhang where ma_KhachHang=".$makh;
        $listkhachhang = pdo_query($sql);
        return $listkhachhang;
    }
    function insert_khachhang($user,$email,$pass,$sdt,$hoten){
        $sql="insert into khachhang(ho_ten,ten_dang_nhap,email,mat_khau,so_dien_thoai) values('$hoten','$user','$email','$pass','$sdt')";
        pdo_execute($sql);
    }
    function checkuser($user,$pass){
        $sql = "select * from khachhang where ten_dang_nhap='".$user."' and mat_khau='".$pass."'";
        $kh = pdo_query_one($sql);
        return $kh;
    }
    function update_khachhang($id,$user,$pass,$email,$sdt,$hoten){
        $sql = "update khachhang set ten_dang_nhap='".$user."', mat_khau='".$pass."', email='".$email."', so_dien_thoai='".$sdt."', ho_ten='".$hoten."' where ma_KhachHang=".$id;
        pdo_execute($sql);
    }
    function delete_khachhang($id){
        $sql="delete from khachhang where ma_KhachHang=".$id;
        pdo_execute($sql);
    }
    function loadone_khachhang($id){
        $sql = "select * from khachhang where ma_KhachHang=".$id;
        $kh = pdo_query_one($sql);
        return $kh;
    }

    // function khachhang_info(){
    //     if(isset($_SESSION['user']) && !empty($_SESSION['user'])){
    //         $sql = "select * from khachhang where ten_dang_nhap = '".$_SESSION['user']['ten_dang_nhap']."'"; 
    //         $kh = pdo_query_one($sql);
    //         return $kh;

    //     }else{
    //         return false;
    //     }
    // }
    
    function check_exist_user($user)
    {
        $sql = "SELECT * FROM `khachhang` WHERE ten_dang_nhap = '$user'";
        $result = pdo_query_one($sql);
        if($result){
            return true;
        }else{
            return false;
        }
        
    }

    function check_exist_email($email)
    {
        $sql = "SELECT * FROM `khachhang` WHERE email = '$email'";
        $result = pdo_query_one($sql);
        if($result){
            return true;
        }else{
            return false;
        }
        
    }

?>
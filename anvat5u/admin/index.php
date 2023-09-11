<?php
    include "../model/pdo.php";
    include "../model/loaihang.php";
    include "../model/hanghoa.php";
    include "../model/khachhang.php";
    include "../model/hoadon.php";
    include "../model/binhluan.php";
    include "header.php";
 


    //controller
    if(isset($_GET['act'])){
        $act=$_GET['act'];
        switch($act){
                //loại hàng
            case 'addlh':
                //kiểm tra user đã click vào hay chưa
                if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                    $tenloaihang = $_POST['tenloaihang'];
                    $sothutu = $_POST['sothutu'];
                    $trangthai = $_POST['trangthai'];
                    insert_loaihang($tenloaihang,$sothutu,$trangthai);
                    $thongbao = "Thêm mới thành công!";
                }
                $listloaihang = list_loaihang();
                // include "loaihang/list.php";
                include "loaihang/add.php";
                break;

            case 'listdm':
                $listloaihang = list_loaihang();
                include "loaihang/add.php";
                break;
            
            case 'deldm':
                if(isset($_GET['ma_loaihang'])&&($_GET['ma_loaihang']>0)){                  
                    delete_loaihang($_GET['ma_loaihang']);
                }
                $listloaihang = list_loaihang();
                include "loaihang/add.php";
                break;
            
            case 'suadm':
                if(isset($_GET['ma_loaihang'])&&($_GET['ma_loaihang']>0)){ 
                    $loaihang = loadone_loaihang($_GET['ma_loaihang']);
                }
                include "loaihang/update.php";
                break;

            case 'updatedm':
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                    $maloai = $_POST['maloai'];
                    $tenloaihang = $_POST['tenloaihang'];
                    $sothutu = $_POST['sothutu'];
                    $trangthai = $_POST['trangthai'];
                    update_loaihang($maloai,$tenloaihang,$sothutu,$trangthai);
                    $thongbao = "Cập nhật thành công!";
                }
                $listloaihang = list_loaihang();
                include "loaihang/add.php";
                break;
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                //sản phẩm
            case 'addhh':
                //kiểm tra user đã click vào hay chưa
                if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                    $mahanghoa = $_POST['iddm'];
                    $tenhanghoa = $_POST['tenhanghoa'];
                    $giahanghoa = $_POST['giahanghoa'];
                    $ngaynhap = $_POST['ngaynhap'];
                    $trangthai = $_POST['trangthai'];
                    $mota = $_POST['mota'];
                    $hinh = $_FILES['hinh']['name'];
                    $target_dir = "../images/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                        //thông báo nếu upload file hình thành công
                        // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                    } else {
                        //thông báo nếu upload ko thành công
                        // echo "Sorry, there was an error uploading your file.";
                    }
                    insert_hanghoa($tenhanghoa,$giahanghoa,$hinh,$ngaynhap,$trangthai,$mota,$mahanghoa);
                    $thongbao = "Thêm mới thành công!";
                }
                $listloaihang = list_loaihang();
                $listhanghoa = list_hanghoa();
                include "hanghoa/add.php";
                break;

            case 'listhh':
                $listhh = list_hanghoa();
                include "hanghoa/add.php";
                break;
            
            case 'delsp':
                if(isset($_GET['ma_HangHoa'])&&($_GET['ma_HangHoa']>0)){                  
                    delete_hanghoa($_GET['ma_HangHoa']);
                }
                $listhanghoa = list_hanghoa();
                include "hanghoa/add.php";
                break;
            
            case 'suasp':
                if(isset($_GET['ma_HangHoa'])&&($_GET['ma_HangHoa']>0)){ 
                    $hanghoa = loadone_hanghoa($_GET['ma_HangHoa']);
                }
                $listloaihang = list_loaihang();
                $listhanghoa = list_hanghoa();
                include "hanghoa/update.php";
                break;

            case 'updatesp':
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                    $maloaihang = $_POST['iddm'];
                    $mahh = $_POST['ma_hh'];
                    $tenhanghoa = $_POST['tenhanghoa'];
                    $giahanghoa = $_POST['giahanghoa'];
                    $ngaynhap = $_POST['ngaynhap'];
                    $trangthai = $_POST['trangthai'];
                    $mota = $_POST['mota'];
                    $hinh = $_FILES['hinh']['name'];
                    $target_dir = "../images/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                        //thông báo nếu upload file hình thành công
                        // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                    } else {
                        //thông báo nếu upload ko thành công
                        // echo "Sorry, there was an error uploading your file.";
                    }
                    update_hanghoa($maloaihang,$tenhanghoa,$giahanghoa,$hinh,$ngaynhap,$trangthai,$mota,$mahh);
                    $thongbao = "Cập nhật thành công!";
                }
                $listloaihang = list_loaihang();
                $listhanghoa = list_hanghoa();
                include "hanghoa/add.php";
                break;
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                //khách hàng
            case 'dskh':
                $listkhachhang = list_khachhang();
                include "khachhang/list.php";
                break;
            case 'suatk':
                if(isset($_GET['id'])&&($_GET['id']>0)){ 
                    $id=$_GET['id'];
                    $khachhang = loadone_khachhang($id);
                }
                $listkhachhang = list_khachhang();
                include "khachhang/list.php";
                break;
            case 'updatetk':
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                    $id=$_POST['id'];
                    $user=$_POST['user'];
                    $email=$_POST['email'];
                    $pass=$_POST['pass'];
                    $sdt=$_POST['sdt'];
                    $hoten=$_POST['hoten'];
                    $vaitro=$_POST['vaitro'];
                    update_khachhang($id,$user,$pass,$email,$sdt,$hoten,$vaitro);
                }
                $listkhachhang = list_khachhang();
                include "khachhang/list.php";
                break;

            case 'deltk':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    delete_khachhang($_GET['id']);
                }
                $listkhachhang = list_khachhang();
                include "khachhang/list.php";
                break;
//////////////////////////////////////////////////////////////////////////////////////////////////////////
        //bình luận
            case 'dsbl':
                if(isset($_POST['timkiemsp'])&&($_POST['timkiemsp'])){ 
                    $keyword=$_POST['keyword'];
                    $iddm=$_POST['iddm'];
                }else{
                    $keyword='';
                    $iddm=0;
                }
                $listloaihang = list_loaihang();
                $listsp = list_hanghoa_admin($keyword,$iddm);
                $listbinhluan = list_binhluan(0);

                
                include "binhluan/add.php";
                break;   

            case 'suabl':
                if(isset($_GET['ma_bl'])&&($_GET['ma_bl']>0)){ 
                    $ma_bl=$_GET['ma_bl'];
                    $binhluan = loadone_binhluan($ma_bl);
                }
                $listbinhluan = list_binhluan(0);
                include "binhluan/update.php";
                break;
            case 'updatebl':
                if(isset($_POST['capnhatbl'])&&($_POST['capnhatbl'])){
                    $id=$_POST['id'];
                    $noidung=$_POST['noidung'];
                    $mahh=$_POST['mahh'];
                    $makh=$_POST['makh'];
                    update_binhluan($id,$noidung,$mahh,$makh);
                }
                $listbinhluan = list_binhluan(0);
                include "binhluan/add.php";
                break;

            case 'delbl':
                if(isset($_GET['ma_BinhLuan'])&&($_GET['ma_BinhLuan']>0)){                  
                    delete_binhluan($_GET['ma_BinhLuan']);
                }
                $listloaihang = list_loaihang();
                $listsp = list_hanghoa_admin("",0);
                $listbinhluan = list_binhluan(0);
                include "binhluan/add.php";
                break;
//////////////////////////////////////////////////////////////////////////////////////////////////////////
        //hóa đơn đặt hàng
        case 'dshd':
            $listdonhang = list_hoadonchitiet();
            $listkhachhang = list_khachhang();
            include "hddathang/list.php";
            break;

        case 'delhd':
            if(isset($_GET['ma_hoadon'])&&($_GET['ma_hoadon']>0)){                  
                delete_hoadonchitiet($_GET['ma_hoadon']);
            }
            $listhoadon = list_hoadonchitiet();
            include "hdchitiet/list.php";
            break;

//////////////////////////////////////////////////////////////////////////////////////////////////////////
        //hóa đơn chi tiết
        case 'dshdct':
            $listdonhang = list_hoadonchitiet();
            include "hdchitiet/list.php";
            break;

        case 'delhd':
            if(isset($_GET['ma_hoadon'])&&($_GET['ma_hoadon']>0)){                  
                delete_hoadonchitiet($_GET['ma_hoadon']);
            }
            $listhoadon = list_hoadonchitiet();
            include "hdchitiet/list.php";
            break;



            default:
                include "home.php";
            break;
        }
    }else{
        include "home.php";
    }


    include "footer.php";

?>
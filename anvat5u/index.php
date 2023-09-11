
<?php 
    session_start();
    include "model/pdo.php";
    include "model/global.php";
    include "model/loaihang.php";
    include "model/hanghoa.php";
    include "model/khachhang.php";
    include "model/binhluan.php";
    include "model/giohang.php";
    include "model/hoadon.php";
    include "view/header.php";



    $img_path = "images/";
    $listdanhmuc = list_loaihang();
    $listhh_8item = list_hanghoa_8item();
    $listhh = list_hanghoa();
    $listkh = list_khachhang();

    if(isset($_GET['act'])){
        switch ($_GET['act']) { 
        case 'about':
            include "view/about.php";
            break;
        case 'shop':
            include "view/shop.php";
            break;
        case 'cart':

            if(isset($_POST['dat_hang'])){

                $ma_kh = $_SESSION['user']['ma_KhachHang'];

                $ho_ten = $_POST['ho_ten'];
                $so_dien_thoai = $_POST['so_dien_thoai'];
                $email = $_POST['email'];
                $dia_chi = $_POST['dia_chi'];
                $ngay_lap_hd = get_time();
                $ghi_chu_kh = $_POST['ghi_chu_kh'];
        


                if(!empty($ho_ten) && 
                !empty($so_dien_thoai) 
                 && !empty($email) && 
                 !empty($dia_chi) && 
                 !empty($_SESSION['cart'])){



                    $ma_hddh = rand(1,10000);

            

                    if(check_ma_hddh($ma_hddh)){
                        insert_hoadondathang($ma_hddh,$ma_kh,$ho_ten,$so_dien_thoai,$email, $dia_chi,$ngay_lap_hd,$ghi_chu_kh);

                        $list_ma_hh = [];
                        
                        $tong_tien  = 0;
                        foreach($_SESSION['cart'] as $value){

                            $list_ma_hh[] = [
                                'ma_hh' => $value['id'],
                                'so_luong' => $value['soluong'],
                                'tong_tien' =>( $value['giahanghoa'] - $value['giam_gia']) * $value['soluong'],
                            ];

                            

                                    $tong_tien+=( $value['giahanghoa'] - $value['giam_gia'])* $value['soluong'];


                        }


                        insert_hoadonchitiet(json_encode($list_ma_hh),$tong_tien,$ma_hddh);
                        
                        
                        unset($_SESSION['cart']);


// tự mà phát triển , đay chỉ là cái biện pháp tạm thời thôi -> ajax hay cái kỹ thuật xử lý bất đồng bộ mà gắn vào nhé
// sau lày e học chuyên ngành hẹp, thìg mấy cái này là ruồi muỗi =)) ròi thoi, cảm ơn đại ca nhều :3
                       
                    }



                    $status = true;

       

                 }else{
                    $thongbao = '';
                    $status = false;
                 }

            }

            include "view/cart.php";
            break;
        case 'checkout':
            include "view/checkout.php";
            break;
        case 'blog':
            include "view/blog.php";
            break;
        case 'contact':
            include "view/contact.php";
            break;



        case 'addtocart':
            if(isset($_POST['addtocart'])){ 
                $mahh = $_POST['ma_hh'];
                $tenhanghoa = $_POST['ten_hh'];
                $giahanghoa = $_POST['gia_hh'];
                $giamgia = $_POST['giamgia'];
                $hinh = $_POST['hinh_hh'];
                themvaogiohang($mahh,$tenhanghoa,$giahanghoa,$giamgia,$hinh);
            }
            header('location: index.php?act=cart');
            break;

        case 'removetocart':
                xoagiohang();        
                header('location: index.php?act=cart');
                break;
                
        case 'removealltocart':
                xoatatcagiohang();       
            header('location: index.php?act=cart');
            break;

        case 'timkiem':
            if(isset($_POST['timkiem'])&&($_POST['timkiem'])){ 
                $keyword=$_POST['keyword'];
            }else{
                $keyword='';
            }
            $listhh = list_sanpham_timkiem($keyword);
            include "view/shop.php";
            break;

        case 'chitietsanpham':
            if(isset($_GET['ma_hanghoa'])&&($_GET['ma_hanghoa']>0)){
                $ma_hh=$_GET['ma_hanghoa'];
                $iddm=$_GET['iddm'];
                $onesp=loadone_hanghoa($ma_hh);
                $listcungloai = list_sanpham_cungloai($ma_hh,$iddm);
                include "view/product-single.php";
            }
            else{
                include "view/home.php";
            }
            break;

        case 'sanphamtheodm':
            if(isset($_GET['iddm'])&&($_GET['iddm']>0)){
                $iddm = $_GET['iddm'];
                $listhh = list_sanpham_danhmuc($iddm);
                include "view/shop.php";
            }else{
                $listhh = list_hanghoa();
                include "view/shop.php";
            }
            break;
            
        case 'dangnhap':
            if(isset($_POST['dangnhap'])&&($_POST['dangnhap'])){
                $user=$_POST['user'];
                $pass=$_POST['pass'];
                $checkuser = checkuser($user,$pass);
                if(is_array($checkuser)){
                    $_SESSION['user']=$checkuser;
                    header('location: index.php');
                    // $thongbao="Đã đăng nhập thành công!!";
                }else{
                    $thongbao="Tài khoản không tồn tại!!";
                }
            }
            include "view/taikhoan/dangnhap.php";
            break;

        case 'dangky':
            if(isset($_POST['dangky'])&&($_POST['dangky'])){
                $user=$_POST['user'];
                $pass=$_POST['pass'];
                $email=$_POST['email'];
                $sdt=$_POST['sdt'];
                $hoten=$_POST['hoten'];

                

               

                
                if(empty($user) || empty($pass) || empty($email) || empty($sdt) || empty($hoten)){
                    $thongbao = 'Các mục không được để trống! ';
                }
                else if(check_exist_user($user)){
                    $thongbao = "Tên đăng nhập đã tồn tại!!";
                }
                else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $thongbao = "Địa chỉ email '$email' không hợp lệ!!";
                }
                else if (check_exist_email($email)){
                    $thongbao = "Email đã tồn tại!!";
                }
                else{
                    insert_khachhang($user,$email,$pass,$sdt,$hoten);
                    $thongbao = "<p style='color:#28a745;text-align:center;'>Đã đăng ký thành công!!</p>";
                    // header("location: index.php?act=dangnhap");
                }
                
            }
            include "view/taikhoan/dangky.php";
            break;
            
        case 'edit_taikhoan':
            if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                $id=$_POST['id'];
                $user=$_POST['user'];
                $pass=$_POST['pass'];
                $email=$_POST['email'];
                $sdt=$_POST['sdt'];
                $hoten=$_POST['hoten'];
                update_khachhang($id,$user,$pass,$email,$sdt,$hoten);
                $_SESSION['user']=checkuser($user,$pass);
                $thongbao="Cập nhật tài khoản thành công!!";
            }
            include "view/taikhoan/edit_taikhoan.php";
            break;
        case'thoat':
            session_unset();
            header("location: index.php");
            break;
        default:
            include "view/home.php";
            break;
    }
}else{
    include "view/home.php";
}
    
    include "view/footer.php";

?>
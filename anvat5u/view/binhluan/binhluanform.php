<?php
    session_start();
    ob_start();
    include "../../model/pdo.php";
    include "../../model/binhluan.php";
    include "../../model/global.php";
    $idpro=$_REQUEST['idpro'];
    $dsbl=list_binhluan($idpro);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../view/css/layout.css">
    <style>
        .binhluan{
            margin:10px;
        }
        .divpadding{
            /* padding:20px; */
        }
        .binhluan{
            width:1130px;
            /* border:1px solid #333; */
            background-color:white;
        }
        .binhluan h1{
            /* width:930px; */
            width:100%;
            font-size: 16px;
            font-weight: 600;
            color: black;
            text-decoration: none;
            border: none;
            padding: 10px;
            cursor: pointer;
            text-align:left;
            color:#82ae46;
            background-color:#f0f0f0;
        }
        .box-guibinhluan .guibinhluan{
            width:50px;
            border:1px solid ;
            border-radius:3px;
        }
        .binhluan .danhsachbinhluan{
            width:100%;
            display:flex;
            flex-direction:column;
            justify-content:space-around;
        }
        .binhluan .danhsachbinhluan th{
            text-align:center;
        }
        .binhluan .danhsachbinhluan td:nth-child(1){
            width:25%;
        }
        .binhluan .danhsachbinhluan td:nth-child(2){
            width:60%;
            padding:0 20px;
            border-right:1px solid lightgray;
            border-left:1px solid lightgray;
        }
        .binhluan .danhsachbinhluan td:nth-child(3){
            width:13%;
            text-align:right;
        }
    </style>
</head>
<body>
        <div class="binhluan">
            <h1>ĐÁNH GIÁ SẢN PHẨM</h1>
        <div class="divpadding">
            <div class="danhsachbinhluan">
                <table>    
                    <tr>
                        <th>Tên người bình luận</th>
                        <th>Nội dung bình luận</th>
                        <th>Ngày bình luận</th>
                    </tr>
                    <?php
                        $dem=0;
                        foreach ($dsbl as $bl){
                            extract($bl);
                            $ngay_binhluan = get_time();
                            echo'<tr>
                                    <td>'.$ho_ten.'</td>
                                    <td>'.$noi_dung.'</td>
                                    <td>'.$ngay_binhluan.'</td>
                                </tr>';
                            $dem++;
                        }
                    ?>
                </table>
            </div>
        <?php 
        if(isset($_SESSION['user']) && !empty($_SESSION['user'])){ ?>
            <div class="box-guibinhluan">
                <form action="<?=$_SERVER['PHP_SELF'];?>" method="post" class="binhluanform">
                    <input type="hidden" name="idpro" value="<?=$idpro?>">
                    <input type="hidden" name="ma_kh" value="<?=$ma_kh?>">
                    <input type="text" name="noidungbinhluan" id="" class="noidungbinhluan" placeholder="Gửi bình luận">
                    <input type="submit" class="guibinhluan" name="guibinhluan" id="" value="Gửi">
                </form>
            </div>
        </div>
        <?php
            if(isset($_POST['guibinhluan'])&&($_POST['guibinhluan'])){
                $noidung=$_POST['noidungbinhluan'];
                $idpro=$_POST['idpro'];
                $ma_kh=$_POST['ma_kh'];
                $makh=$_SESSION['user']['ma_KhachHang'];
                $ngaybinhluan =  get_time();
                insert_binhluan($idpro,$makh,$noidung,$ngaybinhluan);
                // header("location:".$_SERVER['HTTP_HOST']);
                header("location:".$_SERVER['HTTP_REFERER']);
                // echo'$_SERVER['HTTP_HOST']';
            }
        ?>
        <?php } else{?>
        <div class="row justify-content-center mb-3 pb-3">
            <a href="index.php?act=dangnhap" class="btn btn-primary">Đăng nhập để bình luận!!</a>
        </div>
        <?php }?>
    </div>
</body>
</html> 

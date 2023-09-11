<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Đồ ăn vặt | Món Ăn Vặt Ngon Ngon</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script> -->


	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

	<link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
	<link rel="stylesheet" href="css/animate.css">

	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">

	<link rel="stylesheet" href="css/aos.css">

	<link rel="stylesheet" href="css/ionicons.min.css">

	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="css/jquery.timepicker.css">


	<link rel="stylesheet" href="css/flaticon.css">
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/style.css">

</head>
<style>
	.modal-backdrop {
		z-index: -1;
	}


	/* Full-width input fields */
	input[type=text],
	input[type=password] {
		width: 100%;
		padding: 12px 20px;
		margin: 8px 0;
		display: inline-block;
		border: 1px solid #ccc;
		box-sizing: border-box;
	}

	/* Set a style for all buttons */
	button {
		background-color: white;
		color: black;
		padding: 14px 20px;
		margin: 8px 0;
		border: none;
		cursor: pointer;
		width: 100%;
	}

	/* Extra styles for the cancel button */
	.cancelbtn {
		width: auto;
		padding: 10px 18px;
		background-color: #f44336;
		color: white;
	}

	/* Center the image and position the close button */
	.imgcontainer {
		text-align: center;
		margin: 24px 0 12px 0;
		position: relative;
	}

	img.avatar {
		width: 20%;
		border-radius: 50%;
	}

	.container {
		padding: 5px;
	}

	span.psw {
		float: right;
		padding-top: 16px;
	}

	/* The Modal (background) */
	.modal {
		display: none;
		/* Hidden by default */
		position: fixed;
		/* Stay in place */
		z-index: 1;
		/* Sit on top */
		left: 0;
		top: 0;
		width: 100%;
		/* Full width */
		height: 100%;
		/* Full height */

		background-color: rgb(0, 0, 0);
		/* Fallback color */
		background-color: rgba(0, 0, 0, 0.4);
		/* Black w/ opacity */
		padding-top: 60px;
	}

	/* Modal Content/Box */
	.modal-content {
		background-color: #fefefe;
		margin: 2% auto 15% auto;
		/* 5% from the top, 15% from the bottom and centered */
		border: 5px solid #888;
		width: 50%;
		/* Could be more or less, depending on screen size */
	}

	/* The Close Button (x) */
	.close {
		position: absolute;
		right: 25px;
		top: 0;
		color: #000;
		font-size: 35px;
		font-weight: bold;
	}

	.close:hover,
	.close:focus {
		color: red;
		cursor: pointer;
	}

	/* Add Zoom Animation */
	.animate {
		-webkit-animation: animatezoom 0.6s;
		animation: animatezoom 0.6s
	}

	@-webkit-keyframes animatezoom {
		from {
			-webkit-transform: scale(0)
		}

		to {
			-webkit-transform: scale(1)
		}
	}

	@keyframes animatezoom {
		from {
			transform: scale(0)
		}

		to {
			transform: scale(1)
		}
	}

	/* Change styles for span and cancel button on extra small screens */
	@media screen and (max-width: 300px) {
		span.psw {
			display: block;
			float: none;
		}

		.cancelbtn {
			width: 100%;
		}
	}
</style>

<body class="goto-here">
	<div class="py-1 bg-primary">
		<div class="container">
			<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
				<div class="col-lg-12 d-block">
					<div class="row d-flex">
						<div class="col-md pr-4 d-flex topper align-items-center">
							<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
							<span class="text">Hotline hỗ trợ: +84 59 715 977</span>
						</div>
						<div class="col-md pr-4 d-flex topper align-items-center">
							<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
							<span class="text">tvinhsvp@gmail.com</span>
						</div>
						<div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
							<span class="text">Vận chuyển nội thành từ 3-5 ngày</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand" href="index.php">ANH NĂM Ú</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>

			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item"><a href="index.php" class="nav-link">Trang chủ</a></li>
					<li class="nav-item active dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sản Phẩm</a>
						<div class="dropdown-menu" aria-labelledby="dropdown04">
							<a class="dropdown-item" href="index.php?act=sanphamtheodm">Sản Phẩm</a>
							<a class="dropdown-item" href="index.php?act=cart">Giỏ Hàng</a>
							<a class="dropdown-item" href="index.php?act=checkout">Thanh Toán</a>
						</div>
					</li>
					<li class="nav-item"><a href="index.php?act=about" class="nav-link">Về chúng tôi</a></li>
					<li class="nav-item"><a href="index.php?act=blog" class="nav-link">Blog</a></li>
					<li class="nav-item"><a href="index.php?act=contact" class="nav-link">Liên hệ</a></li>
					<?php
					if (isset($_SESSION['user'])) {
						echo '<li class="nav-item"><a href="index.php?act=dangnhap" class="nav-link">Tài khoản</a></li>';
					} else {
						echo '<li class="nav-item"><a href="index.php?act=dangnhap" class="nav-link">Đăng nhập</a></li>';
					}
					?>
					<li class="nav-item cta cta-colored"><a href="index.php?act=cart" class="nav-link"><span class="icon-shopping_cart"></span>[0]</a></li>

				</ul>
			</div>
		</div>
	</nav>
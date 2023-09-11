
    <div class="hero-wrap hero-bread" style="background-image: url('images/bannerkhoga.png');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Trang</a></span> <span>Sản Phẩm</span></p>
            <h1 class="mb-0 bread">SẢN PHẨM</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section">
    	<div class="container">
			<div class="form-timkiem bg-primary" style="height:190px;border:1px solid #333; padding:15px 10px; margin-bottom:50px; position:relative;">
				<form class="tim-kiem" method="post" action="index.php?act=timkiem">
					<h2 style="text-align:center;text-transform:Uppercase; color:white;">Tìm kiếm sản phẩm</h2>
					<input type="text" name="keyword" placeholder="Tìm Kiếm Sản Phẩm ....."><br>
					<input type="submit" value="Tìm kiếm" name="timkiem" style="width: 15%;height: 35px;position: absolute;bottom: 7px;left: 50%;transform:translateX(-50%)">
                </form>
			</div>
    		<div class="row justify-content-center">
    			<div class="col-md-10 mb-5 text-center">
    				<ul class="product-category">
    					<li><a href="index.php?act=sanphamtheodm&iddm=0" class="active">Tất cả</a></li>
						<?php
							foreach ($listdanhmuc as $dm) {
								extract($dm);
								echo'<li><a href="index.php?act=sanphamtheodm&iddm='.$ma_LoaiHang.'">'.$ten_loaihang.'</a></li>';
							}
						
						?>
    					<!-- <li><a href="#">Khô gà</a></li>
    					<li><a href="#">Mực Rim</a></li>
    					<li><a href="#">Cơm cháy</a></li>
    					<li><a href="#">Da heo</a></li>
    					<li><a href="#">Rong biển</a></li> -->
    				</ul>
    			</div>
    		</div>
			<div class="row">
				<?php
					if(isset($listhh)){
						foreach ($listhh as $hanghoa) {
							extract($hanghoa);
							$img=$img_path.$hinh;
								$linkhh="index.php?act=chitietsanpham&ma_hanghoa=".$ma_HangHoa."&iddm=".$ma_loai;
								// if($dem%3==0){
								// 	$br = "<br>";
								// }else{
								// 	$br = "";
				?>
						 <div class="col-md-6 col-lg-3 ftco-animate">
										<div class="product">
											<a href="<?=$linkhh?>" class="img-prod"><img class="img-fluid" src="images/<?=$img?>" alt="Colorlib Template">
												<span class="status">20%</span>
												<div class="overlay"></div>
											</a>
											<div class="text py-3 pb-4 px-3 text-center">
												<h3><a href="#"><?=$ten_hanghoa?></a></h3>
												<div class="d-flex">
													<div class="pricing">
														<p class="price"><span class="mr-2 price-dc"><?=number_format($don_gia,0,',','.');?> đ</span><span class="price-sale">
															<?=number_format($don_gia*0.8,0,',','.')?> đ</span></p>
													</div>
												</div>
												<div class="bottom-area d-flex px-3">
													<div class="m-auto d-flex">
														<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
															<span><i class="ion-ios-menu"></i></span>
														</a>
														<form action="index.php?act=addtocart" method="post">
															<input type="hidden" name="ma_hh" value="<?=$ma_HangHoa?>">
															<input type="hidden" name="ten_hh" value="<?=$ten_hanghoa?>">
															<input type="hidden" name="gia_hh" value="<?=$don_gia?>">
															<input type="hidden" name="giamgia" value="<?=$giam_gia?>">
															<input type="hidden" name="hinh_hh" value="<?=$img?>">
															
														<button name="addtocart" type="submit" class="buy-now d-flex justify-content-center align-items-center mx-1">
																		<span><i class="ion-ios-cart"></i></span>
																	</button>
														</form>
														
														<a href="#" class="heart d-flex justify-content-center align-items-center ">
															<span><i class="ion-ios-heart"></i></span>
														</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								
						<?php }
					}else{
						echo 'Không tìm thấy sản phẩm';
					}
				?>
			</div>
    		
    		<div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><a href="#">&lt;</a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div>
    	</div>
    </section>

		<section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">
      <div class="container py-4">
        <div class="row d-flex justify-content-center py-5">
          <div class="col-md-6">
          	<h2 style="font-size: 22px;" class="mb-0">Đăng ký để nhận tin mới?</h2>
          	<span>Điền địa chỉ Email để nhận những thông tin mới nhất về chúng tôi</span>
          </div>
          <div class="col-md-6 d-flex align-items-center">
            <form action="#" class="subscribe-form">
              <div class="form-group d-flex">
                <input type="text" class="form-control" placeholder="Điền địa chỉ Email">
                <input type="submit" value="Đăng ký" class="submit px-3">
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
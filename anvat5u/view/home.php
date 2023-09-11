<section id="home-section" class="hero">
		  <div class="home-slider owl-carousel">
	      <div class="slider-item" style="background-image: url(images/bannerkhoga.png);">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

	            <div class="col-sm-12 ftco-animate text-center">
	              <h1 class="mb-2">Đồ ăn vặt uy tín &amp; Đảm bảo an toàn vệ sinh</h1>
	              <h2 class="subheading mb-4">Chuyên cung cấp đồ ăn vặt</h2>
	              <p><a href="#" class="btn btn-primary">Mua ngay</a></p>
	            </div>
	          </div>
	        </div>
	      </div>
	    </div>
    </section>

    <section class="ftco-section">
			<div class="container">
				<div class="row no-gutters ftco-services">
          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-1 active d-flex justify-content-center align-items-center mb-2">
            		<span class="flaticon-shipped"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Miễn phí vận chuyển</h3>
                <span>Cho đơn hàng từ 200k trở lên</span>
              </div>
            </div>      
          </div>
          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-2 d-flex justify-content-center align-items-center mb-2">
            		<span class="flaticon-diet"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">An toàn vệ sinh</h3>
                <span>100% đạt tiêu chuẩn thực phẩm sạch</span>
              </div>
            </div>    
          </div>
          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-3 d-flex justify-content-center align-items-center mb-2">
            		<span class="flaticon-award"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Chất lượng cao</h3>
                <span>Đảm bảo chất lượng sản phẩm</span>
              </div>
            </div>      
          </div>
          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-4 d-flex justify-content-center align-items-center mb-2">
            		<span class="flaticon-customer-service"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Hỗ trợ</h3>
                <span>Hỗ trợ viên hỗ trợ 24/7</span>
              </div>
            </div>      
          </div>
        </div>
			</div>
		</section>

		<section class="ftco-section ftco-category ftco-no-pt">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="row">
							<div class="col-md-6 order-md-last align-items-stretch d-flex">
								<div class="category-wrap-2 ftco-animate img align-self-stretch d-flex" style="background-image: url(images/category.png);">
									<div class="text text-center">
										<h2>Khuyến mãi 30%</h2>
										<p>Chất lượng đảm bảo và phong cách phục vụ chuyên nghiệp</p>
										<p><a href="#" class="btn btn-primary">Mua ngay</a></p>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url(images/kho-ga-la-chanh-632.jpg);">
									<div class="text px-3 py-1">
										<h2 class="mb-0"><a href="#">Khô gà</a></h2>
									</div>
								</div>
								<div class="category-wrap ftco-animate img d-flex align-items-end" style="background-image: url(images/category-2.png);">
									<div class="text px-3 py-1">
										<h2 class="mb-0"><a href="#">Cơm cháy</a></h2>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url(images/mucrimme.jpg);">
							<div class="text px-3 py-1">
								<h2 class="mb-0"><a href="#">Mực rim</a></h2>
							</div>		
						</div>
						<div class="category-wrap ftco-animate img d-flex align-items-end" style="background-image: url(images/rongbienchaytoi.png);">
							<div class="text px-3 py-1">
								<h2 class="mb-0"><a href="#">Rong biển cháy tỏi</a></h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

    <section class="ftco-section">
    	<div class="container">
				<div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<span class="subheading">Sản phẩm nổi bật</span>
            <h2 class="mb-4">THỰC ĐƠN NGON - ĐẶT MÓN NGAY</h2>
            <p>Chuyên cung cấp các món ăn vặt ngon ngon chất lượng, các món ăn vặt phổ biến nhất như: Cơm háy chà bông, Khô bò, Khô gà, Mực xé sợi, Rong biển,...</p>
          </div>
        </div>   		
    	</div>
    	<div class="container">
    		<div class="row">
    				<?php
						if(isset($listhh)){
						foreach ($listhh_8item as $hanghoa) {
							extract($hanghoa);
							$img=$img_path.$hinh;
							$linkhh="index.php?act=chitietsanpham&ma_hanghoa=".$ma_HangHoa."&iddm=".$ma_loai;
							// die(print_r($hanghoa));
							?>
							<div class="col-md-6 col-lg-3 ftco-animate">
							<div class="product">
								
								<a href="<?=$linkhh?>" class="img-prod"><img class="img-fluid"
								 src="images/<?=$img?>" alt="Colorlib Template">
									<span class="status">20%</span>
									<div class="overlay"></div>
								</a>
								<div class="text py-3 pb-4 px-3 text-center">
									<h3><a href="#"><?=$ten_hanghoa?></a></h3>
									<div class="d-flex">
										<div class="pricing">
											<p class="price"><span class="mr-2 price-dc">
											<?=number_format($don_gia,0,',','.')?> đ</span><span class="price-sale">
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
    	</div>
    </section>
		
		<section class="ftco-section img" style="background-image: url(images/bg_3.png);">
    	<div class="container">
				<div class="row justify-content-end">
          <div class="col-md-6 heading-section ftco-animate deal-of-the-day ftco-animate">
          	<span class="subheading">Giá tốt nhất cho bạn</span>
            <h2 class="mb-4">Ưu đãi trong ngày</h2>
            <h3><a href="#">Khô gà lá chanh</a></h3>
            <span class="price">135.000đ <a href="#">chỉ còn 85.000đ </a></span>
          </div>
        </div>   		
    	</div>
    </section>

    <section class="ftco-section testimony-section">
		<div class="container">
		  <div class="row justify-content-center mb-5 pb-3">
			<div class="col-md-7 heading-section ftco-animate text-center">
				<span class="subheading">Ý kiến</span>
			  <h2 class="mb-4">Cảm nhận của khách hàng</h2>
			  <p>Chúng tôi luôn muốn lắng nghe các ý kiến từ khách hàng để có thể đem đến cho khách hàng trải nghiệm tốt nhất.</p>
			</div>
		  </div>
		  <div class="row ftco-animate">
			<div class="col-md-12">
			  <div class="carousel-testimony owl-carousel">
				<div class="item">
				  <div class="testimony-wrap p-4 pb-5">
					<div class="user-img mb-5" style="background-image: url(images/trai.jpg)">
					  <span class="quote d-flex align-items-center justify-content-center">
						<i class="icon-quote-left"></i>
					  </span>
					</div>
					<div class="text text-center">
					  <p class="mb-5 pl-4 line">Rất ngon, an toàn, cách thức làm việc gọn gàng, sạch sẽ</p>
					  <p class="name">Quang Dự</p>
					</div>
				  </div>
				</div>
				<div class="item">
				  <div class="testimony-wrap p-4 pb-5">
					<div class="user-img mb-5" style="background-image: url(images/trai.jpg)">
					  <span class="quote d-flex align-items-center justify-content-center">
						<i class="icon-quote-left"></i>
					  </span>
					</div>
					<div class="text text-center">
					  <p class="mb-5 pl-4 line">Chất lượng sản phẩm tốt, cho 5 sao, tôi sẽ tiếp tục ủng hộ</p>
					  <p class="name">Bá Thân</p>
					</div>
				  </div>
				</div>
				<div class="item">
				  <div class="testimony-wrap p-4 pb-5">
					<div class="user-img mb-5" style="background-image: url(images/trai.jpg)">
					  <span class="quote d-flex align-items-center justify-content-center">
						<i class="icon-quote-left"></i>
					  </span>
					</div>
					<div class="text text-center">
					  <p class="mb-5 pl-4 line">Chất lượng sản phẩm tốt, cho 5 sao, tôi sẽ tiếp tục ủng hộ.</p>
					  <p class="name">Khoa Văn</p>
					</div>
				  </div>
				</div>
				<div class="item">
				  <div class="testimony-wrap p-4 pb-5">
					<div class="user-img mb-5" style="background-image: url(images/trai.jpg)">
					  <span class="quote d-flex align-items-center justify-content-center">
						<i class="icon-quote-left"></i>
					  </span>
					</div>
					<div class="text text-center">
					  <p class="mb-5 pl-4 line">Chất lượng sản phẩm tốt, cho 5 sao, tôi sẽ tiếp tục ủng hộ.</p>
					  <p class="name">Bảo Long</p>
					</div>
				  </div>
				</div>
				<div class="item">
				  <div class="testimony-wrap p-4 pb-5">
					<div class="user-img mb-5" style="background-image: url(images/trai.jpg)">
					  <span class="quote d-flex align-items-center justify-content-center">
						<i class="icon-quote-left"></i>
					  </span>
					</div>
					<div class="text text-center">
					  <p class="mb-5 pl-4 line">Chất lượng sản phẩm tốt, cho 5 sao, tôi sẽ tiếp tục ủng hộ.</p>
					  <p class="name">Đình Kha</p>
					</div>
				  </div>
				</div>
			  </div>
			</div>
		  </div>
		</div>
	  </section>

    <hr>
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
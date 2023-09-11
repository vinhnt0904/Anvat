
<section class="ftco-section">
		<div class="container">
			<div class="row">
				<?php
					extract($onesp);
					$img=$img_path.$hinh;
					?>
						<div class="col-lg-6 mb-5 ftco-animate">
								<a href="images/<?=$img?>" class="image-popup"><img
										src="images/<?=$img?>" class="img-fluid" alt="Colorlib Template"></a>
							</div>	
							<div class="col-lg-6 product-details pl-md-5 ftco-animate">
								<h3><?=$ten_hanghoa?></h3>
								<div class="rating d-flex">
									<p class="text-left mr-4">
										<a href="#" class="mr-2">5.0</a>
										<a href="#"><span class="ion-ios-star-outline"></span></a>
										<a href="#"><span class="ion-ios-star-outline"></span></a>
										<a href="#"><span class="ion-ios-star-outline"></span></a>
										<a href="#"><span class="ion-ios-star-outline"></span></a>
										<a href="#"><span class="ion-ios-star-outline"></span></a>
									</p>
									<p class="text-left mr-4">
										<a href="#" class="mr-2" style="color: #000;">100 <span style="color: #bbb;"> Lượt dánh
												giá</span></a>
									</p>
									<p class="text-left">
										<a href="#" class="mr-2" style="color: #000;">500 <span style="color: #bbb;"> sản phẩm đã
												bán</span></a>
									</p>
								</div>
								<p class="price"><span><?=number_format($don_gia,0,',','.')?> VND</span></p>
								<p><?=$mo_ta?>
								</p>
								<div class="row mt-4">
									<div class="col-md-6">
										<div class="form-group d-flex">
											<div class="select-wrap">
												<div class="icon"><span class="ion-ios-arrow-down"></span></div>
												<select name="" id="" class="form-control">
													<!-- <option value="">Nhỏ</option> -->
													<!-- <option value="">Lớn</option> -->
													<option value="">Siêu to khổng lồ</option>
												</select>
											</div>
										</div>
									</div>
									<div class="w-100"></div>
									<div class="input-group col-md-6 d-flex mb-3">
										<span class="input-group-btn mr-2">
											<button type="button" class="quantity-left-minus btn" data-type="minus" data-field="">
												<i class="ion-ios-remove"></i>
											</button>
										</span>
										<input type="text" id="quantity" name="quantity" class="form-control input-number" value="1"
											min="1" max="100">
										<span class="input-group-btn ml-2">
											<button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
												<i class="ion-ios-add"></i>
											</button>
										</span>
									</div>
									<div class="w-100"></div>
									<div class="col-md-12">
										<p style="color: #000;">Còn hàng</p>
									</div>
								</div>
								<p>
									<form action="index.php?act=addtocart" method="post">
											<input type="hidden" name="ma_hh" value="<?=$ma_HangHoa?>">
											<input type="hidden" name="ten_hh" value="<?=$ten_hanghoa?>">
											<input type="hidden" name="gia_hh" value="<?=$don_gia?>">
											<input type="hidden" name="giamgia" value="<?=$giam_gia?>">
											<input type="hidden" name="hinh_hh" value="<?=$img?>">
											
										<button name="addtocart" type="submit" class="buy-now d-flex justify-content-center align-items-center mx-1">
														<span><i class="ion-ios-cart"></i> Thêm vào giỏ hàng</span>
													</button>
									</form>
									</p>
							</div>';
				
			</div>
		</div>
	</section>
	<section class="ftco-section">
		<div class="container">
		
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
			<script>
				$(document).ready(function(){
					$("#binhluan").load("view/binhluan/binhluanform.php", {idpro: <?=$ma_hh?>});
				});
			</script>
			<div class="binhluansanpham" id="binhluan">
				<h1>BÌNH LUẬN</h1>
				
			</div>
		</div>
		
			
	</section>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center mb-3 pb-3">
				<div class="col-md-12 heading-section text-center ftco-animate">
					<span class="subheading">Các sản phẩm khác</span>
					<h2 class="mb-4">Sản phẩm hiện có</h2>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<?php 
					foreach ($listcungloai as $listcl) {
						extract($listcl);
						$img=$img_path.$hinh;
						$linkhh="index.php?act=chitietsanpham&ma_hanghoa=".$ma_HangHoa."&iddm=".$ma_loai;
						echo '<div class="col-md-6 col-lg-3 ftco-animate">
							<div class="product">
								<a href="'.$linkhh.'" class="img-prod"><img class="img-fluid" src="images/'.$img.'"
										alt="Colorlib Template">
									<span class="status">30%</span>
									<div class="overlay"></div>
								</a>
								<div class="text py-3 pb-4 px-3 text-center">
									<h3><a href="'.$linkhh.'">'.$ten_hanghoa.'</a></h3>
									<div class="d-flex">
										<div class="pricing">
											<p class="price"><span class="mr-2 price-dc">135.000đ</span><span class="price-sale">95.000đ</span></p>
										</div>
									</div>
									<div class="bottom-area d-flex px-3">
										<div class="m-auto d-flex">
											<a href="#"
												class="add-to-cart d-flex justify-content-center align-items-center text-center">
												<span><i class="ion-ios-menu"></i></span>
											</a>
											<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
												<span><i class="ion-ios-cart"></i></span>
											</a>
											<a href="#" class="heart d-flex justify-content-center align-items-center ">
												<span><i class="ion-ios-heart"></i></span>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>'	;
					}	
				?>
				<!-- <div class="col-md-6 col-lg-3 ftco-animate">
					<div class="product">
						<a href="#" class="img-prod"><img class="img-fluid" src="images/khogaxecay.jpg"
								alt="Colorlib Template">
							<span class="status">30%</span>
							<div class="overlay"></div>
						</a>
						<div class="text py-3 pb-4 px-3 text-center">
							<h3><a href="#">Khô Gà Xé Cay</a></h3>
							<div class="d-flex">
								<div class="pricing">
									<p class="price"><span class="mr-2 price-dc">135.000đ</span><span class="price-sale">95.000đ</span></p>
								</div>
							</div>
							<div class="bottom-area d-flex px-3">
								<div class="m-auto d-flex">
									<a href="#"
										class="add-to-cart d-flex justify-content-center align-items-center text-center">
										<span><i class="ion-ios-menu"></i></span>
									</a>
									<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
										<span><i class="ion-ios-cart"></i></span>
									</a>
									<a href="#" class="heart d-flex justify-content-center align-items-center ">
										<span><i class="ion-ios-heart"></i></span>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="images/daheochiengionmamtoi.jpg" alt="Colorlib Template">
	    					<div class="overlay"></div>
	    				</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="#">Da Heo Chiên Giòn Mắm Tỏi</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span>100.000đ</span></p>
		    					</div>
	    					</div>
    						<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<span><i class="ion-ios-menu"></i></span>
	    							</a>
	    							<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<span><i class="ion-ios-cart"></i></span>
	    							</a>
	    							<a href="#" class="heart d-flex justify-content-center align-items-center ">
	    								<span><i class="ion-ios-heart"></i></span>
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
				<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="images/rongbienchaytoi.png" alt="Colorlib Template">
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="#">Rong biển vị trứng muối</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span>25.000đ</span></p>
		    					</div>
	    					</div>
    						<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<span><i class="ion-ios-menu"></i></span>
	    							</a>
	    							<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<span><i class="ion-ios-cart"></i></span>
	    							</a>
	    							<a href="#" class="heart d-flex justify-content-center align-items-center ">
	    								<span><i class="ion-ios-heart"></i></span>
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
				<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="images/comchaychiengion.jpg" alt="Colorlib Template">
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="#">Cơm cháy chiên giòn</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span>90.000đ</span></p>
		    					</div>
	    					</div>
    						<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<span><i class="ion-ios-menu"></i></span>
	    							</a>
	    							<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<span><i class="ion-ios-cart"></i></span>
	    							</a>
	    							<a href="#" class="heart d-flex justify-content-center align-items-center ">
	    								<span><i class="ion-ios-heart"></i></span>
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div> -->
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
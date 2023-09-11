
    <div class="hero-wrap hero-bread" style="background-image: url('images/bannerkhoga.png');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Trang</a></span> <span>Giỏ Hàng</span></p>
            <h1 class="mb-0 bread">Giỏ Hàng Của Tôi</h1>
          </div>
        </div>
      </div>
    </div>


	
	
    <section class="ftco-section ftco-cart ">
			<div class="container">
				<div class="row">
    			<div class="col-md-12 ftco-animate">
    				<div class="cart-list">
	    				<table class="table">
						    <thead class="thead-primary">
						      <tr class="text-center">
						        <th>&nbsp;</th>
						        <th>Hình ảnh</th>
						        <th>Tên sản phẩm</th>
						        <th>Giá gốc</th>
						        <th>Giảm giá</th>
						        <th>Số Lượng</th>
						        <th>Tổng</th>
						      </tr>
						    </thead>
						    <tbody>
						<?php 

						
							if(isset($_SESSION['cart']) && !empty($_SESSION['cart'])){
								$cart = $_SESSION['cart'];
								$total_sp = 0;
								$total_giam_gia = 0;
								
								foreach ($cart as $item) {
									extract($item);
									$total_sp += ($giahanghoa) * $soluong;
									$total_giam_gia +=  $giam_gia  * $soluong;
						?>
 						<tr class="text-center">
							
						        <td class="product-remove">
										
											<a href="index.php?act=removetocart&id=<?=$id?>"><span class="ion-ios-close"></span></a>
											<!-- <?php echo $id ?> -->
								</td>
						        
						        <td class="image-prod">
									<div class="img" style="background-image:url(<?=$hinh?>);"></div>
								</td>
						        <td class="product-name"><h3><?=$tenhanghoa?></h3></td>
						        <td class="price"><?=number_format($giahanghoa,0,',','.')?> VND</td>
						        <td class="price"><?=number_format($giam_gia,0,',','.')?> VND</td>
						        <td class="quantity">
						        	<div class="input-group mb-3">
					             		<input type="number" name="quantity" class="quantity form-control input-number " value="<?=$soluong?>" min="1" max="100">
					          		</div>
					          	</td>
						        <td class="total"><?=number_format(($giahanghoa-$giam_gia)* $soluong,0,',','.')?> VND</td>
						      </tr>
							  <!-- END TR-->


							<?php }?>
								

							<tr><td colspan="8"><a href="index.php?act=removealltocart" class="btn btn-primary">Xóa tất cả sản phẩm trong giỏ hàng</a></td></tr>
						     
							<?php }else{?>
							<tr><td colspan="12"><p  class="">Giỏ hàng trống rỗng và rỗng =))</p></td></tr>
					
		
		
							<?php }?>
						   
						    </tbody>
						  </table>
					  </div>
    			</div>
    		</div>
    		<?php 
				if(isset($_SESSION['user']) && !empty($_SESSION['user'])){ 
					// var_dump($_SESSION['user']);		
			?>


			
			<div class="row justify-content-end ">
			 	<div class="col-lg-8 mt-5 cart-wrap ftco-animate">
				 	<h3 class="mb-4 billing-heading">Chi Tiết Đơn Hàng</h3>
					<form action="" method="post">
						<div class="row align-items-end">		
							<div class="col-md-6">
								<label for="ho_ten">Họ tên</label>
								<input type="text" name="ho_ten" id="ho_ten" class="" placeholder="" value="">
							</div>
							
							<div class="col-md-6">
								<label for="so_dien_thoai" >Số điện thoại</label>
								<input type="text" id="so_dien_thoai" name="so_dien_thoai">
							</div>
							
							
							<div class="col-md-6">
								<label for="email">Email</label>
								<input type="text" id="email" name="email">
							</div>
							
						
							<div class="col-md-6">
								
									<label for="ghi_chu_kh">Ghi chú</label>
									<input type="text" id="ghi_chu_kh" name="ghi_chu_kh" class="" placeholder="">
							
							</div>
							<div class="col-lg-12">
								
									<label for="dia_chi">Địa chỉ</label>
									<br>
									<input type="text" id="dia_chi" class="form-control text-left p-1" style="border:1px solid #ccc !important; padding:12px 20px !important;"  name="dia_chi"></textarea>
								
							</div>
							
							
							
						</div>
					
				</div>
    	
			
    		
    			<div class="col-lg-4 mt-5 cart-wrap ftco-animate ">
    				<div class="cart-total mb-3">
    					<h3>Tổng tiền</h3>
    					<p class="d-flex">
    						<span>Tổng tiền sản phẩm</span>
    						<span><?php if(isset($total_sp)) 
							
							
							echo number_format($total_sp,0,',','.'); else echo "chưa có sản phẩm"; ?></span>
    					</p>
    					<!-- <p class="d-flex">
    						<span>Phí ship</span>
    						<span>$0.00</span>
    					</p> -->
    					<p class="d-flex">
    						<span>Giảm giá</span>
    						<span><?php if(isset($total_giam_gia)) echo number_format($total_giam_gia,0,',','.'); else echo "chưa có sản phẩm";?></span>
    					</p>
    					<hr>
    					<p class="d-flex total-price">
    						<span>Tổng tiền tất cả</span>
    						<span><?php if(isset($total_sp) && isset($total_giam_gia)) echo number_format((($total_sp - $total_giam_gia)) ,0,',','.')." VND"; else echo "chưa có sản phẩm";?> </span>
    					</p>
    				</div>
					<div class="cart-detail p-3 p-md-4">
	          			<h3 class="billing-heading mb-4">Hình thức thanh toán</h3>
									<div class="form-group">
										<div class="col-md-12">
											<div class="radio">
											   <label><input type="radio" name="pttt" class="mr-2" value="tttm" checked> Tiền mặt (COD)</label>
											</div>
										</div>
									</div>
									
									<div class="form-group">
										<div class="col-md-12">
											<div class="checkbox">
											   <label><input type="checkbox" value="" class="mr-2" checked> 
											   Tôi đã đọc và đồng ý với mọi điều khoản</label>
								</div>
						</div>
						</div>
						<button class="btn btn-primary py-3 px-4" type="submit" name="dat_hang" >Đặt hàng</button>
				</div>
				</form>
	          	</div>
    			</div>
				
    		</div> 

				<?php } else {?>
					<div class="text-center" style="margin-top:40px;">

						<a href="index.php?act=dangnhap" class="btn btn-primary">Đăng nhập để đặt hàng</a>
					</div>
					<?php }?>
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


	

                				
	<?php 

global $status;

if($status){ ?>


<div id="modalOrder" class="modal fade">
	<div class="modal-dialog modal-confirm">
		<div class="modal-content">
			<div class="modal-header">
				<div class="icon-box">
					<i class="material-icons">&#xE876;</i>
				</div>				
				<h4 class="modal-title w-100">Thông báo!</h4>	
			</div>
			<!-- <div class="modal-body">
				<p class="text-center" id="thongbao">Đặt hàng thành công</p>
			</div> -->
			<?php 
				if($status!=true){
					echo '	<div class="modal-body">
								<p class="text-center" id="thongbao">Đặt hàng không thành công</p>
							</div>';
				}else{
					echo '	<div class="modal-body">
								<p class="text-center" id="thongbao">Đặt hàng không thành công</p>
							</div>';
				}
			?>
			<div class="modal-footer">
				<button class="btn btn-success btn-block" data-dismiss="modal">OK</button>
			</div>
		</div>
	</div>
	</div>     

<script>
	$(document).ready(function(){
		$('#modalOrder').modal('show');
		 setTimeout(() => {
		$('#modalOrder').modal('hide');
		}, 3000);

		
	})
		
	</script>


<style>	
.modal-content{
	width:100%;
}					
.modal-confirm {		
	color: #636363;
	width: 325px;
	font-size: 14px;
}
.modal-confirm .modal-content {
	padding: 20px;
	border-radius: 5px;
	border: none;
}
.modal-confirm .modal-header {
	border-bottom: none;   
	position: relative;
}
.modal-confirm h4 {
	text-align: center;
	font-size: 26px;
	margin: 30px 0 -15px;
}
.modal-confirm .form-control, .modal-confirm .btn {
	min-height: 40px;
	border-radius: 3px; 
}
.modal-confirm .close {
	position: absolute;
	top: -5px;
	right: -5px;
}	
.modal-confirm .modal-footer {
	border: none;
	text-align: center;
	border-radius: 5px;
	font-size: 13px;
}	
.modal-confirm .icon-box {
	color: #fff;		
	position: absolute;
	margin: 0 auto;
	left: 0;
	right: 0;
	top: -70px;
	width: 95px;
	height: 95px;
	border-radius: 50%;
	z-index: 9;
	background: #82ce34;
	padding: 15px;
	text-align: center;
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
}
.modal-confirm .icon-box i {
	font-size: 58px;
	position: relative;
	top: 3px;
}
.modal-confirm.modal-dialog {
	margin-top: 80px;
}
.modal-confirm .btn {
	color: #fff;
	border-radius: 4px;
	background: #82ce34;
	text-decoration: none;
	transition: all 0.4s;
	line-height: normal;
	border: none;
}
.modal-confirm .btn:hover, .modal-confirm .btn:focus {
	background: #6fb32b;
	outline: none;
}
.trigger-btn {
	display: inline-block;
	margin: 100px auto;
}
</style>

						
<?php } ?>
                        
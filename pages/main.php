<?php
include "lib/config_web.php";
include "lib/koneksi.php";
include "templates/header.php";

?>
<html>
<head>
<style>
.shopby{
	margin-top: 5px;
	color: black;
	font-family: fantasy;
	
	
}
.merc{
	margin-left:20px;
	margin-top: 10px;
	float: left;
	margin-bottom: 10px;
}
.merc .m1{
	 
  
}
.spasi{
	margin-bottom: 10px;
}
</style>
</head>
 <body>
 <!-- <div class="banner" id="home1">
		<div class="container">
		
		</div>
	</div> -->
	<img src="assets/frontend/images/shopnow.png" height="50%" width="100%" alt="">
	<div class="warba">
	<div class="new-products3">
		<div class="container">
	<center>
			<h2>SHOP BY PLAYER</h2>
			</center>
	</div>
	</div>
	</div>
	<div class="merc">
<img src="assets/frontend/images/merch.png" class="m1" height="50%" width="48%" alt="">
<img src="assets/frontend/images/merch.png" height="50%" width="48%" alt="">

</div>
	<img src="assets/frontend/images/pem.png" height="50%" width="100%" alt="">
<!-- //banner -->



<div class="spasi">

</div>
<!-- banner-bottom -->
	<div class="banner-bottom">
		<div class="container">
			
			<div class="col-md-12 wthree_banner_bottom_right">
				<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
					<ul id="myTab" class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home">Populer</a></li>
						<li role="presentation"><a href="#skirts" role="tab" id="skirts-tab" data-toggle="tab" aria-controls="skirts">Topi</a></li>
						<li role="presentation"><a href="#watches" role="tab" id="watches-tab" data-toggle="tab" aria-controls="watches">Celana</a></li>
					
						
					</ul>
					<div id="myTabContent" class="tab-content">
					
						<div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab">
							<div class="agile_ecommerce_tabs">
							<?php
									include "lib/config_web.php";
									include "lib/koneksi.php";

									$query = mysqli_query($koneksi, "SELECT * FROM produk order by id_kategori='1' DESC limit 3");

									while($dataProduk = mysqli_fetch_array($query)){
										?> 
								<div class="col-md-4 agile_ecommerce_tab_left">
								
									<div class="hs-wrapper">
										<img src="file/produk/<?php echo $dataProduk['gambar']; ?>" alt=" " class="img-responsive" />
										<img src="file/produk/<?php echo $dataProduk['gambar']; ?>" alt=" " class="img-responsive" />
										<img src="file/produk/<?php echo $dataProduk['gambar']; ?>" alt=" " class="img-responsive" />
										<img src="file/produk/<?php echo $dataProduk['gambar']; ?>" alt=" " class="img-responsive" />
										<img src="file/produk/<?php echo $dataProduk['gambar']; ?>" alt=" " class="img-responsive" />
										<img src="file/produk/<?php echo $dataProduk['gambar']; ?>" alt=" " class="img-responsive" />

										
										<div class="w3_hs_bottom">
											<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#myModal<?php echo $dataProduk['id_produk'];?>"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>
									</div>
									<h5><a href="single.html"><?php echo $dataProduk['nama_produk'];?></a></h5>
									<div class="simpleCart_shelfItem">
										<p><span></span><i>Rp. </i><i class="item_price"><?php echo number_format($dataProduk['harga'],2,".",",");?></i></p>
										<p><a class="item_add" href="aksi_keranjang2.php?id_produk=<?php echo $dataProduk['id_produk'];?>&harga=<?php echo $dataProduk['harga'];?>">Masuk Keranjang</a></p>
									</div>
									
								</div>
								<div class="modal video-modal fade" id="myModal<?php echo $dataProduk['id_produk'];?>" tabindex="-1" role="dialog" aria-labelledby="myModal2">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
							</div>
							<section>
								<div class="modal-body">
									<div class="col-md-5 modal_body_left">
										<img src="file/produk/<?php echo $dataProduk['gambar']; ?>" alt=" " class="img-responsive" />
									</div>
									<div class="col-md-7 modal_body_right">
										<h4><?php echo $dataProduk['nama_produk'];?></h4>
										<p><?php echo $dataProduk['deskripsi'];?></p>
										<div class="rating">
											<div class="rating-left">
												<img src="assets/frontend/images/star-.png" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="assets/frontend/images/star-.png" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="assets/frontend/images/star-.png" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="assets/frontend/images/star.png" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="assets/frontend/images/star.png" alt=" " class="img-responsive" />
											</div>
											<div class="clearfix"> </div>
										</div>
										<div class="modal_body_right_cart simpleCart_shelfItem">
											<p><span></span><i>Rp. </i><i class="item_price"><?php echo number_format($dataProduk['harga'],2,".",",");?></i></p>
											<p><a class="item_add" href="aksi_keranjang2.php?id_produk=<?php echo $dataProduk['id_produk'];?>&harga=<?php echo $dataProduk['harga'];?>">Masuk Keranjang</a></p>
										</div>
										<h5>Tersedia Ukuran</h5>
										<div class="color-quality">
											<ul>
												<li><a href="#"><span></span>M</a></li>
												<li><a href="#" class="brown"><span></span>L</a></li>
												<li><a href="#" class="purple"><span></span>XL</a></li>
												<li><a href="#" class="gray"><span></span>S</a></li>
											</ul>
										</div>
									</div>
									<div class="clearfix"> </div>
								</div>
							</section>
						</div>
					</div>
				</div>
								<?php } ?>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="skirts" aria-labelledby="skirts-tab">
							<div class="agile_ecommerce_tabs">
							<?php
									include "lib/config_web.php";
									include "lib/koneksi.php";

									$query = mysqli_query($koneksi, "SELECT * FROM produk order by id_kategori='2' DESC limit 3");

									while($dataProduk = mysqli_fetch_array($query)){
										?> 
								<div class="col-md-4 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										<img src="file/produk/<?php echo $dataProduk['gambar']; ?>" alt=" " class="img-responsive" />
										<img src="file/produk/<?php echo $dataProduk['gambar']; ?>" alt=" " class="img-responsive" />
										<img src="file/produk/<?php echo $dataProduk['gambar']; ?>" alt=" " class="img-responsive" />
										<img src="file/produk/<?php echo $dataProduk['gambar']; ?>" alt=" " class="img-responsive" />
										<img src="file/produk/<?php echo $dataProduk['gambar']; ?>" alt=" " class="img-responsive" />
										<img src="file/produk/<?php echo $dataProduk['gambar']; ?>" alt=" " class="img-responsive" />
										
										<div class="w3_hs_bottom">
											<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#myModal<?php echo $dataProduk['id_produk'];?>"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>
									</div>
									<h5><a href="single.html"><?php echo $dataProduk['nama_produk'];?></a></h5>
									<div class="simpleCart_shelfItem">
										<p><span></span><i>Rp. </i><i class="item_price"><?php echo number_format($dataProduk['harga'],2,".",",");?></i></p>
										<p><a class="item_add" href="aksi_keranjang2.php?id_produk=<?php echo $dataProduk['id_produk'];?>&harga=<?php echo $dataProduk['harga'];?>">Masuk Keranjang</a></p>
									</div>
								</div>
								<div class="modal video-modal fade" id="myModal<?php echo $dataProduk['id_produk'];?>" tabindex="-1" role="dialog" aria-labelledby="myModal2">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
							</div>
							<section>
								<div class="modal-body">
									<div class="col-md-5 modal_body_left">
										<img src="file/produk/<?php echo $dataProduk['gambar']; ?>" alt=" " class="img-responsive" />
									</div>
									<div class="col-md-7 modal_body_right">
										<h4><?php echo $dataProduk['nama_produk'];?></h4>
										<p><?php echo $dataProduk['deskripsi'];?></p>
										<div class="rating">
											<div class="rating-left">
												<img src="assets/frontend/images/star-.png" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="assets/frontend/images/star-.png" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="assets/frontend/images/star-.png" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="assets/frontend/images/star.png" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="assets/frontend/images/star.png" alt=" " class="img-responsive" />
											</div>
											<div class="clearfix"> </div>
										</div>
										<div class="modal_body_right_cart simpleCart_shelfItem">
											<p><span></span><i>Rp. </i><i class="item_price"><?php echo number_format($dataProduk['harga'],2,".",",");?></i></p>
											<p><a class="item_add" href="aksi_keranjang2.php?id_produk=<?php echo $dataProduk['id_produk'];?>&harga=<?php echo $dataProduk['harga'];?>">Masuk Keranjang</a></p>
										</div>
										<h5>Tersedia Ukuran</h5>
										<div class="color-quality">
											<ul>
												<li><a href="#"><span></span>M</a></li>
												<li><a href="#" class="brown"><span></span>L</a></li>
												<li><a href="#" class="purple"><span></span>XL</a></li>
												<li><a href="#" class="gray"><span></span>S</a></li>
											</ul>
										</div>
									</div>
									<div class="clearfix"> </div>
								</div>
							</section>
						</div>
					</div>
				</div>
								<?php } ?>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="watches" aria-labelledby="watches-tab">
							<div class="agile_ecommerce_tabs">
								<?php
									include "lib/config_web.php";
									include "lib/koneksi.php";

									$query = mysqli_query($koneksi, "SELECT * FROM produk order by id_kategori='1' DESC limit 3");

									while($dataProduk = mysqli_fetch_array($query)){
										?> 
								<div class="col-md-4 agile_ecommerce_tab_left">
								
									<div class="hs-wrapper">
										<img src="file/produk/<?php echo $dataProduk['gambar']; ?>" alt=" " class="img-responsive" />
										<img src="file/produk/<?php echo $dataProduk['gambar']; ?>" alt=" " class="img-responsive" />
										<img src="file/produk/<?php echo $dataProduk['gambar']; ?>" alt=" " class="img-responsive" />
										<img src="file/produk/<?php echo $dataProduk['gambar']; ?>" alt=" " class="img-responsive" />
										<img src="file/produk/<?php echo $dataProduk['gambar']; ?>" alt=" " class="img-responsive" />
										<img src="file/produk/<?php echo $dataProduk['gambar']; ?>" alt=" " class="img-responsive" />
										
										<div class="w3_hs_bottom">
											<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#myModal2<?php echo $dataProduk['id_produk'];?>"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>
										
						
									</div>
									<h5><a href="single.html"><?php echo $dataProduk['nama_produk'];?></a></h5>
									<div class="simpleCart_shelfItem">
										<p><span></span><i>Rp. </i><i class="item_price"><?php echo number_format($dataProduk['harga'],2,".",",");?></i></p>
										<p><a class="item_add" href="aksi_keranjang2.php?id_produk=<?php echo $dataProduk['id_produk'];?>&harga=<?php echo $dataProduk['harga'];?>">Masuk Keranjang</a></p>
									</div>
									
								</div>
								<div class="modal video-modal fade" id="myModal2<?php echo $dataProduk['id_produk']?>" tabindex="-1" role="dialog" aria-labelledby="myModal2">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
							</div>
							<section>
								<div class="modal-body">
									<div class="col-md-5 modal_body_left">
										<img src="file/produk/<?php echo $dataProduk['gambar']; ?>" alt=" " class="img-responsive" />
									</div>
									<div class="col-md-7 modal_body_right">
										<h4><?php echo $dataProduk['nama_produk'];?></h4>
										<p><?php echo $dataProduk['deskripsi'];?></p>
										<div class="rating">
											<div class="rating-left">
												<img src="assets/frontend/images/star-.png" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="assets/frontend/images/star-.png" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="assets/frontend/images/star-.png" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="assets/frontend/images/star.png" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="assets/frontend/images/star.png" alt=" " class="img-responsive" />
											</div>
											<div class="clearfix"> </div>
										</div>
										<div class="modal_body_right_cart simpleCart_shelfItem">
											<p><span></span><i>Rp. </i><i class="item_price"><?php echo number_format($dataProduk['harga'],2,".",",");?></i></p>
											<p><a class="item_add" href="aksi_keranjang2.php?id_produk=<?php echo $dataProduk['id_produk'];?>&harga=<?php echo $dataProduk['harga'];?>">Masuk Keranjang</a></p>
										</div>
										<h5>Tersedia Ukuran</h5>
										<div class="color-quality">
											<ul>
												<li><a href="#"><span></span>M</a></li>
												<li><a href="#" class="brown"><span></span>L</a></li>
												<li><a href="#" class="purple"><span></span>XL</a></li>
												<li><a href="#" class="gray"><span></span>S</a></li>
											</ul>
										</div>
									</div>
									<div class="clearfix"> </div>
								</div>
							</section>
						</div>
					</div>
				</div>
										<?php } ?>
								<div class="clearfix"> </div>
							</div>
						</div>
							
						<div role="tabpanel" class="tab-pane fade" id="sandals" aria-labelledby="sandals-tab">
							<div class="agile_ecommerce_tabs">
							<?php
									include "lib/config_web.php";
									include "lib/koneksi.php";

									$query = mysqli_query($koneksi, "SELECT * FROM produk where id_kategori='4' order by id_kategori DESC limit 3");

									while($dataProduk = mysqli_fetch_array($query)){
										?> 
								<div class="col-md-4 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										<img src="file/produk/<?php echo $dataProduk['gambar']; ?>" alt=" " class="img-responsive" />
										<img src="file/produk/<?php echo $dataProduk['gambar']; ?>" alt=" " class="img-responsive" />
										<img src="file/produk/<?php echo $dataProduk['gambar']; ?>" alt=" " class="img-responsive" />
										<img src="file/produk/<?php echo $dataProduk['gambar']; ?>" alt=" " class="img-responsive" />
										<img src="file/produk/<?php echo $dataProduk['gambar']; ?>" alt=" " class="img-responsive" />
										<img src="file/produk/<?php echo $dataProduk['gambar']; ?>" alt=" " class="img-responsive" />
										<div class="w3_hs_bottom">
											<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#myModal3<?php echo $dataProduk['id_produk']?>"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>
									</div>
									<h5><a href="single.html"><?php echo $dataProduk['nama_produk'];?></a></h5>
									<div class="simpleCart_shelfItem">
										<p><span></span><i>Rp. </i><i class="item_price"><?php echo number_format($dataProduk['harga'],2,".",",");?></i></p>
										<p><a class="item_add" href="aksi_keranjang2.php?id_produk=<?php echo $dataProduk['id_produk'];?>&harga=<?php echo $dataProduk['harga'];?>">Masuk Keranjang</a></p>
									</div>
								</div>
								<div class="modal video-modal fade" id="myModal3<?php echo $dataProduk['id_produk']?>" tabindex="-1" role="dialog" aria-labelledby="myModal2">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
							</div>
							<section>
								<div class="modal-body">
									<div class="col-md-5 modal_body_left">
										<img src="file/produk/<?php echo $dataProduk['gambar']; ?>" alt=" " class="img-responsive" />
									</div>
									<div class="col-md-7 modal_body_right">
										<h4><?php echo $dataProduk['nama_produk'];?></h4>
										<p><?php echo $dataProduk['deskripsi'];?></p>
										<div class="rating">
											<div class="rating-left">
												<img src="assets/frontend/images/star-.png" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="assets/frontend/images/star-.png" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="assets/frontend/images/star-.png" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="assets/frontend/images/star.png" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="assets/frontend/images/star.png" alt=" " class="img-responsive" />
											</div>
											<div class="clearfix"> </div>
										</div>
										<div class="modal_body_right_cart simpleCart_shelfItem">
											<p><span></span><i>Rp. </i><i class="item_price"><?php echo number_format($dataProduk['harga'],2,".",",");?></i></p>
											<p><a class="item_add" href="aksi_keranjang2.php?id_produk=<?php echo $dataProduk['id_produk'];?>&harga=<?php echo $dataProduk['harga'];?>">Masuk Keranjang</a></p>
										</div>
										<h5>Tersedia Ukuran</h5>
										<div class="color-quality">
											<ul>
												<li><a href="#"><span></span>M</a></li>
												<li><a href="#" class="brown"><span></span>L</a></li>
												<li><a href="#" class="purple"><span></span>XL</a></li>
												<li><a href="#" class="gray"><span></span>S</a></li>
											</ul>
										</div>
									</div>
									<div class="clearfix"> </div>
								</div>
							</section>
						</div>
					</div>
				</div>
								<?php } ?>
								<div class="clearfix"> </div>
							</div>
						</div>
						
					</div>
				</div>
					<!--modal-video-->
				
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //banner-bottom -->

<!-- banner-bottom1 -->
	
<!-- //banner-bottom1 -->


<!-- new-products -->
<div class="warba">
	<div class="new-products3">
		<div class="container">
			<center>
			<h2>PRODUK TERBARU</h2>
			</center>
			<div class="agileinfo_new_products_grids">
			<?php
									include "lib/config_web.php";
									include "lib/koneksi.php";

									$query = mysqli_query($koneksi, "SELECT * FROM produk  order by id_kategori DESC limit 4");

									while($dataProduk = mysqli_fetch_array($query)){
										?> 
				<div class="col-md-3 agileinfo_new_products_grid">
				
					<div class="agile_ecommerce_tab_left agileinfo_new_products_grid1">
						<div class="hs-wrapper hs-wrapper1">
							<img src="file/produk/<?php echo $dataProduk['gambar']; ?>" alt=" " class="img-responsive" />
							<img src="file/produk/<?php echo $dataProduk['gambar']; ?>" alt=" " class="img-responsive" />
							<img src="file/produk/<?php echo $dataProduk['gambar']; ?>" alt=" " class="img-responsive" />
							<img src="file/produk/<?php echo $dataProduk['gambar']; ?>" alt=" " class="img-responsive" />
							<img src="file/produk/<?php echo $dataProduk['gambar']; ?>" alt=" " class="img-responsive" />
							<img src="file/produk/<?php echo $dataProduk['gambar']; ?>" alt=" " class="img-responsive" />
							
							<div class="w3_hs_bottom w3_hs_bottom_sub">
								<ul>
									<li>
										<a href="#" data-toggle="modal" data-target="#myModal6<?php echo $dataProduk['id_produk']?>"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
									</li>
								</ul>
							</div>
						</div>
						<h5><a href="single.html"><?php echo $dataProduk['nama_produk'];?></a></h5>
						<div class="simpleCart_shelfItem">
							<p><span></span><i>Rp. </i><i class="item_price"><?php echo number_format($dataProduk['harga'],2,".",",");?></i></p>
							<p><a class="item_add" href="aksi_keranjang2.php?id_produk=<?php echo $dataProduk['id_produk'];?>&harga=<?php echo $dataProduk['harga'];?>">Masuk Keranjang</a></p>
						</div>
						<div class="dresses_grid_pos">
									<h6>New</h6>
								</div>
					</div>
					
				</div>
				<div class="modal video-modal fade" id="myModal6<?php echo $dataProduk['id_produk']?>" tabindex="-1" role="dialog" aria-labelledby="myModal2">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
							</div>
							<section>
								<div class="modal-body">
									<div class="col-md-5 modal_body_left">
										<img src="file/produk/<?php echo $dataProduk['gambar']; ?>" alt=" " class="img-responsive" />
									</div>
									<div class="col-md-7 modal_body_right">
										<h4><?php echo $dataProduk['nama_produk'];?></h4>
										<p><?php echo $dataProduk['deskripsi'];?></p>
										<div class="rating">
											<div class="rating-left">
												<img src="assets/frontend/images/star-.png" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="assets/frontend/images/star-.png" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="assets/frontend/images/star-.png" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="assets/frontend/images/star.png" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="assets/frontend/images/star.png" alt=" " class="img-responsive" />
											</div>
											<div class="clearfix"> </div>
										</div>
										<div class="modal_body_right_cart simpleCart_shelfItem">
											<p><span></span><i>Rp. </i><i class="item_price"><?php echo number_format($dataProduk['harga'],2,".",",");?></i></p>
											<p><a class="item_add" href="aksi_keranjang2.php?id_produk=<?php echo $dataProduk['id_produk'];?>&harga=<?php echo $dataProduk['harga'];?>">Masuk Keranjang</a></p>
										</div>
										<h5>Tersedia Ukuran</h5>
										<div class="color-quality">
											<ul>
												<li><a href="#"><span></span>M</a></li>
												<li><a href="#" class="brown"><span></span>L</a></li>
												<li><a href="#" class="purple"><span></span>XL</a></li>
												<li><a href="#" class="gray"><span></span>S</a></li>
											</ul>
										</div>
									</div>
									<div class="clearfix"> </div>
								</div>
							</section>
						</div>
					</div>
				</div>
				<?php } ?>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	</div>
<!-- //new-products -->
<div class="spasiatas">
<h5></h5>
									</div>
<div class="w3l_related_productsdd">
		<div class="container">
			<center>
			<h2>PRODUK LAINYA</h2>
			</center>
			<ul id="flexiselDemo2">	
					<?php
									include "lib/config_web.php";
									include "lib/koneksi.php";

									$query = mysqli_query($koneksi, "SELECT * FROM produk  where rekomendasi='Y' order by id_produk DESC limit 8");

									while($dataProduk = mysqli_fetch_array($query)){
										?> 
				<li>
					<div class="w3l_related_products_grid">
						<div class="agile_ecommerce_tab_left dresses_grid">
							<div class="hs-wrapper hs-wrapper3">
								<img src="file/produk/<?php echo $dataProduk['gambar']; ?>" alt=" " class="img-responsive" />
								<img src="file/produk/<?php echo $dataProduk['gambar']; ?>" alt=" " class="img-responsive" />
								<img src="file/produk/<?php echo $dataProduk['gambar']; ?>" alt=" " class="img-responsive" />
								<img src="file/produk/<?php echo $dataProduk['gambar']; ?>" alt=" " class="img-responsive" />
								<img src="file/produk/<?php echo $dataProduk['gambar']; ?>" alt=" " class="img-responsive" />
								<img src="file/produk/<?php echo $dataProduk['gambar']; ?>" alt=" " class="img-responsive" />
								
								<div class="w3_hs_bottom">
									<div class="flex_ecommerce">
										<a href="#" data-toggle="modal" data-target="#myModal7<?php echo $dataProduk['id_produk']?>"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
									</div>
								</div>
							</div>
							<h5><a href="single.html"><?php echo $dataProduk['nama_produk']; ?></a></h5>
							<div class="simpleCart_shelfItem">
								<p class="flexisel_ecommerce_cart"><span></span><i>Rp. </i><i class="item_price"><?php echo number_format($dataProduk['harga'],2,".",",");?></i></p>
								<p><a class="item_add" href="aksi_keranjang2.php?id_produk=<?php echo $dataProduk['id_produk'];?>&harga=<?php echo $dataProduk['harga'];?>">Masuk Keranjang</a></p>
							</div>
						</div>
					</div>
					<div class="modal video-modal fade" id="myModal7<?php echo $dataProduk['id_produk']?>" tabindex="-1" role="dialog" aria-labelledby="myModal2">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
							</div>
							<section>
								<div class="modal-body">
									<div class="col-md-5 modal_body_left">
										<img src="file/produk/<?php echo $dataProduk['gambar']; ?>" alt=" " class="img-responsive" />
									</div>
									<div class="col-md-7 modal_body_right">
										<h4><?php echo $dataProduk['nama_produk'];?></h4>
										<p><?php echo $dataProduk['deskripsi'];?></p>
										<div class="rating">
											<div class="rating-left">
												<img src="assets/frontend/images/star-.png" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="assets/frontend/images/star-.png" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="assets/frontend/images/star-.png" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="assets/frontend/images/star.png" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="assets/frontend/images/star.png" alt=" " class="img-responsive" />
											</div>
											<div class="clearfix"> </div>
										</div>
										<div class="modal_body_right_cart simpleCart_shelfItem">
											<p><span></span><i>Rp. </i><i class="item_price"><?php echo number_format($dataProduk['harga'],2,".",",");?></i></p>
											<p><a class="item_add" href="aksi_keranjang2.php?id_produk=<?php echo $dataProduk['id_produk'];?>&harga=<?php echo $dataProduk['harga'];?>">Masuk Keranjang</a></p>
										</div>
										<h5>Tersedia Ukuran</h5>
										<div class="color-quality">
											<ul>
												<li><a href="#"><span></span>M</a></li>
												<li><a href="#" class="brown"><span></span>L</a></li>
												<li><a href="#" class="purple"><span></span>XL</a></li>
												<li><a href="#" class="gray"><span></span>S</a></li>
											</ul>
										</div>
									</div>
									<div class="clearfix"> </div>
								</div>
							</section>
						</div>
					</div>
				</div>
				
				<?php } ?>
				</li>
				
			</ul>
				<script type="text/javascript">
					$(window).load(function() {
						$("#flexiselDemo2").flexisel({
							visibleItems:4,
							animationSpeed: 1000,
							autoPlay: true,
							autoPlaySpeed: 3000,    		
							pauseOnHover: true,
							enableResponsiveBreakpoints: true,
							responsiveBreakpoints: { 
								portrait: { 
									changePoint:480,
									visibleItems: 1
								}, 
								landscape: { 
									changePoint:640,
									visibleItems:2
								},
								tablet: { 
									changePoint:768,
									visibleItems: 3
								}
							}
						});
						
					});
				</script>
				<script type="text/javascript" src="assets/frontend/js/jquery.flexisel.js"></script>
		</div>
	</div>

	<?php include "templates/footer.php"; ?>
 </body>
</html>

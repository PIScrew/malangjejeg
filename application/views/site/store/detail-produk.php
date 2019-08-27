<!-- Breadcrumb -->
<nav aria-label="breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="index-2.html" class="text-info">Home</a></li>
		<li class="breadcrumb-item"><a href="<?php echo base_url('Category/'.$ct['slug_category'])?>" class="text-info"><?php echo $ct['title_category']?></a></li>
		<li class="breadcrumb-item active" aria-current="page"><?php echo $product['title_product']?></li>
	</ol>
</nav>
<!-- /Breadcrumb -->

<div class="row align-items-center codepage" data-codepage="<?php echo $code_page ?>">
	<div class="col-md-5">
		<div class="img-detail-wrapper">
			<img src="<?php echo img_url_product(img_product($product['token'],$product['token_backup'])) ?>" class="img-fluid px-5 img-product-list" id="img-detail" alt="Responsive image" data-index="0">
			<div class="img-detail-list img-list">
			<?php			
			if ($img_path != null):
				$i = 1;
				foreach ($img_path as $img):?>			
								<a href="#" class="<?php if ($i == 1) {echo "active";}?> img-product-list">
									<img src="<?php echo img_url_product($img['img_path']) ?>" data-large-src="<?php echo img_url_product($img['img_path']) ?>" alt="<?php echo $product['title_product']?>" data-index="<?php echo $i?>">
								</a>
				<?php	$i++;
				endforeach;
			endif; ?>
			</div>
		</div>
	</div>
	<div class="col-md-5">
		<div class="detail-header">
			<?php $_link='http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];?>
			<div class="affiliate-link-wrapper" <?if(@$_SESSION['affiliate'] == 0) echo 'hidden'?>>
				<button class="btn btn-outline-info upper-button" id="btn-gen-link" data-link="<?=$_link?>" data-url="<?=base_url('Home/gen_link_affiliate');?>" data-id="<?= $product['id_product']?>"
				<?php if($gen != 'empty') echo 'disabled'?>>Generate Tautan Affiliasi</button>
				<div class="mt-2" <?php if($gen =='empty') echo 'hidden';?>>
					<input class='ui-input-text' id='post-shortlink' value='<?= $link;?>' readonly>
					<a class='button pink-link' href="#" id='copy-button' data-clipboard-target='#post-shortlink'><u>copy link</u></a>
				</div> 
			</div>
			<h3><?php echo $product['title_product']?></h3>
			<h6><span class="rating" data-value="<?php echo rating_product($product['id_product'])?>"></span> <a class="ml-1" href="#reviews"><?php echo $cr?> reviews</a></h6>
			<h3 class="price">Rp <?php echo rupiah($product['selling_price'])?>/<?php echo measurement($product['id_measurement'])?></h3>
		</div>
		<form>
			<div class="row">
				<div class="col-6">
					<div class="form-group">
						<label for="quantity">Stok</label>
						<div class="input-spinner">
							<input type="text" class="form-control" value="<?php echo $product['qty']?>" readonly>
						</div>
					</div>
				</div>
				<?php if($product['qty']>0 and @$_SESSION['status']!="pmadmin"): ?>
				<div class="col-6">
					<div class="form-group">
						<label for="quantity">Quantity</label>
						<div class="input-spinner">
							<input type="number" class="form-control" name="qty" id="quantity" value="1" min="1" max="<?= $product['qty']?>">
							<div class="btn-group-vertical">
								<button type="button" class="btn btn-light"><i class="fa fa-chevron-up"></i></button>
								<button type="button" class="btn btn-light"><i class="fa fa-chevron-down"></i></button>
							</div>
						</div>
					</div>
				</div>
				<?php endif; ?>
			</div>
			<?php if($product['qty']>0 and @$_SESSION['status']!="pmadmin" ): ?>
			<div class="row">
				<div class="col-6">
					<div class="form-group"> <?php $affiliate =  isset($_GET['ca']) ? $_GET['ca'] : 0?>
						<button type="button" id="checkout-now" data-affiliate="<?= $affiliate?>" data-id="<?= $product['id_product'] ?>" data-url="<?= base_url('cart/add_cart') ?>" data-href="<?= base_url('cart/checkout') ?>" class="btn btn-info btn-block">Bayar Sekarang</button>
					</div>
				</div>
				<div class="col-6">
					<div class="form-group">
						<button type="button" id="add-cart" data-affiliate="<?= $affiliate?>" data-id="<?= $product['id_product'] ?>" data-url="<?= base_url('cart/add_cart') ?>" class="btn btn-info btn-block">Tambah Keranjang</button>
					</div>
				</div>
			</div>
			<?php $data_wishlist='data-affiliate="'.$affiliate.'" data-product='.$product['id_product'].' data-wishlist=add'." data-url=".base_url('wishlist/user_wishlist'); if(!isset($product['id_wishlist']) and isset($_SESSION['id_user'])) { ?>
			<div class="form-group" >
				<a name="" id="" class="btn btn-link" href="#" role="button"></a>
				<button type="button" id="wishlist" class="btn btn-danger btn-block" <?= $data_wishlist; ?>>Tambah Wishlist</button>
			</div>
			<?php	} ?>
			<?php endif; ?>
		</form>
	</div>
</div>
<hr>
<div class="row mt-4">
	<div class="col">
		<h3>Deskripsi</h3>
		<p><?php echo $product['description']?></p>
		<hr>
		<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
			<li class="nav-item">
				<a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Komentar <span class="badge badge-light"><?php echo $cc?></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" id="pills-review-tab" data-toggle="pill" href="#pills-review" role="tab" aria-controls="pills-review" aria-selected="false">Ulasan  <span class="badge badge-light"><?php echo $cr?></span></a>
			</li>
		</ul>
		<div class="tab-content" id="pills-tabContent">
			<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
			<?php  if($this->session->userdata('status') == "pmmember" && $_SESSION['role'] == 3 ):?>
				<?php echo form_open('Home/addComment')?>
				<input type="hidden" name="id_product" value="<?php echo $product['id_product']?>">
					<div class="form-group">
						<textarea name="content"  class="form-control" id="" cols="10" rows="5"></textarea>
					</div>
					<div class="form-actions">
						<div class="text-right">
							<button type="submit" name="submit" class="btn btn-info"><i class="fa fa-send"></i> Submit</button>
						</div>
					</div>
				</form>
			<?php endif;?>
			<hr>
			<?php if ($comment !=null):
			$counter=0;
			foreach ($comment as $cm):?>
				<div class="media">			
					<img src="<?php echo img_url_user($cm['img_path'])?>" width="50" height="50" alt="<?php echo ucwords($cm['firstname']).' '. ucwords($cm['lastname']);?>" class="rounded-circle">
					<div class="media-body ml-3">
						<h5 class="mb-0"><?php echo ucwords($cm['firstname']).' '. ucwords($cm['lastname']);?></h5>
						<small class="ml-2"><?php echo tgl_indo($cm['created_at'])?></small>
						<p><?php echo $cm['content']?></p>
						<?php  if($this->session->userdata('status') == "pmadmin" && $_SESSION['role'] == 4 || $this->session->userdata('status') == "pmadmin" && $_SESSION['role'] == 5 || $cm['id_user']==@$_SESSION['id_user']):?>
						<button type="button" id="reply<?php echo $cm['id_comment']?>" data-rbtn="#reply<?php echo $cm['id_comment']?>" class="btn btn-info btn-sm reply" data-form="<?= $counter; ?>">Balas Komentar</button>					
						<?php endif;?>
					</div>
				</div>
				<div class="col-11 ml-5 mt-2 formreply" data-form="<?= $counter; ?>" id="<?php echo $cm['id_comment']?>" data-fbtn="#formreply<?php echo $cm['id_comment']?>" style="display:none;">
					<?php  if($this->session->userdata('status') == "pmadmin" && $_SESSION['role'] == 4 || $_SESSION['role'] == 5 || $cm['id_user']==$_SESSION['id_user']):?>
						<?php echo form_open('Home/addComment')?>
						<input type="hidden" name="id_product" value="<?php echo $product['id_product']?>">
						<input type="hidden" name="parent" value="<?php echo $cm['id_comment']?>">
							<div class="form-group">
								<textarea name="content"  class="form-control" id="" cols="10" rows="5"></textarea>
							</div>
							<div class="form-actions">
								<div class="text-right">
									<button type="submit" name="submit" class="btn btn-info"><i class="fa fa-send"></i> Submit</button>
								</div>
							</div>
						</form>
					<?php endif;?>
				</div>
				<?php
				foreach($reply as $re):
				if ($cm['id_comment'] == $re['parent']) :?>
				<div class="media col-11 ml-5 mt-2">
						<img src="<?php echo img_url_user($re['img_path'])?>" width="50" height="50" alt="<?php echo ucwords($re['firstname']).' '. ucwords($re['lastname']);?>" class="rounded-circle">
						<div class="media-body ml-3">
							<h5 class="mb-0"><?php echo ucwords($re['firstname']).' '. ucwords($re['lastname']);?></h5>
							<small class="ml-2"><?php echo tgl_indo($re['created_at'])?></small>
							<p><?php echo $re['content']?></p>
						</div>
				</div>	
				<?php endif; endforeach;?>			
				<hr>
			<?php $counter++; endforeach;
			else :?>
				<h5 class="text-center">Komentar Produk Ini belum tersedia</h5>
				<hr>
			<?php endif;?>
			
			</div>
			<div class="tab-pane fade" id="pills-review" role="tabpanel" aria-labelledby="pills-review-tab">
			<hr>
			<?php if ($review !=null):
			foreach ($review as $r):?>
				<div class="media">
					<img src="<?php echo img_url_product($r['img_path'])?>" width="50" height="50" alt="<?php echo ucwords($r['firstname']).' '. ucwords($r['lastname']);?>" class="rounded-circle">
					<div class="media-body ml-3">
						<h5 class="mb-0"><?php echo ucwords($r['firstname']).' '. ucwords($r['lastname']);?></h5>
						<span class="rating text-secondary" data-value="<?php echo $r['rating']?>"></span>
						<small class="ml-2"><?php echo tgl_indo($r['created_at'])?></small>
						<p><?php echo $r['content']?></p>
					</div>
				</div>
			<?php endforeach;
			else :?>
				<h5 class="text-center">Ulasan Produk Ini belum tersedia</h5>
			<?php endif;?>
			<hr>
			
	</div>
	<!-- Similar Items -->
	<h3>Similar Items</h3>
	<div class="content-slider">
		<div class="swiper-container" id="popular-slider">
			<div class="swiper-wrapper">
			
				<div class="swiper-slide">
					<div class="row no-gutters gutters-2">
					<?php $i = 0;
					foreach ($similar as $s):
						if (isset($s['id_wishlist'])) {
							if ($s['id_wishlist']!=0) {
								$class_wishlist="active";
								$data_wishlist=' data-produc='.$s['id_product'].' data-id='.$s['id_wishlist'].' data-wishlist=remove'." data-url=".base_url('wishlist/user_wishlist');
							} else {
								$class_wishlist="";
								$data_wishlist=' data-product='.$s['id_product'].' data-wishlist=add'.' data-url='.base_url('wishlist/user_wishlist');
							}
						} else {
							$class_wishlist="";
							$data_wishlist=' data-product='.$s['id_product'].' data-wishlist=add'.' data-url='.base_url('wishlist/user_wishlist');
						}
						
						if (isset($s['id_cart'])) {
							if ($s['id_cart']!=0) {
								$class_cart="active";
								$data_cart=' data-product='.$s['id_product'].' data-id='.$s['id_cart'].' data-cart=remove'." data-url=".base_url('cart/remove_cart');
							} else {
								$class_cart="";
								$data_cart=' data-product='.$s['id_product'].' data-cart=add'.' data-url='.base_url('cart/add_cart');
							}	
						} else {
							$class_cart="";
							$data_cart=' data-product='.$s['id_product'].' data-cart=add'.' data-url='.base_url('cart/add_cart');
						}
						if ($i < 4) :?>
						<div class="col-6 col-md-3 mb-2">
							<div class="card card-product">
								<?php if ($s['qty']>0 && $s['qty']<= 5) :?>
									<div class="badge badge-danger badge-pill">Tersedia <?= $s['qty']; ?></div>
								<?php elseif($s['qty']<=0):?>
									<div class="badge badge-danger badge-pill">Habis</div>
								<?php endif; ?>
								<?php if(@$_SESSION['status']!="pmadmin"): ?>
								<button class="wishlist <?= $class_wishlist; ?>" <?= $data_wishlist; ?> <?php if($this->session->userdata('status') != "pmmember"){ echo 'data-toggle="modal" data-target=".bs-example-modal-sm"';}?> title="Add to wishlist"><i class="fa fa-heart"></i></button>
								<?php endif; ?>
								<?php if($s['qty']>0 and @$_SESSION['status']!="pmadmin"):?>
								<button class="add-cart  <?= $class_cart; ?>" <?= $data_cart; ?> title="Added to cart" data-id="<?php echo $s['id_product']?>"><i class="fa fa-shopping-cart fa-lg"></i></button>
								<?php endif; ?>
								<a href="<?php echo base_url("p/".$s['slug_product'])?>">
								<img src="<?php echo img_url_product($s['img_path']) ?>" walt="<?php echo $s['title_product']?>" class="card-img-top img-product">
								</a>
								<div class="card-body">
									<span class="price"><?php echo rupiah($s['selling_price'])?></span>
									<a href="<?php echo base_url("p/".$s['slug_product'])?>" class="card-title h6"><?php echo $s['title_product']?></a>
									<div class="d-flex justify-content-between align-items-center">
									<?php if ($s['rating'] == 0):?>
									<button type="button" data-id="<?= $s['id_product'] ?>" onclick="window.location.href='<?= base_url('p/'.$s['slug_product']) ?>';" class="btn btn-outline-info btn-sm btn-block detail-product">Lihat Detail</button>
									<?php else : ?>
										<span class="rating" data-value="<?php echo $s['rating']?>"></span>
										<button type="button" data-id="<?= $s['id_product'] ?>" onclick="window.location.href='<?= base_url('p/'.$s['slug_product']) ?>';" class="btn btn-outline-info btn-sm detail-product">Lihat Detail</button>
									<?php endif;?>
									</div>
								</div>
							</div>
						</div>							
					<?php endif; $i++;
					endforeach;?>
					</div>
				</div>

				<div class="swiper-slide">
					<div class="row no-gutters gutters-2">						
					<?php $i = 0;
					foreach ($similar as $s):
						if (isset($s['id_wishlist'])) {
							if ($s['id_wishlist']!=0) {
								$class_wishlist="active";
								$data_wishlist=' data-produc='.$s['id_product'].' data-id='.$s['id_wishlist'].' data-wishlist=remove'." data-url=".base_url('wishlist/user_wishlist');
							} else {
								$class_wishlist="";
								$data_wishlist=' data-product='.$s['id_product'].' data-wishlist=add'.' data-url='.base_url('wishlist/user_wishlist');
							}
						} else {
							$class_wishlist="";
							$data_wishlist=' data-product='.$s['id_product'].' data-wishlist=add'.' data-url='.base_url('wishlist/user_wishlist');
						}
						
						if (isset($s['id_cart'])) {
							if ($s['id_cart']!=0) {
								$class_cart="active";
								$data_cart=' data-product='.$s['id_product'].' data-id='.$s['id_cart'].' data-cart=remove'." data-url=".base_url('cart/remove_cart');
							} else {
								$class_cart="";
								$data_cart=' data-product='.$s['id_product'].' data-cart=add'.' data-url='.base_url('cart/add_cart');
							}	
						} else {
							$class_cart="";
							$data_cart=' data-product='.$s['id_product'].' data-cart=add'.' data-url='.base_url('cart/add_cart');
						}
						if ($i > 3 && $i < 8) :?>
						<div class="col-6 col-md-3 mb-2">
							<div class="card card-product">
								<?php if ($s['qty']>0 && $s['qty']<= 5) :?>
									<div class="badge badge-danger badge-pill">Tersedia <?= $s['qty']; ?></div>
								<?php elseif($s['qty']<=0):?>
									<div class="badge badge-danger badge-pill">Habis</div>
								<?php endif; ?>
								<button class="wishlist <?= $class_wishlist; ?>" <?= $data_wishlist; ?> <?php if($this->session->userdata('status') != "pmmember"){ echo 'data-toggle="modal" data-target=".bs-example-modal-sm"';}?> title="Add to wishlist"><i class="fa fa-heart"></i></button>
								<?php if($s['qty']>0):?>
								<button class="add-cart  <?= $class_cart; ?>" <?= $data_cart; ?> title="Added to cart" data-id="<?php echo $s['id_product']?>"><i class="fa fa-shopping-cart fa-lg"></i></button>
								<?php endif; ?>
								<a href="<?php echo base_url("p/".$s['slug_product'])?>">
								<img src="<?php echo img_url_product($s['img_path']) ?>" walt="<?php echo $s['title_product']?>" class="card-img-top img-product">
								</a>
								<div class="card-body">
									<span class="price"><?php echo rupiah($s['selling_price'])?></span>
									<a href="<?php echo base_url("p/".$s['slug_product'])?>" class="card-title h6"><?php echo $s['title_product']?></a>
									<div class="d-flex justify-content-between align-items-center">
									<?php if ($s['rating'] == 0):?>
									<button type="button" data-id="<?= $s['id_product'] ?>" onclick="window.location.href='<?= base_url('p/'.$s['slug_product']) ?>';" class="btn btn-outline-info btn-sm btn-block detail-product">Lihat Detail</button>
									<?php else : ?>
										<span class="rating" data-value="<?php echo $s['rating']?>"></span>
										<button type="button" data-id="<?= $s['id_product'] ?>" onclick="window.location.href='<?= base_url('p/'.$s['slug_product']) ?>';" class="btn btn-outline-info btn-sm detail-product">Lihat Detail</button>
									<?php endif;?>
									</div>
								</div>
							</div>
						</div>
						<?php endif; $i++;
					endforeach;?>
					</div>
				</div>

			</div>
		</div>
		<a href="#" role="button" class="carousel-control-prev" id="popular-slider-prev"><i class="fa fa-angle-left fa-lg"></i></a>
		<a href="#" role="button" class="carousel-control-next" id="popular-slider-next"><i class="fa fa-angle-right fa-lg"></i></a>
	</div>
	<!-- /Similar Items -->
</div>
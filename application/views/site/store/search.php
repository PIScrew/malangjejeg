<div class="d-flex justify-content-between">
	<!-- Filter Modal Toggler -->
	<span class="ml-auto">
		<button class="btn btn-outline-info btn-sm" data-toggle="modal" data-target="#filterModal"><i class="fa fa-filter"></i>FILTER</button>
	</span>
</div>

<!-- Grid -->
<?php 
	$totPage = count($product) //% 8 > 0? (count($product) / 8) + 1 : count($product) / 8; 
 ?>

<h3 class="title mt-4"></h3>
<!-- url_filter -->
<div class="row no-gutters gutters-2 codepage" id="url_fil" data-codepage="<?php echo $code_page?>" data-search="<?php echo $search?>" data-url="<?php if($filter != null) echo $filter?>"  data-filter='<?php if($data_filter != null) echo $data_filter?>'>

	<?php foreach($product as $p):?>

		<div class="col-6 col-md-3 mb-2">
			<div class="card card-product">
				<?php
				if (isset($p['id_wishlist'])) {
					if ($p['id_wishlist']!=0) {
						$class_wishlist="active";
						$data_wishlist=' data-product='.$p['id_product'].' data-id='.$p['id_wishlist'].' data-wishlist=remove'." data-url=".base_url('wishlist/user_wishlist');
					} else {
						$class_wishlist="";
						$data_wishlist=' data-product='.$p['id_product'].' data-wishlist=add'.' data-url='.base_url('wishlist/user_wishlist');
					}	
				} else {
					$class_wishlist="";
					$data_wishlist=' data-product='.$p['id_product'].' data-wishlist=add'.' data-url='.base_url('wishlist/user_wishlist');
				}
				
				if (isset($p['id_cart'])) {
					if ($p['id_cart']!=0) {
						$class_cart="active";
						$data_cart=' data-product='.$p['id_product'].' data-id='.$p['id_cart'].' data-cart=remove'." data-url=".base_url('cart/remove_cart');
					} else {
						$class_cart="";
						$data_cart=' data-product='.$p['id_product'].' data-cart=add'.' data-url='.base_url('cart/add_cart');
					}	
				} else {
					$class_cart="";
					$data_cart=' data-product='.$p['id_product'].' data-cart=add'.' data-url='.base_url('cart/add_cart');
				}

				$now = strtotime('Y-m-d H:i:s');
				$expire =  strtotime('Y-m-d H:i:s',strtotime('+24 hour',strtotime($p['created_at'])));
				if (@$expire < $now) : ?>
					<div class="ribbon"><span class="bg-info text-white">New</span></div>
				<?php elseif ($p['qty']>0 && $p['qty']<= 5) :?>
					<div class="badge badge-danger badge-pill">Tersedia <?= $p['qty']; ?></div>
				<?php elseif($p['qty']<=0):?>
					<div class="badge badge-danger badge-pill">Habis</div>
				<?php endif; ?>
				<?php if(@$_SESSION['status']!="pmadmin"): ?>
				<button class="wishlist <?= $class_wishlist; ?>" <?= $data_wishlist; ?> <?php if($this->session->userdata('status') != "pmmember"){ echo 'data-toggle="modal" data-target=".bs-example-modal-sm"';}?> title="Added to wishlist" data-id="<?php echo $p['id_product']?>"><i class="fa fa-heart"></i></button>
				<?php endif; ?>
				<?php if($p['qty']>0 and @$_SESSION['status']!="pmadmin"):?>
				<button class="add-cart  <?= $class_cart; ?>" <?= $data_cart; ?> title="Added to cart" data-id="<?php echo $p['id_product']?>"><i class="fa fa-shopping-cart fa-lg"></i></button>
				<?php endif; ?>
				<a href="<?php echo base_url("p/".$p['slug_product'])?>">
				<img src="<?php echo img_url_product(img_product($p['token'],$p['token_backup'])) ?>" alt="<?php echo $p['title_product']?>" class="card-img-top img-product">
				</a>
				<div class="card-body">
					<span class="price">Rp <?php echo rupiah($p['selling_price'])?></span>
					<a href="<?php echo base_url("p/".$p['slug_product'])?>" class="card-title h6"><?php echo $p['title_product']?></a>
					<div class="d-flex justify-content-between align-items-center">
						<?php if (rating_product($p['id_product']) == 0):?>
						<button type="button" data-id="<?= $p['id_product'] ?>" onclick="window.location.href='<?= base_url('p/'.$p['slug_product']) ?>';" class="btn btn-outline-info btn-sm btn-block detail-product">Lihat Detail</button>
						<?php else : ?>
							<span class="rating" data-value="<?php echo rating_product($p['id_product'])?>"></span>
							<button type="button" data-id="<?= $p['id_product'] ?>" onclick="window.location.href='<?= base_url('p/'.$p['slug_product']) ?>';" class="btn btn-outline-info btn-sm detail-product">Lihat Detail</button>
						<?php endif;?>
					</div>
				</div>
			</div>
		</div>	

	<?php endforeach; ?>

	

</div>
<!-- /Grid -->

<!-- Pagination -->
<p class=""><b><?php echo $rows?></b> items found in <b>Katalog</b> (showing <?php echo $start.' - '.$end?>)</p>
<?php  echo @$paging ?>
<!-- /Pagination -->


<!-- Modal filter -->
<div class="modal fade modal-filter" id="filterModal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-body">
				<form action="<?php echo base_url('Home/Search')?>" action="GET">
					<div class="form-group">
						<input type="hidden" name="search" value="<?php echo $keyword?>">
						<input type="hidden" id="isHeader" name="isHeader" value="0">
						<label for="filterSortBy">Sort by</label>
						<select class="form-control custom-select" name="SortBy" id="filterSortBy">
							<option value="1">Popular</option>
							<option value="2">Price: low to high</option>
							<option value="3">Price: high to low</option>
						</select>
					</div>
					<hr>
					<div class="form-group">
						<label class="mb-5">Rentang harga</label>
						<div id="price-range-fil"></div>
						<input type="hidden" name="min">
						<input type="hidden" name="max">
					</div>
					<hr>
					<div class="form-group">
						<label>Rating</label>
						<div id="star-rating" data-score="0"></div>
					</div>
					<hr>
					<div class="form-group text-center">
						<div class="btn-group" role="group" aria-label="Basic example">
							<button type="reset" id="reset" class="btn btn-light" data-url="<?php echo base_url("Home/Search");?>">CLEAR ALL</button>
							<button class="btn btn-info btn-sm" type="submit"><span class="btn-label"></span> Simpan</button>						
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
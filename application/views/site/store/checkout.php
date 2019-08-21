<div class="row codepage" data-codepage="<?php echo $code_page ?>" data-url="<?= base_url('cart/rajaongkir_get_kota') ?>">
	<div class="col-sm-7 col-md-8">
		<h3 class="title"><i class="fa fa-map-marker"></i> Delivery address</h3>
		<span class="text-muted">Step 1 of 2</span>
		<hr>
		<form id="formCheckout" action="#" data-url="<?= base_url('cart/checkout_process'); ?>" class="bg-light p-3 border shadow-sm">
			<?php $address_counter=0; $address_counter=(isset($_SESSION['address_qr']))? 1 : 0; if (isset($_SESSION['status'])) :?>			
				<div class="card">
					<div class="text-right">
						<button class="btn btn-info btn-sm waves-effect waves-light" data-toggle="modal" data-target="#list-address" type="button"><span class="btn-label"><i class="fa as fas fa-location-arrow"></i></span> Ganti Alamat</button>
						<button class="btn btn-danger btn-sm waves-effect waves-light" data-toggle="modal" data-target="#add-address" type="button"><span class="btn-label"><i class="fa as fas fa-plus"></i></span> Tambah Alamat</button>
					</div>
					<?php foreach ($address as $a) : if ($a['set_primary']==1) { 
						if (isset($_SESSION['address_qr']) and @$_SESSION['address_qr']['set_primary']==1) {
							$address_title="Alamat Produk";
							$province_name=$_SESSION['address_qr']['province'];
							$province_id=$_SESSION['address_qr']['id_province'];
							$city_id=$_SESSION['address_qr']['id_city'];
							$city_name=$_SESSION['address_qr']['city'];
							$subdistrict_id=$_SESSION['address_qr']['id_subdistrict'];
							$subdistrict_name=$_SESSION['address_qr']['subdistrict'];
							$complete_address=$_SESSION['address_qr']['complete_address'];
							$zip_code="";
						} else {
							$address_title=$a['title_address'];
							$province_name=$a['province'];
							$province_id=$a['id_province'];
							$city_id=$a['id_city'];
							$city_name=$a['city'];
							$subdistrict_id=$a['id_subdistrict'];
							$subdistrict_name=$a['subdistrict'];
							$complete_address=$a['complete_address'];
							$zip_code=$a['zip_code'];
						}?>
					<div class="card-body ">
						<h5 class="font-weight-bold"><?= $address_title; ?></h5> 
						<h6 class="font-weight-bold">Atas Nama: <?= $a['firstname'].' '.$a['lastname'] ?></h6> 
						<input type="hidden" name="firstname" value="<?= $a['firstname']?>" required>
						<input type="hidden" name="lastname"  value="<?= $a['lastname']?>" required>
						<h6 class="font-weight-bold">Alamat: <?= $complete_address.', '.$subdistrict_name.', '.$city_name.', '.$province_name ?></h6>
						<input type="hidden" name="email"  value="<?= $a['email']?>" required>
						<input type="hidden" name="complete_address" value="<?= $complete_address ?>" required>
						<input type="hidden" name="id_province" value="<?= $province_id ?>" required> 
						<input type="hidden" name="province_name" value="<?= $province_name ?>" required>
						<input type="hidden" name="id_city" value="<?= $city_id ?>" required>  
						<input type="hidden" name="city_name" value="<?= $city_name ?>" required>  
						<input type="hidden" name="id_district" class="id_district" value="<?= $subdistrict_id ?>" required>
						<input type="hidden" name="district_name" value="<?= $subdistrict_name ?>" required>
						<?php if($zip_code!=""): ?>
						<h6 class="font-weight-bold">Kode Pos:<?= $a['zip_code'] ?></h6>
						<?php endif;?>
						<input type="hidden" name="zip_code" value="<?= $zip_code ?>" > 
						<h6 class="font-weight-bold">No Handphone:<?= $a['phone'] ?></h6>
						<input type="hidden" name="phone" value="<?= $a['phone']?>" required> 
					</div>
					<?php $address_counter++; } endforeach; ?>
				</div>
			<?php else : ?>
				<div class="form-group">
					<label for="checkoutName">Nama Depan</label>
					<input type="text" name="firstname" class="form-control" id="checkoutName" required>
				</div>
				<div class="form-group">
					<label for="checkoutName">Nama Belakang</label>
					<input type="text" name="lastname" class="form-control" id="checkoutName" required>
				</div>
				<div class="form-group">
					<label for="checkoutAddr1">Alamat</label>
					<input type="text" name="complete_address" class="form-control" id="checkoutAddr1" value="<?= @$_SESSION['address_qr']['complete_address']?>" required>
				</div>
				<div class="form-row">
					<div class="form-group col-6">
						<label for="checkoutPhone">Email</label>
						<input type="email" name="email" class="form-control" required>
					</div>
					<div class="form-group col-6">
						<label for="checkoutPhone">Phone</label>
						<input type="number" name="phone" minlength="10" pattern="[0]{1}[0-9]{9,12}" class="form-control" id="checkoutPhone"  required>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-6">					
						<label for="checkoutZIP">ZIP Code</label>
						<input type="number" pattern="[0]{1}[0-9]{9,12}" name="zip_code" class="form-control" id="checkoutZIP">
					</div>
					<div class="form-group col-6">
						<label for="checkoutState">Provinsi</label>
						<input name="province_name"  value="<?= @$_SESSION['address_qr']['province']?>" type="hidden">
						<select class="custom-select form-control select-province" data-url="<?= base_url('cart/rajaongkir_get_kota') ?>" name="id_province" required>
							<option value="">Pilih Provinsi</option>
							<?php foreach($province as $pr):?>
								<?php if (@$_SESSION['address_qr']['id_province']==$pr->province_id) :?>
									<option value="<?php echo $pr->province_id;?>" selected><?php echo $pr->province?></option>
								<?php else: ?>
								<option value="<?php echo $pr->province_id;?>"><?php echo $pr->province?></option>
							<?php endif; endforeach;?>
						</select>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-6">
						<label for="checkoutState">Kota</label>
						<input name="city_name" value="<?= @$_SESSION['address_qr']['city']?>" type="hidden">
						<select class="custom-select form-control select-city" data-url="<?= base_url('cart/rajaongkir_get_kecamatan') ?>" name="id_city" required>
							<option value="">Pilih Kota</option>
							<?php if (isset($_SESSION['address_qr']['id_city'])) :?>
							<option value="<?= @$_SESSION['address_qr']['id_city']?>" selected><?= @$_SESSION['address_qr']['city']?></option>
							<?php endif; ?>
						</select>
					</div>
					<div class="form-group col-6">
						<label for="checkoutState">Kecamatan</label>
						<input name="district_name"  value="<?= @$_SESSION['address_qr']['subdistrict']?>" type="hidden">
						<select class="custom-select select-district id_district" name="id_district" required>
							<option value="">Pilih Kecamatan</option>
							<?php if (isset($_SESSION['address_qr']['id_subdistrict'])) :?>
							<option value="<?= @$_SESSION['address_qr']['id_subdistrict']?>" selected><?= @$_SESSION['address_qr']['subdistrict']?></option>
							<?php endif; ?>
						</select>
					</div>
				</div>
			<?php endif;?>
			<div class="form-group">
				<label for="checkoutState">Metode Pembayaran</label>
				<select class="custom-select payment_method" name="payment_method" required>
					<option value=""> Pilih Metode</option>
					<?php if (isset($_SESSION['address_qr']['id_city'])) :
					$selected="selected";
					 endif; ?>
					<option value="0" <?= @$selected; ?>>COD</option>
					<option value="1">Transfer Bank</option>
				</select>
			</div>
			<?php $weight=0; $subtotal=0; foreach($cart as $c): 
			$weight+=$c['weight']*$c['qty'];
			$subtotal+=$c['selling_price']*$c['qty'];
			endforeach; ?>
			<input type="hidden" name="weight" value=<?= $weight; ?>>
			<input type="hidden" name="price_unique" value=<?= $unique_payment; ?>>
			<input type="hidden" name="delivery_fee" value=0 >
			<input type="hidden" name="total_price" value=<?= $subtotal; ?>>
			<div class="transfer">
				<div class="form-group">
					<label for="checkoutState">Bank</label>
					<select class="custom-select bank" name="bank">
						<option value=""> Pilih Bank</option>
						<?php foreach ($bank as $b ):?>
							<option value="<?php echo $b['id']?>"><?php echo $b['title']?></option>
						<?php endforeach;?>
					</select>
				</div>			
				<div class="d-flex flex-nowrap justify-content-between choseshipping" data-url="<?= base_url('cart/rajaongkir_get_cost'); ?>">
					<div class="col-md-4">
						<input type="radio" name="kurir" id="k1" value="jne">
						<label for="k1">
							<img id="img1" src="<?php echo assets_url('img/site', 'jne.png') ?>">
						</label>
					</div>
					<div class="kurir col-md-4">
						<input type="radio" name="kurir" value="pos" id="k2">
						<label for="k2">
							<img class="img-fluid" id="img2" src="<?php echo assets_url('img/site', 'pos.png') ?>">
						</label>
					</div>
					<div class="kurir col-md-4">
						<input type="radio" name="kurir" value="tiki" id="k3">
						<label for="k3">
							<img class="img-fluid" id="img3" src="<?php echo assets_url('img/site', 'tiki.png') ?>">
						</label>
					</div>
				</div>
				<div class="form-group shipping-type">
				</div>
				<div class="col-md-12">
					<div class="loader"></div>
				</div>
			</div>
			<button type="submit" class="btn btn-primary <?php echo ($address_counter==0)? 'alert_address':''; ?>">Next <i class="fa fa-angle-right"></i></button>
		</form>
	</div>
	<div class="col-sm-5 col-md-4 pt-5">
		<h4 class="title mb-3">Order summary</h4>
		<?php $subtotal=0; foreach($cart as $c): ?>
		<div class="media border-bottom mb-3">
			<?php if ($c['image'] == null) :?>
				<img src="<?php echo img_url($system['img_product_default']) ?>" width="50" height="50" alt="<?= $c['title_product'];?>">
			<?php else :?>
				<img src="<?php echo img_url($c['image']) ?>" width="50" height="50" alt="<?= $c['title_product'];?>">
			<?php endif;?>
			<div class="media-body ml-3">
				<h6><?= $c['title_product'];?></h6>
				<div><?= $c['qty'] ?> x <span class="price">Rp <?= rupiah($c['selling_price']);?></span></div>
			</div>
		</div>
		<?php $subtotal+=$c['selling_price']*$c['qty']; endforeach; ?>
		<div class="d-flex justify-content-between">
			<span>Items</span>
			<span>Rp <?= rupiah($subtotal) ?></span>
		</div>
		<div class="d-flex justify-content-between">
			<span>Unique Code</span>
			<span>Rp <?= rupiah($unique_payment);?></span>
		</div>
		<div class="d-flex justify-content-between">
			<span>Shipping</span>
			<span id="shipping_price">Rp 0</span>
		</div>
		<hr>
		<div class="box-total">
			<h4>Total</h4>
			<h4><span id="total_price" data-totalprice="<?= $unique_payment+$subtotal;?>">Rp <?= rupiah($unique_payment+$subtotal);?></span></h4>
		</div>
	</div>
</div>
<!-- sample modal content -->
<div id="list-address" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Daftar Alamat</h4>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			</div>
			<form id="formAddress" action="#" data-url="<?= base_url('cart/change_address'); ?>">
			<div class="modal-body custom-scroll changeAdress" style="max-height: 315px;">
				<?php $counter=0; foreach ($address as $a) :  ?>
				<?php if (isset($_SESSION['address_qr']) and $counter==0) : ?>
				<div class="card">
					<input type="radio" name="id_address" value="<?= $a['id_address'] ?>" <?= ($_SESSION['address_qr']['set_primary']==1)? "checked" : "" ;?> >
					<input type="hidden" name="session_address" value="session" >
					<div class="card-body ">
						<h5 class="font-weight-bold">Alamat Produk </h5>
						<h6 class="font-weight-bold">Atas Nama: <?= $a['firstname'].' '.$a['lastname'] ?></h6> 
						<h6 class="font-weight-bold">Alamat: <?= $_SESSION['address_qr']['complete_address'].', '.$_SESSION['address_qr']['subdistrict'].', '.$_SESSION['address_qr']['city'].', '.$_SESSION['address_qr']['province'] ?></h6>
					</div>
				</div>
				<br>
				<?php $counter=($_SESSION['address_qr']['set_primary']==1)? 1 : 0 ; endif; ?>
				<div class="card">
					<input type="radio" name="id_address" value="<?= $a['id_address'] ?>" <?= ($counter==0)? "checked" : ""; ?>>
					<div class="card-body ">
						<h5 class="font-weight-bold"><?= $a['title_address'] ?></h5>
						<h6 class="font-weight-bold">Atas Nama: <?= $a['firstname'].' '.$a['lastname'] ?></h6> 
						<h6 class="font-weight-bold">Alamat: <?= $a['complete_address'].', '.$a['subdistrict'].', '.$a['city'].', '.$a['province'] ?></h6>
						<h6 class="font-weight-bold">Kode Pos:<?= $a['zip_code'] ?></h6> 
						<h6 class="font-weight-bold">No Handphone:<?= $a['phone'] ?></h6>
					</div>
				</div>
				<br>
				<?php $counter++; endforeach; ?>
			</div>
			<div class="modal-footer">
				<button type="submit" class="btn btn-danger waves-effect waves-light">Save changes</button>
			</div>
			</form>
		</div>
	</div>
</div>
<!-- /.modal -->
<!-- Tambah alamat -->
<div id="add-address" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"
 style="display: none;">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Tambah Alamat</h4>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			</div>
			<div class="modal-body">
				<form action="<?php echo base_url('cart/addAddress')?>" method="POST">
					<div class="form-group">
						<label for="recipient-name" class="control-label">Nama Alamat:</label>
						<input type="text" class="form-control" name="title_address">
					</div>
					<div class="form-group">
						<label for="recipient-name" class="control-label">Nama Penerima:</label>
						<input type="text" class="form-control" name="recipient_name">
					</div>
					<div class="form-group">
						<label for="recipient-name" class="control-label">No Handphone:</label>
						<input type="text" class="form-control" name="phone" id="recipient-name">
					</div>
					<div class="form-group">
						<label class="control-label">Provinsi:</label>
						<input name="province_name"  value="" type="hidden">
						<select class="custom-select form-control select-province" data-url="<?= base_url('cart/rajaongkir_get_kota') ?>" name="id_province" required>
							<option value="">Pilih Provinsi</option>
							<?php foreach($province as $pr):?>
								<option value="<?php echo $pr->province_id;?>"><?php echo $pr->province?></option>
							<?php endforeach;?>
						</select>
					</div>
					<div class="form-group">
						<label for="recipient-name" class="control-label">Kota:</label>
						<input name="city_name" value="" type="hidden">
						<select class="custom-select form-control select-city" data-url="<?= base_url('cart/rajaongkir_get_kecamatan') ?>" name="id_city" required>
							<option value="">Pilih Kota</option>
						</select>
					</div>
					<div class="form-group">
						<label class="control-label">Kecamatan:</label>
						<input name="district_name"  value="" type="hidden">
						<select class="custom-select select-district" name="id_district" required>
							<option value="">Pilih Kecamatan</option>
						</select>
					</div>
					<div class="form-group">
						<label for="recipient-name" class="control-label">Alamat Lengkap:</label>
						<textarea name="complete_address" id="" cols="100" rows="3" name="complete_address" class="form-control"></textarea>
					</div>
					<div class="form-group">
						<label for="recipient-name" class="control-label">Kode Pos:</label>
						<input type="text" class="form-control" name="zip_code">
					</div>
			</div>
			<div class="modal-footer">
				<button type="submit" name="submit" class="btn btn-danger waves-effect waves-light">Save changes</button>
			</div>
			</form>
		</div>
	</div>
</div>
<!-- /.end tambah alamat -->
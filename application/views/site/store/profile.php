<div class="card user-card codepage" data-codepage="<?php echo $code_page ?>" data-url="<?= base_url('Cart/rajaongkir_get_kota') ?>">
	<div class="card-body">
		<div class="media">
			<img src="<?php echo img_url($profile['img_path']) ?>" width="100" height="100" class="img-thumbnail rounded-circle"
			 alt="<?php echo ucwords(@$profile['firstname']).' '. ucwords(@$profile['lastname']);?>">
			<div class="media-body ml-3 pt-3">
				<h4><?php echo ucwords(@$profile['firstname']).' '. ucwords(@$profile['lastname']);?></h4>
				<div class="small text-muted">Terdaftar <?php echo tgl_indo(@$profile['created_at'])?></div>
				<div class="small text-muted">Email: <?php echo @$profile['email']?></div>
			</div>
		</div>
		<hr>	
		<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
			<li class="nav-item">
				<a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#profile" role="tab" aria-controls="profile"
				 aria-selected="true">Profile</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#orders" role="tab" aria-controls="orders"
				 aria-selected="false">Pembelian</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" id="pills-address-tab" data-toggle="pill" href="#Address" role="tab" aria-controls="Address"
				 aria-selected="false">Alamat</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#wishlist" role="tab" aria-controls="wishlist"
				 aria-selected="false">Wishlist</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" id="pills-ticket-tab" data-toggle="pill" href="#ticket" role="tab" aria-controls="ticket"
				 aria-selected="false">Ticket</a>
			</li>
		</ul>
		<hr>
		<div class="tab-content" id="pills-tabContent">
			<div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profileb">
				<form id="user-profile" method="POST" data-url="<?= base_url("Profile/updateData")?>">
					<div class="form-row">
						<div class="form-group col-sm-6">
							<label for="profileFirstName">Username</label>
							<input type="text" class="form-control" id="profileUserName" name="username" value="<?php echo @$profile['username']?>" readonly>
						</div>
						<div class="form-group col-sm-6">
							<label for="profileEmail">Email address</label>
							<input type="email" class="form-control" id="profileEmail" name="email"  value="<?php echo @$profile['email']?>" readonly>
						</div>
						<div class="form-group col-sm-6">
							<label for="profileFirstName">First Name</label>
							<input type="text" class="form-control" id="profileFirstName" name="firstname" value="<?php echo @$profile['firstname']?>" readonly>
						</div>
						<div class="form-group col-sm-6">
							<label for="profileLastName">Last Name</label>
							<input type="text" class="form-control" id="profileLastName" name="lastname" value="<?php echo @$profile['lastname']?>" readonly>
						</div>
						<div class="form-group col-sm-6">
							<label for="profilePhone">Jenis Kelamin</label>
							<input type="text" class="form-control" id="profileGenderR" name="genderR" value="<?php if(@$profile['gender'] == 1) echo 'Laki-laki'; elseif(@$profile['gender'] == 2) echo 'Perempuan'; else echo 'Lainnya';?>" readonly> 
							<select class="custom-select form-control" id="profileGenderW" name="gender" hidden>
								<option value="1" <?php if(@$profile['gender'] == 1) echo 'selected';?>>Laki-laki</option>
								<option value="2" <?php if(@$profile['gender'] == 2) echo 'selected';?>>Perempuan</option>
							</select>
						</div>
						<div class="form-group col-sm-6">
							<label for="profileFirstName">Phone Number</label>
							<input type="text" class="form-control" id="profilePhone" name="phone" value="<?php echo @$profile['phone']?>" readonly>
						</div>
						<div class="form-group col-sm-6">
							<label for="profileFirstName">Bank Account</label>
							<input type="text" class="form-control" id="bankAccount" name="bank_account" value="<?php echo @$profile['bank_account']?>" readonly>
						</div>
						<div class="form-group col-sm-6">
							<label for="profilePhone">Line</label>
							<input type="text" class="form-control" id="profileLine" name="line" value="<?php echo @$profile['line']?>" readonly>
						</div>
						<div class="form-group col-sm-6">
							<label for="profilePhone">Whatsapp</label>
							<input type="number" class="form-control" id="profileWa" name="whatsapp" value="<?php echo @$profile['whatsapp']?>" readonly>
						</div>
						<div class="form-group col-sm-6">
							<label for="profilePhone">Telegram</label>
							<input type="number" class="form-control" id="profileTelegram" name="telegram" value="<?php echo @$profile['telegram']?>" readonly>
						</div>
						<!-- <div class="form-group col-12">
							<button type="submit" class="btn btn-success btn-block">SAVE</button>
						</div> -->
					</div>
					<div style="float:right;">
						<button class="btn btn-info" id="editProfile"><i class="fa fa-edit"></i> Ubah</button>
						<button type="submit" class="btn btn-info" id="updateProfile" hidden>Simpan</button>
					</div>
				</form>
			</div>
			<div class="tab-pane fade" id="orders" role="tabpanel" aria-labelledby="orders">
				<div class="table-responsive">
					<table class="table table-hover">
						<thead class="thead-light">
							<tr>
								<th scope="col">Order ID</th>
								<th scope="col">Date</th>
								<th scope="col">Total</th>
								<th scope="col">Status</th>
							</tr>
						</thead>
						<tbody>
						<?php foreach (@$transaction as $tr):?>
							<tr>
								<th scope="row"><a href="<?php echo base_url('invoice/'.$tr['code_order'])?>" class="text-info"><?php  echo $tr['code_order']?></a></th>
								<td><?php  echo tgl_indo($tr['created_at'])?></td>
								<td><?php  echo rupiah($tr['total_price_unique'])?></td>
								<td>
										<?php if ($tr['status'] == -1):?>
										    <span class="badge badge-danger">Expired</span>
										<?php elseif($tr['status'] == -2):?>
                        <span class="badge badge-danger">Failed</span>
										<?php elseif($tr['status'] == 0):?>
                        <span class="badge badge-warning">Unpaid</span>
										<?php elseif($tr['status'] == 1):?>
                        <span class="badge badge-info">Paid</span>
										<?php elseif($tr['status'] == 2):?>
                        <span class="badge badge-primary">Deliver</span>
										<?php elseif($tr['status'] == 3):?>
                        <span class="badge badge-success">Success</span>
										<?php endif;?>
								</td>
							</tr>
						<?php endforeach;?>
						</tbody>
					</table>
				</div>
			</div>
			<div class="tab-pane fade" id="Address" role="tabpanel" aria-labelledby="Address">
				<h3 class="title">Alamat Pengiriman <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#addAdress"><i class="fa fa-edit"></i> Tambah Alamat</button></h3> 
				<table class="table">
					<tbody>

						<tr>
							<td width="80%">
								<table class="table mb-3 table-sm">
									<tbody>
										<tr>
											<td class="border-top-0">
												<strong>Alamat Lengkap</strong>
												<div><?php echo $add_defl['complete_address']?> <?php echo $add_defl['zip_code']?></div>
											</td>
										</tr>
										<tr>
											<td>
												<strong>Kecamatan</strong>
												<div><?php echo $add_defl['subdistrict']?></div>
											</td>
										</tr>
										<tr>
											<td>
												<strong>Kota / Kabupaten</strong>
												<div><?php echo $add_defl['city']?></div>
											</td>
										</tr>
										<tr>
											<td>
												<strong>Provinsi</strong>
												<div><?php echo $add_defl['province']?></div>
											</td>
										</tr>
									</tbody>
								</table>
							</td>
						</tr>
						<?php foreach($address as $a):?>
						<tr>
							<td>
								<h6><?php echo $a['title_address']?></h6>
								<h6><?php echo $a['recipent_name']?> <?php echo $a['phone']?>
								<br><?php echo $a['complete_address']?> <?php echo $a['zip_code']?>
								<br><?php echo $a['subdistrict']?> <?php echo $a['city']?>
								<br><?php echo $a['province']?>
								</h6>

							</td>
							<td class="text-right">
								<?php if ($a['set_primary'] != 1) :?>
								<button class="btn btn-info btn-sm set-primary" data-id="<?php echo $a['id_address']?>" data-dir="<?php echo base_url('Profile/setAdressPrimary/')?>">Set Utama</button>
								<button class="btn btn-sm btn-outline-warning rounded del_address" data-id="<?php echo $a['id_address']?>"
										 data-dir="<?php echo base_url('Profile/delAddres/')?>">Remove</button>
								<?php endif;?>
							</td>
						</tr>
					<?php endforeach;?>
					</tbody>
				</table>
			</div>
			<div class="tab-pane fade" id="wishlist" role="tabpanel" aria-labelledby="wishlist">
				<table class="table table-cart">
					<tbody>
						<?php foreach ($wishlist as $wh ):?>
						<tr>
							<td>
								<button class="btn btn-sm btn-outline-warning rounded-circle mb-3 wishlist" data-id="<?php echo $wh['id_wishlist']?>"
										 data-dir="<?php echo base_url('Profile/removeWishlist/')?>" title="Remove"><i class="fa fa-close"></i></button>
							</td>
							<td>

								<a href="<?php echo base_url("p/".$wh['slug_product'])?>">
									<?php if (img_product($wh['token'],$wh['token_backup']) == null) :?>
										<img src="<?php echo img_url($system['img_product_default']) ?>" width="50" height="50" alt="<?php echo $wh['title_product']?>">
									<?php else :?>
										<img src="<?php echo img_url(img_product($wh['token'],$wh['token_backup'])) ?>" width="50" height="50" alt="<?php echo $wh['title_product']?>">
									<?php endif;?>
								</a>
							</td>
							<td>
								<h6><a href="<?php echo base_url("p/".$wh['slug_product'])?>" class="text-body"><?php echo $wh['title_product']?></a></h6>
								<h6 class="text-muted"><?php echo rupiah($wh['selling_price'])?></h6>
								<?php if ($wh['qty'] == 0):?>
								<span class="badge badge-dark font-weight-light">Out of Stock</span>
								<?php else :?>								
								<span class="badge badge-success font-weight-light">In Stock</span>
								<?php endif;?>
							</td>
							<td>
								<form method="post" class="add_cart">	
									<input type="hidden" name="id_product" value="<?php echo $wh['id_product']?>">
									<input type="hidden" name="affiliate" value="<?php echo $wh['id_affiliate']?>">
									<button class="btn btn-info btn-sm submit" data-dir="<?php echo base_url('Profile/add_cart/').$wh['id_product']?>">Tambah Keranjang</button>
								</form>
							</td>
						</tr>
						<?php endforeach;?>
					</tbody>
				</table>
			</div>
			<div class="tab-pane fade" id="ticket" role="tabpanel" aria-labelledby="ticket">
				<?php if($code_page == "profile"):?>
				<div class="table-responsive">
				<h3 class="title"><a href="<?php echo base_url('Profile/addTicket')?>" target="_blank" ><button class="btn btn-info btn-sm" ><i class="fa fa-edit"></i> Pengaduan Baru</button></a></h3> 
					<table class="table table-hover">
						<thead class="thead-light">
							<tr>
								<th scope="col" width="10%">Ticket ID</th>
								<th scope="col" width="60%">Judul Ticket</th>
								<th scope="col">Date</th>
								<th scope="col">Status</th>
							</tr>
						</thead>
						<tbody>
						<?php foreach (@$ticket as $t):?>
							<tr>
								<th scope="row"><a href="<?php echo base_url('ticket/'.$t['no_ticket'])?>" class="text-info"><?php  echo $t['no_ticket']?></a></th>
								<td><a href="<?php echo base_url('ticket/'.$t['no_ticket'])?>" class="text-info"><?php  echo $t['title']?></a></td>
								<td><?php  echo tgl_indo($t['created_at'])?></td>
								<td>
										<?php if ($t['status'] == 0):?>
                        <span class="badge badge-warning">Submit</span>
										<?php elseif($t['status'] == 1):?>
                        <span class="badge badge-info">Open</span>
										<?php elseif($t['status'] == 2):?>
                        <span class="badge badge-primary">Pending</span>
										<?php elseif($t['status'] == 3):?>
                        <span class="badge badge-success">Resolve</span>
										<?php endif;?>
								</td>
							</tr>
						<?php endforeach;?>
						</tbody>
					</table>
				</div>
				<?php elseif($code_page == "replayTicket"):?>
				<?php endif;?>
			</div>
		</div>
	</div>
</div>
<!-- sample modal content -->
<div id="addAdress" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"
 style="display: none;">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Tambah Alamat</h4>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			</div>
			<div class="modal-body">
				<form action="<?php echo base_url('Profile/addAddress')?>" method="POST">
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
						<select class="select2 select2-label form-control select-province" name="id_province" required>
							<option>Select</option>
							<?php foreach($province as $pr):?>
								<option value="<?php echo $pr->province_id;?>"><?php echo $pr->province?></option>
							<?php endforeach;?>
						</select>
					</div>
					<div class="form-group">
						<label for="recipient-name" class="control-label">Kota:</label>
						<input name="city" value="" type="hidden">
						<select class="select2 select2-label form-control  select-city" data-url="<?= base_url('cart/rajaongkir_get_kecamatan') ?>" name="id_city" required>
							<option>Select</option>
						</select>
					</div>
					<div class="form-group">
						<label class="control-label">Kecamatan:</label>
						<input name="subdistrict" value="" type="hidden">
						<select class="custom-select select-district"name="id_district" required>
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
<!-- /.modal -->
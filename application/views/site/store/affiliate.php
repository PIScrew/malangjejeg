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

			<div>
				<p class="mb-0">Komisi bulan ini</p>
				<h4><b>Rp <?=$totSaldo['saldo']?>,00</b></h4>
				<button class="btn btn-outline-info" id="<?php if($enable)echo 'btn-comission'; else echo 'warn-comission';?>" 
					data-url="<?= base_url('profile/withdraw_comission')?>">Tarik Komisi</button>
			</div>
		</div>
		<hr>	
		<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
			<li class="nav-item">
				<a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#selling" role="tab" aria-controls="selling"
				 aria-selected="true">Penjualan</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#links" role="tab" aria-controls="links"
				 aria-selected="false">Daftar Tautan</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#withdrawals" role="tab" aria-controls="withdrawals"
				 aria-selected="false">Riwayat Penarikan</a>
			</li>
		</ul>
		<hr>
		<div class="tab-content" id="pills-tabContent">
			<div class="tab-pane fade show active" id="selling" role="tabpanel" aria-labelledby="selling">
				<div class="table-responsive">
					<table class="table table-hover">
						<thead class="thead-light">
							<tr>
								<th scope="col">No</th>
								<th scope="col">Nama Produk</th>
								<th scope="col">Tanggal Transaksi</th>
								<th scope="col">Harga</th>
								<th scope="col">Komisi</th>
							</tr>
						</thead>
						<tbody>
						<?php $no = 1; foreach ($listTrans as $lt):?>
						<?php if($lt['info']==='komisi'):?><tr>
								<!-- <th scope="row"><a href="<?php echo base_url('invoice/'.$tr['code_order'])?>" class="text-info"><?php  echo $tr['code_order']?></a></th> -->
								<td><?php  echo $no; $no++;?></td>
								<td><?php  echo $lt['title_product'];?></td>
								<td><?php  echo $lt['created_at'];?></td>
								<td><?php  echo $lt['selling_price'];?></td>
								<td><?php  echo $lt['saldo'];?></td>
							</tr><?php endif;?> 
						<?php endforeach;?>
						</tbody>
					</table>
				</div>
			</div>
			
			<div class="tab-pane fade" id="links" role="tabpanel" aria-labelledby="links">
				<div class="table-responsive">
					<table class="table table-hover">
						<thead class="thead-light">
							<tr>
								<th scope="col">No</th>
								<th scope="col">Nama Produk</th>
								<th scope="col">Tanggal Dibuat</th>
								<th scope="col">Harga</th>
								<th scope="col">Komisi</th>
								<th scope="col">Tautan</th>
								<th scope="col">Aksi</th>
							</tr>
						</thead>
						<tbody>
						<?php $no=1; foreach ($listLink as $ll):?>
							<tr>
								<!-- <th scope="row"><a href="<?php echo base_url('invoice/'.$tr['code_order'])?>" class="text-info"><?php  echo $tr['code_order']?></a></th> -->
								<td><?php echo $no;?></td>
								<td><?php echo $ll['title_product'];?></td>
								<td><?php echo $ll['created_at'];?></td>
								<td><?php echo $ll['selling_price'];?></td>
								<td><?php echo $ll['affiliate_price'];?></td>
								<td> <input class='ui-input-text' id='post-shortlink-<?=$no?>' value='<?= $ll['link'];?>' readonly></td>
								<td> <a class='button' id='copy-button' href='#' data-clipboard-target='#post-shortlink-<?php echo $no; $no++;?>'><i class='fa fa-copy'></i></a>
								<a class='del-link' data-url='<?= base_url('Profile/del_link')?>' data-id='<?= $ll["id_affiliate"]?>' href='#'><i class='fa fa-times-circle red-link'></i></a></td>
							</tr>
						<?php endforeach;?>
						</tbody>
					</table>
				</div>
			</div>

			<div class="tab-pane fade" id="withdrawals" role="tabpanel" aria-labelledby="withdrawals">
				<div class="table-responsive">
					<table class="table table-hover">
						<thead class="thead-light">
							<tr>
								<th scope="col">No</th>
								<th scope="col">Tanggal ditarik</th>
								<th scope="col">Tanggal ditransfer</th>
								<th scope="col">Total</th>
								<th scope="col">Status</th>
							</tr>
						</thead>
						<tbody>
						<?php $no = 1; foreach ($listWith as $lw):?>
							<?php if($lw['info'] === "tarik"):?>
							<tr>
								<td><?php  echo $no; $no++;?></td>
								<td><?php  echo $lw['created_at'];?></td>
								<td><?php  if($lw['status']==="terbayar")echo $lw['updated_at']; else echo "-";?></td>
								<td><?php  echo $lw['saldo']*-1;?></td>
								<td><?php  $stat = $lw['status']==="terbayar"?"success":"warning"; echo "<span class='badge badge-".$stat."'>".$lw['status']."</span>";?></td>
							</tr>
							<?php endif;?>
						<?php endforeach;?>
						</tbody>
					</table>
				</div>
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
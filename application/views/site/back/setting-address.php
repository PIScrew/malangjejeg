<section class="section codepage" data-codepage="<?php echo $codepage ?>"  data-url="<?= base_url('Address/getCity') ?>">

<?php if(!empty($_SESSION['success'])):?>
			<div class="alert alert-success">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
				<h3 class="text-success"><i class="fa fa-check-circle"></i> Success</h3> <?php echo $_SESSION['success']?>.
			</div>
		<?php elseif(!empty($_SESSION['fail'])):?>
			<div class="alert alert-warning">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
				<h3 class="text-warning"><i class="fa fa-exclamation-triangle"></i> Warning</h3> <?php echo $_SESSION['fail']?>.
			</div>
		<?php endif;?>
<?php $isEdit = $codepage == "set_address"? true: false; ?>
	<div class="row">
		<div class="col-4">
			<div class="card">
				<div class="card-body">
          <h5>Alamat Sekarang</h5>
				<?php echo $address['province']; ?>
				<br><?php echo $address['city'];?>
				<?php echo $address['subdistrict'];?>					
				<?php echo $address['complete_address'];?>
				<?php echo $address['zip_code'];?>
				<?php echo $address['phone'];?>
				
				</div>
			</div>
		</div>
		<div class="col-8">
			<div class="card">
				<div class="card-body">
				<?= form_open('Admin/Setting/setAddress');  ?> 
						<div class="input-group set-address">
							<div class="input-group-prepend">
								<span class="input-group-text">Provinsi</span>
							</div>
							<input name="province_name"  value="" type="hidden">
                			<select class="form-control select-province" name="id_province" required>
                				<option>Pilih...</option>
								<?php foreach($province as $pr):?>
									<option value="<?php echo $pr->province_id;?>"><?php echo $pr->province?></option>
                				<?php endforeach;?>
                			</select>
            </div>
            <div class="input-group set-address">
							<div class="input-group-prepend">
								<span class="input-group-text">Kota/Kabupaten</span>
							</div>
								<input name="city" value="" type="hidden">
                				<select class="form-control  select-city" data-url="<?= base_url('Address/getSubdistrict') ?>" name="id_city" required>
                  					<option >Pilih...</option> 
                			</select>
            </div>
            <div class="input-group set-address">
							<div class="input-group-prepend">
								<span class="input-group-text">Kecamatan</span>
							</div>
							<input name="subdistrict" value="" type="hidden">
                <select class="form-control select-district"name="id_district" required>
                  <option value="">Pilih Kecamatan</option>
                </select>
            </div>
            <div class="input-group set-address">
              <div class="col-6">
                <label for="Kodepos">Kodepos</label>
                <input type="text" name="zip_code" class="form-control">
              </div>
              <div class="col-6">
                <label for="Telp">No Telp</label>
                <input type="text" name="phone" class="form-control">
              </div>
							
            </div>
            <div class="set-address">
							<label for="">Alamat Lengkap</label>
              <textarea name="complete_address" id="" class="form-control" cols="30" rows="10"></textarea>
            </div>
            <div class="form-group m-b-0 text-right">
              <button class="btn btn-success btn-sm waves-effect waves-light" type="submit" name="submit"><span class="btn-label"><i class="fas fa-save"></i></span> Update</button>
            </div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

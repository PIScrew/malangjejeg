<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid" data-codepage="<?= $codepage ?>">
	<!-- ============================================================== -->
	<!-- Start Page Content -->
	<!-- ============================================================== -->
	<!-- Column rendering -->
  <?php $isEdit = $page_title == "Perbarui Donatur"? true: false; ?>
	<div class="row">
		<div class="col-12">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Kategori</h4>
          <!-- <h6 class="card-subtitle">Untuk mengatur ongkos kirim.</h6> -->
        </div>
        <hr class="m-t-0">
        <form id="add_donatur" method="post" action="<?php if($isEdit) echo base_url('admin/Donator/editDonator/'.$d['id_donator']); else echo base_url('admin/Donator/addDonator');?>" data-dir="" data-url="">
          <div class="card-body">
            <div class="form-group row p-b-15">
              <label for="inputEmail3" class="col-sm-3 text-right control-label col-form-label">Nama Donatur</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="donatur_name" id="inputEmail3" placeholder="Masukkan Nama" value="<?php if($isEdit) echo $d['donatur_name'];?>" >
              </div>
            </div>
            <div class="form-group row p-b-15">
              <label for="inputEmail3" class="col-sm-3 text-right control-label col-form-label">Nominal</label>
              <div class="col-sm-9">
              <input type="text" class="form-control" name="nominal" id="inputEmail3" placeholder="Masukkan Nominal" value="<?php if($isEdit) echo $d['nominal'];?>">
              </div>
            </div>
          </div>
          <hr>
          <div class="card-body">
            <div class="form-group m-b-0 text-right">
              <button type="submit" name="submit" class="btn btn-info waves-effect waves-light">Save</button>
            </div>
          </div>
        </form>
      </div>
		</div>
	</div>

</div>

<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid" data-codepage="<?php echo $codepage ?>">
	<!-- ============================================================== -->
	<!-- Start Page Content -->
	<!-- ============================================================== -->
	<!-- Column rendering -->
  <?php $isEdit = $page_title == "Perbarui Volunteer"? true: false; ?>
	<div class="row">
		<div class="col-12">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Form Tambah Volunteer</h4>
          <!-- <h6 class="card-subtitle">Untuk mengatur ongkos kirim.</h6> -->
        </div>
        <hr class="m-t-0">
        <!-- <?php echo form_open_multipart('admin/Volunteer/addVolunteer/'.$volunteer['id'], array("class" => "form-horizontal r-separator"));?> -->
        <form id="add_volunteer" method="post" action="<?php if($isEdit) echo base_url('admin/Volunteer/editVolunteer/'.$volunteer['id_volunteer']); else echo base_url('admin/Volunteer/addVolunteer');?>" data-dir="" data-url="">
          <div class="card-body">
            <div class="form-group row p-b-15">
              <label for="inputEmail3" class="col-sm-3 text-right control-label col-form-label">Nama Volunteer</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="name" id="inputEmail3" placeholder="Masukkan Nama" value="<?php if($isEdit) echo $volunteer['name'];?>">
              </div>
            </div>
            
            <div class="form-group row p-b-15">
              <label for="inputEmail3" class="col-sm-3 text-right control-label col-form-label">NIK</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="nik" id="inputEmail3" placeholder="Masukkan NIK" value="<?php if($isEdit) echo $volunteer['nik'];?>">
              </div>
            </div>

            <div class="form-group row p-b-15">
              <label for="inputEmail3" class="col-sm-3 text-right control-label col-form-label">Phone</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="phone" id="inputEmail3" placeholder="Masukkan No Telepon" value="<?php if($isEdit) echo $volunteer['phone'];?>">
              </div>
            </div>

            <div class="form-group row p-b-15">
              <label for="inputEmail3" class="col-sm-3 text-right control-label col-form-label">Address</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="address" id="inputEmail3" placeholder="Masukkan Alamat" value="<?php if($isEdit) echo $volunteer['address'];?>">
              </div>
            </div>

            <div class="form-group row p-b-15">
              <label for="inputEmail3" class="col-sm-3 text-right control-label col-form-label">Gambar KTP</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="ktp_img_path" id="inputEmail3" placeholder="Masukkan Gambar" value="<?php if($isEdit) echo $volunteer['ktp_img_path'];?>">
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
	<!-- ============================================================== -->
	<!-- End PAge Content -->
	<!-- ============================================================== -->
  
<!-- ============================================================== -->
<!-- End Container fluid  -->
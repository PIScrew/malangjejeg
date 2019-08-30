<div class="container-fluid" data-codepage="<?php echo $codepage ?>">
<?php $isEdit = $page_title == "visiMisiEdit"? true: false; ?>
		<div class="row">
			<div class="col-12 card">
			<form enctype="multipart/form-data" id="visiMisiEdit" method="post" action="<?php echo base_url('admin/visiMisi/editVisiMisi/')?>" data-dir="" data-url="">
      <input type="hidden" placeholder="text" name="id" class="form-control form-control-line" value="<?= $visi_misi['id']?>">
  
			  <div class="col-sm-12 col-md-8">
                <div class="form-group">
                  <label for="text" class="control-label col-form-label">Text<span
                      class="text-danger">*</span></label>
                      <input type="text" placeholder="text" name="text"  class="form-control form-control-line" value="<?= $visi_misi['text']?>">
                </div>
              </div>

              <div class="col-sm-12 col-md-8">
                <div class="form-group">
                  <label for="updated_at" class="control-label col-form-label">Updated at<span
                      class="text-danger">*</span></label>
                      <input type="date" placeholder="Updated At" name="updated_at"  class="form-control form-control-line" value="<?= $visi_misi['updated_at']?>">
                </div>
              </div>
			  
					<div class="form-group text-right">
						<button class="btn btn-danger btn-sm waves-effect waves-light" type="submit" name="submit"><span
								class="btn-label"><i class="fas fa-save"></i></span> Simpan</button>
					</div>
				</form>
			</div>
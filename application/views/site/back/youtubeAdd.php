<div class="container-fluid" data-codepage="<?php echo $codepage ?>">
<?php $isEdit = $page_title == "Add Youtube"? true: false; ?>
		<div class="row">
			<div class="col-12 card">
			<form enctype="multipart/form-data" id="add_about" method="post" action="<?php echo base_url('admin/youtube/addYoutube/')?>" data-dir="" data-url="">
			<div class="col-sm-12 col-md-8">
                <div class="form-group">
                  <label for="link_video" class="control-label col-form-label">Link Video<span
                      class="text-danger">*</span></label>
                  <input type="text" class="form-control" name="link_video" id="link_video" required >
                
                </div>
              </div>
			  <div class="col-sm-12 col-md-8">
                <div class="form-group">
                  <label for="created_at" class="control-label col-form-label">Created At<span
                      class="text-danger">*</span></label>
                  <input type="date" class="form-control" name="created_at" id="created_at" required>
                </div>
              </div>
			 
                  
					<div class="form-group text-right">
						<button class="btn btn-danger btn-sm waves-effect waves-light" type="submit" name="submit"><span
								class="btn-label"><i class="fas fa-save"></i></span> Simpan</button>
					</div>
				</form>
			</div>
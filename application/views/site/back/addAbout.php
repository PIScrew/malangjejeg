<div class="container-fluid" data-codepage="<?php echo $codepage ?>">
<?php $isEdit = $page_title == "Add About"? true: false; ?>
		<div class="row">
			<div class="col-12 card">
			<form enctype="multipart/form-data" id="add_about" method="post" action="<?php echo base_url('admin/about/addAbout/')?>" data-dir="" data-url="">
			<div class="col-sm-12 col-md-8">
                <div class="form-group">
                  <label for="video_url" class="control-label col-form-label">Video Url<span
                      class="text-danger">*</span></label>
                  <input type="text" class="form-control" name="video_url" id="video_url" required >
                
                </div>
              </div>
			  <div class="col-sm-12 col-md-8">
                <div class="form-group">
                  <label for="text" class="control-label col-form-label">Text<span
                      class="text-danger">*</span></label>
                  <input type="text" class="form-control" name="text" id="text" required>
                </div>
              </div>
			 
                  
					<div class="form-group text-right">
						<button class="btn btn-danger btn-sm waves-effect waves-light" type="submit" name="submit"><span
								class="btn-label"><i class="fas fa-save"></i></span> Simpan</button>
					</div>
				</form>
			</div>
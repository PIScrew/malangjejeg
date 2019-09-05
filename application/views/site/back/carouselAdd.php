<div class="container-fluid" data-codepage="<?php echo $codepage ?>">
<?php $isEdit = $page_title == "Add About"? true: false; ?>
		<div class="row">
			<div class="col-12 card">
			<form enctype="multipart/form-data" id="add_carousel" method="post" action="<?php echo base_url('admin/carousel/addCarousel/')?>" data-dir="" data-url="">
			<div class="col-md-12" col-md-8>
                <div class="form-group">               
                  <label for="productpicture" class="control-label col-form-label">Image</label><br>
                  <input type="file" id="input-file-events" name="img_path" class="dropify w-100" data-height="200" data-default-file=""  data-show-remove="false" />
                </div>
            </div>
			  <div class="col-sm-12 col-md-8">
                <div class="form-group">
                  <label for="text" class="control-label col-form-label">Text<span
                      class="text-danger">*</span></label>
                  <textarea rows="3"  class="form-control" name="text" id="text" required> </textarea>
                </div>
              </div>
              <div class="col-sm-12 col-md-8">
                <div class="form-group">
                  <label for="figure_name" class="control-label col-form-label">Figure Name<span
                      class="text-danger">*</span></label>
                  <input type="text" class="form-control" name="figure_name" id="figure_name" required>
                </div>
              </div>
              <div class="col-sm-12 col-md-8">
                <div class="form-group">
                  <label for="figure_title" class="control-label col-form-label">Figure Title<span
                      class="text-danger">*</span></label>
                  <input type="text" class="form-control" name="figure_title" id="figure_title" required>
                </div>
              </div>
                  
					<div class="form-group text-right">
						<button class="btn btn-danger btn-sm waves-effect waves-light" type="submit" name="submit"><span
								class="btn-label"><i class="fas fa-save"></i></span> Simpan</button>
					</div>
				</form>
			</div>
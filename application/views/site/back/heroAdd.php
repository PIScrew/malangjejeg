<div class="container-fluid" data-codepage="<?php echo $codepage ?>">
<?php $isEdit = $page_title == "Add Hero"? true: false; ?>
		<div class="row">
			<div class="col-12 card">
			<form enctype="multipart/form-data" id="add_hero" method="post" action="<?php echo base_url('admin/hero/addHero')?>" data-dir="" data-url="">
			
     
							<!--  Hero Title -->
							<div class="col-sm-12">
								<div class="form-group">
									<label for="description" class="control-label col-form-label">Hero Title</label>
									<textarea name="hero_title" id="description" class="summernote"  data-url="" value="">
									</textarea>
								</div>
							</div>
							<!-- End Hero Title -->
	  				

              
              <div class="col-md-12" col-md-8>
                <div class="form-group">               
                  <label for="productpicture" class="control-label col-form-label">Background Image</label><br>
                  <input type="file" id="input-file-events" name="hero_path" class="dropify" data-default-file=""  data-show-remove="false" />
                </div>
              </div>
			  
            
                  
					<div class="form-group text-right">
						<button class="btn btn-danger btn-sm waves-effect waves-light" type="submit" name="submit"><span
								class="btn-label"><i class="fas fa-save"></i></span> Simpan</button>
					</div>
				</form>
			</div>
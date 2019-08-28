<div class="container-fluid" data-codepage="<?php echo $codepage ?>">
<?php $isEdit = $page_title == "galeryEdit"? true: false; ?>
		<div class="row">
			<div class="col-12 card">
			<form enctype="multipart/form-data" id="heroEdit" method="post" action="<?php echo base_url('admin/hero/editHero/')?>" data-dir="" data-url="">
      <input type="hidden" placeholder="text" name="id" class="form-control form-control-line" value="<?= $hero['id']?>">

            <div class="col-md-12" col-md-8>
                <div class="form-group">               
                  <label for="productpicture" class="control-label col-form-label">Background Image</label><br>
                  <input type="file" id="input-file-events" name="hero_path" class="dropify w-100" data-height="200" data-default-file="<?= img_url($hero['hero_path']); ?>"  data-show-remove="false" />
                </div>
            </div>
			  <div class="col-sm-12 col-md-8">
                <div class="form-group">
                  <label for="hero_title" class="control-label col-form-label">Hero Title<span
                      class="text-danger">*</span></label>
                      <input type="text" placeholder="Hero Title" name="hero_title"  class="form-control form-control-line" value="<?= $hero['hero_title']?>">
                </div>
              </div>
              <div class="col-sm-12 col-md-8">
                <div class="form-group">
                  <label for="updated_at" class="control-label col-form-label">Updated at<span
                      class="text-danger">*</span></label>
                      <input type="date" placeholder="Updated At" name="updated_at"  class="form-control form-control-line" value="<?= $hero['updated_at']?>">
                </div>
              </div>
			  
					<div class="form-group text-right">
						<button class="btn btn-danger btn-sm waves-effect waves-light" type="submit" name="submit"><span
								class="btn-label"><i class="fas fa-save"></i></span> Simpan</button>
					</div>
				</form>
			</div>
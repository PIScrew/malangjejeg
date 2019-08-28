<div class="container-fluid" data-codepage="<?php echo $codepage ?>">
<?php $isEdit = $page_title == "carouselEdit"? true: false; ?>
		<div class="row">
			<div class="col-12 card">
			<form enctype="multipart/form-data" id="carouselEdit" method="post" action="<?php echo base_url('admin/carousel/editCarousel/')?>" data-dir="" data-url="">
      <input type="hidden" placeholder="text" name="id" class="form-control form-control-line" value="<?= $carousel['id_carousel_figure']?>">
			<div class="col-sm-12 col-md-8">
                <div class="form-group">
                  <label for="img_path" class="control-label col-form-label">Image<span
                      class="text-danger">*</span></label>
                      <input type="file"  placeholder="Image"   class="form-control form-control-line"  name="img_path" data-default-file="<?= img_url($carousel['img_path']); ?> ">
                
                </div>
              </div>
			  <div class="col-sm-12 col-md-8">
                <div class="form-group">
                  <label for="text" class="control-label col-form-label">Text<span
                      class="text-danger">*</span></label>
                      <input type="text" placeholder="text" name="text" class="form-control form-control-line" value="<?= $carousel['text']?>">
                </div>
              </div>
              <div class="col-sm-12 col-md-8">
                <div class="form-group">
                  <label for="figure_name" class="control-label col-form-label">Figure Name<span
                      class="text-danger">*</span></label>
                      <input type="text" placeholder="Figure Name" name="figure_name" class="form-control form-control-line" value="<?= $carousel['figure_name']?>">
                </div>
              </div>

              <div class="col-sm-12 col-md-8">
                <div class="form-group">
                  <label for="figure_title" class="control-label col-form-label">Figure Title<span
                      class="text-danger">*</span></label>
                      <input type="text" placeholder="Figure Title" name="figure_title" class="form-control form-control-line" value="<?= $carousel['figure_title']?>">
                </div>
              </div>
			  
					<div class="form-group text-right">
						<button class="btn btn-danger btn-sm waves-effect waves-light" type="submit" name="submit"><span
								class="btn-label"><i class="fas fa-save"></i></span> Simpan</button>
					</div>
				</form>
			</div>
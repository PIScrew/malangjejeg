<div class="container-fluid" data-codepage="<?php echo $codepage ?>">
<?php $isEdit = $page_title == "aboutEdit"? true: false; ?>
		<div class="row">
			<div class="col-12 card">
			<form enctype="multipart/form-data" id="aboutEdit" method="post" action="<?php echo base_url('admin/about/editAbout/')?>" data-dir="" data-url="">
      <input type="hidden" placeholder="text" name="id_about" class="form-control form-control-line" value="<?= $about['id_about']?>">
  	<div class="col-sm-12 col-md-8">
                <div class="form-group">
                  <label for="video_url" class="control-label col-form-label">Video Url<span
                      class="text-danger">*</span></label>
                      <input type="text"  placeholder="Video Url"   class="form-control form-control-line" name="video_url" value="<?= $about['video_url'] ?> ">
                
                </div>
              </div>
			  <div class="col-sm-12 col-md-8">
                <div class="form-group">
                  <label for="text" class="control-label col-form-label">Text<span
                      class="text-danger">*</span></label>
                      <input type="text" placeholder="text" name="text"  class="form-control form-control-line" value="<?= $about['text']?>">
                </div>
              </div>
			  
					<div class="form-group text-right">
						<button class="btn btn-danger btn-sm waves-effect waves-light" type="submit" name="submit"><span
								class="btn-label"><i class="fas fa-save"></i></span> Simpan</button>
					</div>
				</form>
			</div>
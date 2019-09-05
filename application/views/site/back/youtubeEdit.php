<div class="container-fluid" data-codepage="<?php echo $codepage ?>">
<?php $isEdit = $page_title == "youtubeEdit"? true: false; ?>
		<div class="row">
			<div class="col-12 card">
			<form enctype="multipart/form-data" id="aboutEdit" method="post" action="<?php echo base_url('admin/youtube/editYoutube/')?>" data-dir="" data-url="">
      <input type="hidden" placeholder="text" name="id_video" class="form-control form-control-line" value="<?= $youtube['id_video']?>">
  	<div class="col-sm-12 col-md-8">
                <div class="form-group">
                  <label for="link_video" class="control-label col-form-label">Link Video<span
                      class="text-danger">*</span></label>
                      <input type="text"  placeholder="Link Video"   class="form-control form-control-line" name="link_video" value="<?= $youtube['link_video'] ?> ">
                
                </div>
              </div>
			  
			  
					<div class="form-group text-right">
						<button class="btn btn-danger btn-sm waves-effect waves-light" type="submit" name="submit"><span
								class="btn-label"><i class="fas fa-save"></i></span> Simpan</button>
					</div>
				</form>
			</div>
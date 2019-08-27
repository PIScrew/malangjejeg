<div class="container-fluid" data-codepage="<?php echo $codepage ?>">
<?php $isEdit = $page_title == "optionEdit"? true: false; ?>
		<div class="row">
			<div class="col-12 card">
			<form enctype="multipart/form-data" id="optionEdit" method="post" action="<?php echo base_url('admin/option/editOption/')?>" data-dir="" data-url="">
      <input type="hidden" placeholder="text" name="id" class="form-control form-control-line" value="<?= $option['id']?>">

            <div class="col-sm-12 col-md-8">
                <div class="form-group">
                  <label for="title" class="control-label col-form-label">Title<span
                      class="text-danger">*</span></label>
                      <input type="text" placeholder="Title" name="title"  class="form-control form-control-line" value="<?= $option['title']?>">
                </div>
              </div>
              
            <div class="col-sm-12 col-md-8">
                <div class="form-group">
                  <label for="img_path" class="control-label col-form-label">Image<span
                      class="text-danger">*</span></label>
                      <input type="file"  placeholder="Image"   class="form-control form-control-line" name="img_path" value="<?= $option['img_path'] ?> ">
                
                </div>
              </div>

              <div class="col-sm-12 col-md-8">
                <div class="form-group">
                  <label for="content" class="control-label col-form-label">Content<span
                      class="text-danger">*</span></label>
                      <input type="text" placeholder="Content" name="content"  class="form-control form-control-line" value="<?= $option['content']?>">
                </div>
              </div>
			  
              <div class="col-sm-12 col-md-8">
                <div class="form-group">
                  <label for="updated_at" class="control-label col-form-label">Updated at<span
                      class="text-danger">*</span></label>
                      <input type="date" placeholder="Updated At" name="updated_at"  class="form-control form-control-line" value="<?= $option['updated_at']?>">
                </div>
              </div>
			  
					<div class="form-group text-right">
						<button class="btn btn-danger btn-sm waves-effect waves-light" type="submit" name="submit"><span
								class="btn-label"><i class="fas fa-save"></i></span> Simpan</button>
					</div>
				</form>
			</div>
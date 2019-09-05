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
              
              <div class="col-md-12" col-md-8>
                <div class="form-group">               
                  <label for="productpicture" class="control-label col-form-label">Image</label><br>
                  <input type="file" id="input-file-events" name="img_path" class="dropify w-100" data-height="200" data-default-file="<?= img_url($option['img_path']); ?>"  data-show-remove="false" />
                </div>
            </div>

              <div class="col-sm-12 col-md-8">
                <div class="form-group">
                  <label for="content" class="control-label col-form-label">Content<span
                      class="text-danger">*</span></label>
                      <textarea rows="4"  class="form-control" name="content" id="content"  required ><?php echo htmlspecialchars($option['content']); ?></textarea>
                </div>
              </div>
			  
              
			  
					<div class="form-group text-right">
						<button class="btn btn-danger btn-sm waves-effect waves-light" type="submit" name="submit"><span
								class="btn-label"><i class="fas fa-save"></i></span> Simpan</button>
					</div>
				</form>
			</div>
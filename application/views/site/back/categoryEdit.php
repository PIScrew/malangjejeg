<div class="container-fluid" data-codepage="<?php echo $codepage ?>">
<?php $isEdit = $page_title == "Edit Category"? true: false; ?>
		<div class="row">
			<div class="col-12 card">
			<form enctype="multipart/form-data" id="categoryEdit" method="post" action="<?php echo base_url('admin/Category/editCategory/')?>" data-dir="" data-url="">
                <input type="hidden" placeholder="text" name="id" class="form-control form-control-line" value="<?= $category['id']?>">
            
            <div class="col-sm-12 col-md-8">
                <div class="form-group">
                  <label for="title_category" class="control-label col-form-label">Title Category<span
                      class="text-danger">*</span></label>
                      <input type="text" placeholder="Title Category" name="title_category"  class="form-control form-control-line" value="<?= $category['title_category']?>">
                </div>
              </div>

            <div class="col-md-12" col-md-8>
                <div class="form-group">               
                  <label for="productpicture" class="control-label col-form-label">Background Image</label><br>
                  <input type="file" id="input-file-events" name="img_path" class="dropify w-100" data-height="200" data-default-file="<?= img_url($category['img_path']); ?>"  data-show-remove="false" />
                </div>
            </div>
			  
					<div class="form-group text-right">
						<button class="btn btn-danger btn-sm waves-effect waves-light" type="submit" name="submit"><span
								class="btn-label"><i class="fas fa-save"></i></span> Simpan</button>
					</div>
				</form>
			</div>

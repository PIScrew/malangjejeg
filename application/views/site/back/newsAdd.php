<div class="container-fluid" data-codepage="<?php echo $codepage ?>">
<?php $isEdit = $page_title == "Add News"? true: false; ?>
		<div class="row">
			<div class="col-12 card">
			<form enctype="multipart/form-data" id="add_news" method="post" action="<?php echo base_url('admin/news/addNews/')?>" data-dir="" data-url="">
			
            <div class="col-sm-12 col-md-8">
                <div class="form-group">
                  <label for="news_title" class="control-label col-form-label">Judul Berita<span
                      class="text-danger">*</span></label>
                  <textarea rows="4"  class="form-control" name="news_title" id="news_title" required> </textarea>
                </div>
            </div>
            
            <div class="col-md-12" col-md-8>
                <div class="form-group">               
                  <label for="productpicture" class="control-label col-form-label">Image</label><br>
                  <input type="file" id="input-file-events" name="news_img" class="dropify w-100" data-height="200" data-default-file=""  data-show-remove="false" />
                </div>
            </div>
			  
              <div class="col-sm-12 col-md-8">
                <div class="form-group">
                  <label for="news_content" class="control-label col-form-label"> Content<span
                      class="text-danger">*</span></label>
                  <input type="text" class="form-control" name="news_content" id="news_content" required>
                </div>
              </div>
              <div class="col-sm-12 col-md-8">
                <div class="form-group">
                  <label for="news_url" class="control-label col-form-label">Link Berita<span
                      class="text-danger">*</span></label>
                  <input type="text" class="form-control" name="news_url" id="news_url" required>
                </div>
              </div>
              <div class="form-group">
                                    <label class="col-sm-12">Created By</label>
                                    <div class="col-sm-12">
                                        <select class="form-control form-control-line" name="created_by">
                                        <?php if ($news['created_by'] == 1):?>
                                            <option value="1" selected>Superadmin</option>
                                            <option value="0" >None</option>
                                        <?php elseif ($news['created_by'] == 0):?>
                                            <option value="1" >Superadmin</option>
                                            <option value="0" selected>None</option>
                                        <?php endif;?>
                                        </select>
                                    </div>
                                </div>
                  
					<div class="form-group text-right">
						<button class="btn btn-danger btn-sm waves-effect waves-light" type="submit" name="submit"><span
								class="btn-label"><i class="fas fa-save"></i></span> Simpan</button>
					</div>
				</form>
			</div>
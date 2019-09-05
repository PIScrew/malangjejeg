<div class="container-fluid" data-codepage="<?php echo $codepage ?>">
<?php $isEdit = $page_title == "newsEdit"? true: false; ?>
		<div class="row">
			<div class="col-12 card">
			<form enctype="multipart/form-data" id="newsEdit" method="post" action="<?php echo base_url('admin/news/editNews/')?>" data-dir="" data-url="">
      <input type="hidden" placeholder="text" name="id_news" class="form-control form-control-line" value="<?= $news['id_news']?>">
			
            <div class="col-sm-12 col-md-8">
                <div class="form-group">
                  <label for="news_title" class="control-label col-form-label">Judul Berita<span
                      class="text-danger">*</span></label>
                      <textarea rows="4"  class="form-control" name="news_title" id="news_title"  required ><?php echo htmlspecialchars($news['news_title']); ?></textarea>
                </div>
            </div>
            
            
            <div class="col-md-12" col-md-8>
                <div class="form-group">               
                  <label for="productpicture" class="control-label col-form-label">Image</label><br>
                  <input type="file" id="input-file-events" name="news_img" class="dropify w-100" data-height="200" data-default-file="<?= img_url($news['news_img']); ?>"  data-show-remove="false" />
                </div>
            </div>
			  
              <div class="col-sm-12 col-md-8">
                <div class="form-group">
                  <label for="news_content" class="control-label col-form-label">Content<span
                      class="text-danger">*</span></label>
                      <input type="text" placeholder="News Content" name="news_content" class="form-control form-control-line" value="<?= $news['news_content']?>">
                </div>
              </div>

              <div class="col-sm-12 col-md-8">
                <div class="form-group">
                  <label for="news_url" class="control-label col-form-label">Link Berita<span
                      class="text-danger">*</span></label>
                      <input type="text" placeholder="Link Berita" name="news_url" class="form-control form-control-line" value="<?= $news['news_url']?>">
                </div>
              </div>

              
					<div class="form-group text-right">
						<button class="btn btn-danger btn-sm waves-effect waves-light" type="submit" name="submit"><span
								class="btn-label"><i class="fas fa-save"></i></span> Simpan</button>
					</div>
				</form>
			</div>
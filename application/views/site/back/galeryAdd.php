<div class="container-fluid" data-codepage="<?php echo $codepage ?>">
<?php $isEdit = $page_title == "Add Galery"? true: false; ?>
		<div class="row">
			<div class="col-12 card">
			<form enctype="multipart/form-data" id="add_carousel" method="post" action="<?php echo base_url('admin/galery/addGalery/')?>" data-dir="" data-url="">
			
      <div class="col-sm-12 col-md-8">
                <div class="form-group">
                  <label for="title" class="control-label col-form-label">Judul<span
                      class="text-danger">*</span></label>
                  <input type="text" class="form-control" name="title" id="title" required>
                </div>
              </div>
      
      <div class="col-sm-12 col-md-8">
        <div class="form-group">
               
                      
               <label for="productpicture" class="control-label col-form-label">Upload Gambar</label>
               <div name ="userfile"id="myDropzone" class="dropzone" data-url=""> </div>
      </div>
      </div>
      <div class="col-sm-12 col-md-8">
                <div class="form-group">
                  <label for="desc" class="control-label col-form-label">Description<span
                      class="text-danger">*</span></label>
                      <textarea rows="4"  class="form-control" name="desc" id="desc"  required ></textarea>
                </div>
              </div>
             
                  
					<div class="form-group text-right">
						<button class="btn btn-danger btn-sm waves-effect waves-light" type="submit" name="submit"><span
								class="btn-label"><i class="fas fa-save"></i></span> Simpan</button>
					</div>
				</form>
			</div>
<div class="container-fluid" data-codepage="<?php echo $codepage ?>">
<?php $isEdit = $page_title == "galeryEdit"? true: false; ?>
		<div class="row">
			<div class="col-12 card">
			<form enctype="multipart/form-data" id="galeryEdit" method="post" action="<?php echo base_url('admin/galery/editGalery/')?>" data-dir="" data-url="">
      <input type="hidden" placeholder="text" name="id" class="form-control form-control-line" value="<?= $galery['id_galery']?>">

    	<div class="col-sm-12 col-md-8">
                <div class="form-group">
                  <label for="title" class="control-label col-form-label">Judul<span
                      class="text-danger">*</span></label>
                      <input type="text" placeholder="Judul" name="title"  class="form-control form-control-line" value="<?= $galery['title']?>">
                </div>
              </div>
      
      <div class="col-sm-12 col-md-8">
                <div class="form-group">
                <label for="productpicture" class="control-label col-form-label">Upload Gambar</label>
                  <div name ="userfile"id="myDropzone" class="dropzone" data-url="	<?php  echo base_url('admin/Galery/editGalery');?>">  </div>
                
                </div>
              </div>
              <div class="col-sm-12 col-md-8">
                <div class="form-group">
                  <label for="desc" class="control-label col-form-label">Description<span
                      class="text-danger">*</span></label>
                      <textarea rows="4"  class="form-control" name="desc" id="desc"  required ><?php echo htmlspecialchars($galery['desc']); ?></textarea>
                </div>
              </div>
             
			  
					<div class="form-group text-right">
						<button class="btn btn-danger btn-sm waves-effect waves-light" type="submit" name="submit"><span
								class="btn-label"><i class="fas fa-save"></i></span> Simpan</button>
					</div>
				</form>
			</div>
<div class="container-fluid" data-codepage="<?php echo $codepage ?>">
<?php if($page_title == "Tambah Halaman Tentang"):?>
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-body ">
					<?php echo form_open_multipart('admin/page/add_about');?>
						<div class="form-group">
							<label for="pagetitle" class="control-label">Judul</label>
							<input type="text" name="title_page" class="form-control" id="pagetitle">
						</div>
						<div class="form-group">
							<label for="name">Img Path</label>
							<input type="file" id="input-file-disable-remove" name="img_path" class="dropify" data-show-remove="false" />
						</div>
						<div class="form-group">
                            <label for="productdescription" class="control-label col-form-label">Deskripsi</label>
                            <textarea name="description" id="pagecontent" class="summernote"  data-url="" value="">
                            
                            </textarea>
                        </div>
						<button type="submit" name="submit" class="btn btn-success waves-effect waves-light">Simpan</button>
					</form>
				</div>
			</div>
		</div>
	</div>
<?php elseif($page_title == "Tambah Halaman FAQ"):?>
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-body ">
					<?php echo form_open('admin/page/add_faq');?>
						<div class="row">
							<div class="form-group col-12">
								<label for="pagetitle" class="control-label">Judul</label>
								<input type="text" name="title_faq" class="form-control" id="pagetitle">
							</div>
							<div class="form-group col-6">
								<label for="pagetitle" class="control-label">Kategori</label>
								<input type="text" name="type_faq" class="form-control" id="pagetitle">
							</div>
							<div class="form-group col-6">
								<label for="pagetitle" class="control-label">Icon</label>
								<input type="text" name="icon_faq" class="form-control" id="pagetitle">
							</div>
							<div class="form-group col-12">
								<label for="pagecontent" class="control-label">Message:</label>
								<textarea class="summernote" name="desc_faq" id="pagecontent"></textarea>
							</div>
							<button type="submit" name="submit" class="btn btn-success waves-effect waves-light">Simpan</button>						
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
<?php elseif($page_title == "Tambah Halaman Bantuan"):?>
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-body ">
					<?php echo form_open_multipart('admin/page/add_help');?>
						<div class="form-group">
							<label for="pagetitle" class="control-label">Judul</label>
							<input type="text" name="title" class="form-control" id="pagetitle">
						</div>
						<div class="form-group">
							<label for="name">Img Path</label>
							<input type="file" id="input-file-disable-remove" name="img_path" class="dropify" data-show-remove="false" />
						</div>
						<div class="form-group">
							<label for="pagecontent" class="control-label">Message:</label>
							<textarea class="summernote" name="desc" id="pagecontent"></textarea>
						</div>
						<button type="submit" name="submit" class="btn btn-success waves-effect waves-light">Simpan</button>
					</form>
				</div>
			</div>
		</div>
	</div>
<?php endif;?>
</div>

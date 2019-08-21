<div class="container-fluid" data-codepage="<?php echo $codepage ?>">
<?php if($page_title == "Edit Halaman Tentang"):?>
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-body ">
					<?php echo form_open_multipart('admin/page/edit_about');?>
					<input type="hidden" class="form-control" name="id" id="id" required value="<?php echo $about['id'] ?>" >    
						<div class="form-group">
							<label for="pagetitle" class="control-label">Judul</label>
							<input type="text" name="title_page" class="form-control" id="pagetitle" value="<?php echo $about['judul']; ?>">
						</div>
						<div class="form-group">
							<label for="name">Img Path</label>
							<input type="file" id="input-file-disable-remove" name="img_path" class="dropify" data-default-file="<?= img_url($about['img_path']); ?>" data-show-remove="false"/>
						</div>
						<div class="form-group">
                            <label for="productdescription" class="control-label col-form-label">Deskripsi</label>
                            <textarea name="description" id="pagecontent" class="summernote"  data-url="" value=""><?php echo $about['desc'];?>
                            
                            </textarea>
                        </div>
						<button type="submit" name="submit" class="btn btn-success waves-effect waves-light">Simpan</button>
					</form>
				</div>
			</div>
		</div>
	</div>
<?php elseif($page_title == "Edit Halaman FAQ"):?>
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-body ">
					<?php echo form_open('admin/page/edit_faq');?>
					
                      <input type="hidden" class="form-control" name="id" id="id" required value="<?php echo $faq['id'] ?>" >    
                    
						<div class="row">
							<div class="form-group col-12">
								<label for="pagetitle" class="control-label">Judul</label>
								<input type="text" name="title_faq" class="form-control" id="pagetitle" value="<?php echo $faq['judul'] ;?>">
							</div>
							<div class="form-group col-6">
								<label for="pagetitle" class="control-label">Kategori</label>
								<input type="text" name="type_faq" class="form-control" id="pagetitle" value="<?php echo $faq['kategori'] ;?>">
							</div>
							<div class="form-group col-6">
								<label for="pagetitle" class="control-label">Icon</label>
								<input type="text" name="icon_faq" class="form-control" id="pagetitle" value="<?php echo $faq['icon'] ;?>">
							</div>
							<div class="form-group col-12">
								<label for="pagecontent" class="control-label">Message:</label>
								<textarea class="summernote" name="desc_faq" id="pagecontent"><?php echo $faq['message'] ;?></textarea>
							</div>
							<button type="submit" name="submit" class="btn btn-success waves-effect waves-light">Simpan</button>						
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
<?php elseif($page_title == "Edit Halaman Bantuan"):?>
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-body ">
					<?php echo form_open_multipart('admin/page/edit_help');?>
					<input type="hidden" class="form-control" name="id" id="id" required value="<?php echo $help['id'] ?>" >
						<div class="form-group">
							<label for="pagetitle" class="control-label">Judul</label>
							<input type="text" name="title" class="form-control" id="pagetitle" value="<?php echo $help['judul']?>">
						</div>
						<div class="form-group">
							<label for="name">Img Path</label>
							<input type="file" id="input-file-disable-remove" name="img_path" class="dropify" data-default-file="<?= img_url($help['img_path']); ?>" data-show-remove="false" />
						</div>
						<div class="form-group">
							<label for="pagecontent" class="control-label">Message:</label>
							<textarea class="summernote" name="desc" id="pagecontent"><?php echo $help['message']?></textarea>
						</div>
						<button type="submit" name="submit" class="btn btn-success waves-effect waves-light">Simpan</button>
					</form>
				</div>
			</div>
		</div>
	</div>
<?php endif;?>
</div>

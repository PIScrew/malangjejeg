<?php if($code_title == "addpage"):?>
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-body ">
					<?php echo form_open_multipart('Process/add_page');?>
						<div class="form-group">
							<label for="pagetitle" class="control-label">Judul</label>
							<input type="text" name="title_page" class="form-control" id="pagetitle">
						</div>
						<div class="form-group">
							<label for="name">Img Path</label>
							<input type="file" id="input-file-disable-remove" name="img_path" class="dropify" data-show-remove="false" />
						</div>
						<div class="form-group">
							<label for="pagecontent" class="control-label">Message:</label>
							<textarea class="summernote" name="content" id="pagecontent"></textarea>
						</div>
						<button type="submit" name="submit" class="btn btn-success waves-effect waves-light">Simpan</button>
					</form>
				</div>
			</div>
		</div>
	</div>
<?php elseif($code_title == "addFaq"):?>
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-body ">
					<?php echo form_open('Process/addFaq');?>
						<div class="row">
							<div class="form-group col-12">
								<label for="pagetitle" class="control-label">Judul</label>
								<input type="text" name="title" class="form-control" id="pagetitle">
							</div>
							<div class="form-group col-6">
								<label for="pagetitle" class="control-label">Kategori</label>
								<input type="text" name="type_faq" class="form-control" id="pagetitle">
							</div>
							<div class="form-group col-6">
								<label for="pagetitle" class="control-label">Icon</label>
								<input type="text" name="icon" class="form-control" id="pagetitle">
							</div>
							<div class="form-group col-12">
								<label for="pagecontent" class="control-label">Message:</label>
								<textarea class="summernote" name="desc" id="pagecontent"></textarea>
							</div>
							<button type="submit" name="submit" class="btn btn-success waves-effect waves-light">Simpan</button>						
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
<?php elseif($code_title == "addAbout"):?>
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-body ">
					<?php echo form_open_multipart('Process/addAbout');?>
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
<?php elseif($code_title == "addAboutPoint"):?>
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-body ">
					<?php echo form_open_multipart('Process/addAboutPoint');?>
						<div class="form-group">
							<label for="pagetitle" class="control-label">Judul</label>
							<input type="text" name="title" class="form-control" id="pagetitle">
						</div>
						<div class="form-group">
							<label for="name">Gambar Icon </label>
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
	<?php elseif($code_title == "editAboutPoint"):?>
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-body ">
					<?php echo form_open_multipart('Process/editAboutPoint');?>
					<input type="hidden" name="id" value="<?php echo $edit['id_site_value']?>">
						<div class="form-group">
							<label for="pagetitle" class="control-label">Judul</label>
							<input type="text" name="title" class="form-control" id="pagetitle" value="<?php echo $edit['title']?>">
						</div>
						<div class="form-group">
							<label for="name">Gambar Icon </label>
							<input type="file" id="input-file-disable-remove" name="img_path" class="dropify" data-default-file="<?php echo img_url($edit['img_path']); ?>" data-show-remove="false" />
						</div>
						<div class="form-group">
							<label for="pagecontent" class="control-label">Message:</label>
							<textarea class="summernote" name="desc" id="pagecontent"><?php echo $edit['desc']?></textarea>
						</div>
						<button type="submit" name="submit" class="btn btn-success waves-effect waves-light">Simpan</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<?php elseif($code_title == "editAbout"):?>
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-body ">
					<?php echo form_open_multipart('Process/editAbout');?>
					<input type="hidden" name="id" value="<?php echo $edit['id_site_about']?>">
						<div class="form-group">
							<label for="pagetitle" class="control-label">Judul</label>
							<input type="text" name="title" class="form-control" id="pagetitle" value="<?php echo $edit['title']?>">
						</div>
						<div class="form-group">
							<label for="name">Gambar Icon </label>
							<input type="file" id="input-file-disable-remove" name="img_path" class="dropify" data-default-file="<?php echo img_url($edit['img_path']); ?>" data-show-remove="false" />
						</div>
						<div class="form-group">
							<label for="pagecontent" class="control-label">Message:</label>
							<textarea class="summernote" name="desc" id="pagecontent"><?php echo $edit['desc']?></textarea>
						</div>
						<button type="submit" name="submit" class="btn btn-success waves-effect waves-light">Simpan</button>
					</form>
				</div>
			</div>
		</div>
	</div>
<?php elseif($code_title == "editFaq"):?>
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-body ">
					<?php echo form_open('Process/editFaq');?>
					<input type="hidden" name="id" value="<?php echo $edit['id_site_faq']?>">
						<div class="row">
							<div class="form-group col-12">
								<label for="pagetitle" class="control-label">Judul</label>
								<input type="text" name="title" class="form-control" id="pagetitle" value="<?php echo $edit['title']?>">
							</div>
							<div class="form-group col-6">
								<label for="pagetitle" class="control-label">Kategori</label>
								<input type="text" name="type_faq" class="form-control" id="pagetitle" value="<?php echo $edit['type_faq']?>">
							</div>
							<div class="form-group col-6">
								<label for="pagetitle" class="control-label">Icon</label>
								<input type="text" name="icon" class="form-control" id="pagetitle"  value="<?php echo $edit['type_faq']?>">
							</div>
							<div class="form-group col-12">
								<label for="pagecontent" class="control-label">Message:</label>
								<textarea class="summernote" name="desc" id="pagecontent"><?php echo $edit['desc']?></textarea>
							</div>
							<button type="submit" name="submit" class="btn btn-success waves-effect waves-light">Simpan</button>						
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<?php elseif($code_title == "editPage"):?>
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-body ">
					<?php echo form_open_multipart('Process/editPage');?>
					<input type="hidden" name="id" value="<?php echo $edit['id_page']?>">
						<div class="form-group">
							<label for="pagetitle" class="control-label">Judul</label>
							<input type="text" name="title_page" class="form-control" id="pagetitle" value="<?php echo $edit['title_page']?>">
						</div>
						<div class="form-group">
							<label for="name">Img Path</label>
							<input type="file" id="input-file-disable-remove" name="img_path" class="dropify" data-default-file="<?php echo img_url($edit['img_path']); ?>" data-show-remove="false" />
						</div>
						<div class="form-group">
							<label for="pagecontent" class="control-label">Message:</label>
							<textarea class="summernote" name="content" id="pagecontent"><?php echo $edit['content']?></textarea>
						</div>
						<button type="submit" name="submit" class="btn btn-success waves-effect waves-light">Simpan</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<?php elseif($code_title == "editHelp"):?>
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-body ">
					<?php echo form_open('Process/editHelp');?>
					<input type="hidden" name="id" value="<?php echo $edit['id_site_help']?>">
						<div class="row">
							<div class="form-group col-12">
								<label for="pagetitle" class="control-label">Judul</label>
								<input type="text" name="title" class="form-control" id="pagetitle" value="<?php echo $edit['title']?>">
							</div>
							<div class="form-group col-6">
								<label for="pagetitle" class="control-label">Kategori</label>
								<input type="text" name="type_faq" class="form-control" id="pagetitle" value="<?php echo $edit['type_faq']?>">
							</div>
							<div class="form-group col-6">
								<label for="pagetitle" class="control-label">Icon</label>
								<input type="text" name="icon" class="form-control" id="pagetitle"  value="<?php echo $edit['type_faq']?>">
							</div>
							<div class="form-group col-12">
								<label for="pagecontent" class="control-label">Message:</label>
								<textarea class="summernote" name="desc" id="pagecontent"><?php echo $edit['desc']?></textarea>
							</div>
							<button type="submit" name="submit" class="btn btn-success waves-effect waves-light">Simpan</button>						
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<?php elseif($code_title == "addHelp"):?>
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-body ">
					<?php echo form_open('Process/addHelp');?>
						<div class="row">
							<div class="form-group col-12">
								<label for="pagetitle" class="control-label">Judul</label>
								<input type="text" name="title" class="form-control" id="pagetitle">
							</div>
							<div class="form-group col-6">
								<label for="pagetitle" class="control-label">Kategori</label>
								<input type="text" name="type_faq" class="form-control" id="pagetitle">
							</div>
							<div class="form-group col-6">
								<label for="pagetitle" class="control-label">Icon</label>
								<input type="text" name="icon" class="form-control" id="pagetitle" >
							</div>
							<div class="form-group col-12">
								<label for="pagecontent" class="control-label">Message:</label>
								<textarea class="summernote" name="desc" id="pagecontent"></textarea>
							</div>
							<button type="submit" name="submit" class="btn btn-success waves-effect waves-light">Simpan</button>						
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
<?php endif;?>
</div>

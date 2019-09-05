<div class="container-fluid" data-codepage="<?php echo $codepage ?>">
<?php $isEdit = $page_title == "Add Visi Misi"? true: false; ?>
		<div class="row">
			<div class="col-12 card">
			<form enctype="multipart/form-data" id="add_visiMisi" method="post" action="<?php echo base_url('admin/visiMisi/addVisiMisi/')?>" data-dir="" data-url="">
			<div class="form-group">
                                    <label class="col-sm-12">Pilihan</label>
                                    <div class="col-sm-12">
                                        <select class="form-control form-control-line" name="type">
                                        <?php if ($useradmin['type'] == 1):?>
                                            <option value="1" selected>Visi</option>
                                            <option value="0" >Misi</option>
                                        <?php elseif ($useradmin['type'] == 0):?>
                                            <option value="1" >Visi</option>
                                            <option value="0" selected>Misi</option>
                                        <?php endif;?>
                                        </select>
                                    </div>
                                </div>
			  <div class="col-sm-12 col-md-8">
                <div class="form-group">
                  <label for="text" class="control-label col-form-label">Text<span
                      class="text-danger">*</span></label>
                  <input type="text" class="form-control" name="text" id="text" required>
                </div>
              </div>
              
			 
                  
					<div class="form-group text-right">
						<button class="btn btn-danger btn-sm waves-effect waves-light" type="submit" name="submit"><span
								class="btn-label"><i class="fas fa-save"></i></span> Simpan</button>
					</div>
				</form>
			</div>
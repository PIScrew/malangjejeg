<div class="container-fluid" data-codepage="<?= $codepage ?>" data-subpage="<?= $subpage ?>">
  <?php $isEdit = $page_title == "Add Galery" ? true : false; ?>
  <div class="row">
    <div class="col-12 card">
      <form enctype="multipart/form-data" id="add_carousel" method="post" action="<?php echo base_url('admin/galery/addGalery/') ?>" data-dir="" data-url="">

        <div class="col-sm-12">
          <div class="form-group">
            <label for="title" class="control-label col-form-label">Judul<span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="title" id="title" required>
          </div>
        </div>

        <div class="col-sm-12 ">
          <div class="form-group">


            <label for="galerypicture" class="control-label col-form-label">Upload Gambar</label>
            <div name="userfile" id="galeryDropzone" class="dropzone" data-url="	<?php echo base_url('admin/Galery/addGalery'); ?>"> </div>

          </div>

        </div>

        <div class="col-sm-12 ">
          <div class="form-group">
            <label for="desc" class="control-label col-form-label">Description<span class="text-danger">*</span></label>
            <textarea rows="4" class="form-control" name="desc" id="desc" required></textarea>
          </div>
        </div>


        <div class="col-sm-12 ">
          <div class="panel panel-default">
            <div class="panel-heading"></div>
            <div class="panel-body">
              <span id="success_result"></span>
              <form method="post" id="repeater_yt_link">
                <div class="form-group">
                  <label>Enter Link Video<span class="text-danger">*</span></label>

                  <input type="text" name="name" id="name" class="form-control" required />
                </div>
                <div id="repeater">
                  <div class="repeater-heading" align="right">
                    <button type="button" class="btn btn-primary repeater-add-btn">Add Link Video</button>
                  </div> <br>
                  <div class="clearfix"></div>
                  <div class="items" data-group="link_video">
                    <div class="item-content">
                      <div class="form-group">
                        <div class="row">
                          <div class="col-md-12">
                            <label>Enter Link Video</label>
                            <input type="text" class="form-control" data-skip-name="true" data-name="skill[]" required>

                          </div>
                          <div class="col-md-12" align="right">
                            <button id="remove-btn" type="button" class="btn btn-danger" onclick="$(this).parents('.items').remove()"> <i class="fas fa-trash-alt"></i></button>

                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>




            <div class="form-group text-right">
              <button class="btn btn-danger btn-sm waves-effect waves-light" type="submit" name="submit"><span class="btn-label"><i class="fas fa-save"></i></span> Simpan</button>
            </div>
      </form>
    </div>
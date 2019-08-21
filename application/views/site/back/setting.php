<div class="container-fluid" data-codepage="<?php echo $codepage?>">

<?php echo form_open_multipart('admin/setting/setGeneral', array("class" => "form-horizontal r-separator"));?>
  <div class="row">
    <div class="col-4">    
      <div class="card">
        <div class="card-body">
          <div class="form-group">
            <label for="name">Favicon</label>
           
            <input type="file" id="input-file-disable-remove" name="favicon" class="dropify w-50" data-height="100" data-default-file="<?= img_url($site['favicon']); ?>" data-show-remove="false" />
          </div>
          <div class="form-group">
            <label for="name">Logo Web</label>
            <input type="file" id="input-file-disable-remove" name="logo" class="dropify w-50" data-height="100" data-default-file="<?= img_url($site['logo']); ?>" data-show-remove="false" />
          </div>
        </div>  
      </div>
    </div>
    <div class="col-8">
      <div class="card">
        <div class="card-body">
          <div class="form-group">
            <label for="name">Judul Sistem</label>
            <input type="text" name="title_site" id="title_site" class="form-control" value="<?php echo $site['title_site'] ?>">
          </div>
          <div class="form-group">
            <label for="name">Phone</label>
            <input type="text" name="phone" id="phone" class="form-control" value="<?php echo $site['phone'] ?>">
          </div>
          <div class="form-group">
            <label for="name">Email</label>
            <input type="text" name="email" id="email" class="form-control" value="<?php echo $site['email'] ?>">
          </div>
          <div class="form-group">
            <label for="name">Deskripsi</label>
            <textarea name="desc" id="desc" cols="30" class="form-control" rows="10" ><?php echo $site['desc'] ?></textarea>
          </div>
          <div class="form-group">
            <label for="name">Meta Tag</label>
            <textarea data-role='tags-input' name="meta" id="meta" cols="30" class="form-control" rows="10" ><?php echo $site['meta'] ?></textarea>
          </div>
          <div class="form-group m-b-0 text-right">
            <button class="btn btn-success btn-sm waves-effect waves-light" type="submit" name="submit"><span class="btn-label"><i class="fas fa-cogs"></i></span> Update</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  </form>
</div>
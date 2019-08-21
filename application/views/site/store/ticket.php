<div class="card user-card codepage" data-codepage="<?php echo $code_page ?>">
	<div class="card-body">
		<div class="media">
			<img src="<?php echo img_url($profile['img_path']) ?>" width="100" height="100" class="img-thumbnail rounded-circle"
			 alt="<?php echo ucwords(@$profile['firstname']).' '. ucwords(@$profile['lastname']);?>">
			<div class="media-body ml-3 pt-3">
				<h4><?php echo ucwords(@$profile['firstname']).' '. ucwords(@$profile['lastname']);?></h4>
				<div class="small text-muted">Terdaftar <?php echo tgl_indo(@$profile['created_at'])?></div>
				<div class="small text-muted">Email: <?php echo @$profile['email']?></div>
			</div>
		</div>
    <hr>
    <?php if($code_page == "replayTicket"):?>
    <div class="card text-white bg-secondary">
      <h6 class="card-header"><?php echo $ticket['title_type']?></h6>
      <div class="card-body">
        <h6 class="card-title"><?php echo $ticket['title']?></h6>
        <p class="card-text"><?php echo $ticket['content']?></p>
      </div>
    </div>
    <div class="row">
      <?php
      foreach($reply as $r): 
      if($r['id_user'] == $_SESSION['id_user']):?>  
      <div class="col-8 mt-3">
        <div class="card">
          <h6 class="card-header text-white bg-info "><?php echo ucwords(@$r['firstname']).' '. ucwords(@$r['lastname']);?></h6>
          <div class="card-body">
            <p class="card-text"><?php echo $r['content']?></p>
          </div>
        </div>
      </div>
      <?php else :?> 
      <div class="offset-md-4 col-8  mt-3">
        <div class="card">
          <h6 class="card-header text-white bg-success"><?php echo ucwords(@$r['firstname']).' '. ucwords(@$r['lastname']);?></h6>
          <div class="card-body">
            <p class="card-text"><?php echo $r['content']?></p>
          </div>
        </div>
      </div>
      <?php endif;
      endforeach;?>
    </div>
    <div class="mt-2">
      <?php if($ticket['status'] == 1 ):?>  
        <form method="post" action="<?php echo base_url('Profile/submitReplay')?>" method="POST">
            <input type="hidden" name="no_ticket" value="<?php echo $ticket['no_ticket']?>">
            <input type="hidden" name="id_ticket" value="<?php echo $ticket['id_ticket']?>">    
            <textarea name="content" id="content" class="summernote"></textarea>
            <div class="modal-footer">
              <button type="submit" name="submit" class="btn btn-danger waves-effect waves-light">Save changes</button>
            </div>
        </form>
      <?php endif;?>
    </div>
    <?php elseif($code_page == "addTicket"):?>
    <div class="mt-2"> 
      <form method="post" action="<?php echo base_url('Profile/newTicket')?>" method="POST">
          <div class="row">  
            <div class="form-group col-8">
              <label for="">Judul</label>
              <input class="form-control" name="title" type="text">
            </div>
            <div class="form-group col-4">
              <label for="">Kategori</label>
              <select name="id_ticket_type" class="form-control">
                <?php foreach($type as $ty):?>
                <option value="<?php echo $ty['id_ticket_type']?>"><?php echo $ty['title_type']?></option>
                <?php endforeach;?>
              </select>
            </div>  
            <div class="form-group col-12">
              <textarea name="content" id="content" class="summernote"></textarea>
            </div>          
          </div>    
          <div class="modal-footer">
            <button type="submit" name="submit" class="btn btn-danger waves-effect waves-light">Kirim</button>
          </div>
      </form>
    </div>
    <?php endif;?>
	</div>
</div>
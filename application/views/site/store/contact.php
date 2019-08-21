<div class="row codepage" data-codepage="<?= $code_page; ?>" >
	<div class="col-sm-6 mb-3 mb-sm-0">
		<div class="img-thumbnail">
			<div class="embed-responsive embed-map">
				<iframe src="<?php echo $system['maps']?>"
				 width="600" height="450" style="border:0" allowfullscreen></iframe>
			</div>
		</div>
	</div>
	<div class="col-sm-6">
		<h3>CONTACT US</h3>
		<form id="formContact" class="mt-3" action="#" data-url="<?= base_url('page/addContact') ?>">
			<div class="form-row">
				<div class="form-group col-md-6">
					<div class="media">
						<span><i class="fa fa-map-marker fa-fw text-info"></i></span>
						<div class="media-body ml-1">
							<div><?php echo @$system['complete_address']?></div>
              <div><?php echo @$system['subdistrict']?></div>
              <div><?php echo @$system['city']?></div>
              <div><?php echo @$system['province']?> - <?php echo @$system['zip_code']?></div>
						</div>
					</div>
				</div>
				<div class="form-group col-md-6">
					<div class="media mb-3 mb-md-0">
						<span><i class="fa fa-phone fa-fw text-info"></i></span>
						<div class="media-body ml-1"><?php echo @$system['phone']?></div>
					</div>
					<div class="media">
						<span><i class="fa fa-envelope fa-fw text-info"></i></span>
						<div class="media-body ml-1"><?php echo @$system['email']?></div>
					</div>
				</div>
			</div>
			<div class="form-group">
				<input type="text" class="form-control" name="name" placeholder="Name">
			</div>
			<div class="form-group">
				<input type="email" class="form-control" name="email" placeholder="Email">
			</div>
			<div class="form-group">
				<textarea class="form-control" rows="3" name="content" placeholder="Message"></textarea>
			</div>
			<button type="submit" class="btn btn-info">SEND</button>
		</form>
	</div>
</div>
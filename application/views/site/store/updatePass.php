<div class="card user-card codepage" data-codepage="<?php echo $code_page ?>">
	<div class="card-body">
		<div class="media">
			<img src="<?php echo img_url($profile['img_path']) ?>" width="100" height="100" class="img-thumbnail rounded-circle"
			 alt="<?php echo ucwords(@$profile['firstname']).' '. ucwords(@$profile['lastname']);?>">
			<div class="media-body ml-3 pt-3">
				<h4><?php echo ucwords(@$profile['firstname']).' '. ucwords(@$profile['lastname']);?></h4>
				<div class="small text-muted">Terdaftar <?php echo tgl_indo(@$profile['created_at'])?></div>
				<div class="small text-muted">Email: <?php echo @$profile['email']?></div>
				<div class="small text-muted">Pembelian: 100</div>
			</div>
		</div>
    <hr>
    <div class="row justify-content-center">
			<div class="col-xl-6 col-md-8 col-12">
				<div class="tab-pane fade show">
					<div class="card shadow-sm">
						<div class="card-body">
							<div class="row">									
								<div class="col-sm-12">
								<?php echo form_open('Profile/updatePassword'); ?>
										<div class="form-group">
											<label for="passwordold">Masukakan Password lama</label>
											<input type="password" class="form-control" name="oldpassword" placeholder="Password lama">
										</div>
										<div class="form-group">
											<label for="passwordold">Masukakan Password Baru</label>
											<input class="form-control" type="password" name="password" value="<?php echo set_value('password'); ?>" required/>
											<?php echo form_error('password'); ?>
										</div>
										<div class="form-group">
											<label for="passwordold">Ulangi Password Baru</label>
											<input type="password" class="form-control" name="passconf" value="<?php echo set_value('passconf'); ?>" />
											<?php echo form_error('passconf');?>
										</div>
										<?php if(!empty($_SESSION['fail_msg'])):?>
											<div class="alert alert-danger" role="alert">
												<?php echo $_SESSION['fail_msg']?>
											</div>
										<?php elseif(!empty($_SESSION['success_msg'])):?>
											<div class="alert alert-success" role="alert">
												<?php echo $_SESSION['success_msg']?>
											</div>
										<?php endif;?>
										<div class="pull-right">
											<button type="submit" name="submit" class="btn btn-danger waves-effect waves-light"><i class="fa fa-save"></i> Simpan</button>
										</div>										
								</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
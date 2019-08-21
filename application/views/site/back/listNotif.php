<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid" data-codepage="<?php echo $codepage ?>">

<?php if(!empty($_SESSION['success_msg'])):?>
		<div class="alert alert-success">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
			<h3 class="text-success"><i class="fa fa-check-circle"></i> Success</h3> <?php echo $_SESSION['success_msg']?>.
		</div>
<?php elseif(!empty($_SESSION['fail_msg'])):?>
		<div class="alert alert-warning">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
			<h3 class="text-warning"><i class="fa fa-exclamation-triangle"></i> Warning</h3> <?php echo $_SESSION['fail_msg']?>.
		</div>
<?php endif;?>
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					
					<div class="table-responsive">
						<table id="listPage" class="table table-striped" style="width:100%">
							<thead>
								<tr>
								<th width="75%">Notifikasi</th>
								<th></th>
								<th>Tanggal</th>
								</tr>
							</thead>
							
							<?php 
							foreach ($notifi as $n):
							?>
							<tbody>
								<tr role="row" class="odd">
									<td>
									<a href="<?php echo base_url('admin/notification/linkNotif/'.$n->id) ?>" class="message-item">
						            <div class="mail-contnet">
						            <h5><b>
						                <?php 
						                if($n->id_comment != 0 && $n->id_comment != null){ 
							            	echo "Comment";
					                	}
					                	else if($n->id_ticket != 0 && $n->id_ticket != null){
					            			echo "Ticket";
					                	}
					                	else if($n->id_transaction != 0 && $n->id_transaction != null){
					            			echo "Transaksi";
										}
										else if($n->id_review != 0 && $n->id_review != null){
											echo "Review";
										}
					                	?>
					            	</b></h5>
					            	
						            <span class="time"><?php echo $n->desc;?></span>
						            </div>
					                </a>
									</td>
									<td>
									</td>
									<td>
									<a href="<?php echo base_url('admin/notification/linkNotif/'.$n->id) ?>" class="message-item">
									<span class="time"><?php echo $n->created_at;?></span>
									</a>
									</td>
								</tr>
							</tbody>
							<?php 
							
							endforeach
							?>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Container fluid  -->

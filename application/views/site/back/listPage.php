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
		<div class="col-md-3 offset-md-9 text-right">
			<a href="<?php echo base_url('admin/Page/addpage')?>" class="btn btn-primary mb-3">+ Tambah Halaman</a>
		</div>
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<div class="table-responsive">
						<table id="listPage" class="table table-striped" style="width:100%">
							<thead>
								<tr>
									<th>#</th>
									<th width="65%">Judul</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php
									$no=1;
									foreach (@$page as $p ):?>
								<tr>
									<td>
										<?php echo $no?>
									</td>
									<td>
										<?php echo $p['title_page']?>
									</td>
									<td>
										<button class="btn btn-danger btn-sm waves-effect waves-light del_page" type="button" data-id="<?php echo $p['id_page']?>" data-dir="<?php echo base_url('Process/del_page/')?>"><span class="btn-label"><i class="fa as fa-ban"></i></span>
											Hapus</button>
											<a href="<?php echo base_url('Dashboard/page/editPage/'.$p['id_page']);?>" class="btn btn-info btn-sm waves-effect waves-light"role="button" aria-pressed="true"><i class="fa as fas fa-edit"></i> Edit</a>						
									</td>
								</tr>
								<?php  $no++; endforeach;?>
								</tfoot>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Container fluid  -->

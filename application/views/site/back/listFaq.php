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
				<div class="col-md-3 offset-md-9 text-right">
					<a href="<?php echo base_url('admin/Page/addFaq')?>" class="btn btn-primary mb-3">+ Tambah Halaman</a>
				</div>
					<div class="table-responsive">
						<table id="listPage" class="table table-striped" style="width:100%">
							<thead>
								<tr>
									<th>No</th>
									<th width="45%">Judul</th>
									<th widht="15">Kategori</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<?php 
							$no = 1;
							foreach($faq as $f) :
							?>
							<tbody>
								<tr role="row" class="odd">
									<td>
										<?php echo $no ;?> 
									</td>
									<td>
										<?php echo $f['judul']; ?> 
									</td>
									<td>
										<?php echo $f['kategori']; ?>
									</td>
									<td>
										<a href="<?php echo base_url('admin/page/del_faq/'.$f['id'])?>" class="btn btn-danger btn-sm waves-effect waves-light del_page" role="button" aria-pressed="true">
										<span class="btn-label"><i class="fa as fa-ban"></i></span>Hapus</a>
										<a href="<?php echo base_url('admin/page/edit_faq/'.$f['id'])?>" class="btn btn-info btn-sm waves-effect waves-light" role="button" aria-pressed="true">
										<i class="fa as fas fa-edit"></i> Edit</a>
									</td>
								</tr>
							</tbody>
							<?php 
							$no++;
							endforeach ?>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Container fluid  -->

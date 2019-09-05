<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid" data-codepage="<?= $codepage ?>" data-subpage="<?= $subpage ?>">
	<!-- ============================================================== -->
	<!-- Start Page Content -->
	<!-- ============================================================== -->
	<!-- Column rendering -->
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<?php if(!empty($_SESSION['success_msg'])):?>
						<div class="alert alert-success" role="alert">
							<?php echo $_SESSION['success_msg']?>
						</div>
					<?php elseif(!empty($_SESSION['fail_msg'])):?>
					<div class="alert alert-danger" role="alert">
						<?php echo $_SESSION['fail_msg']?>
					</div>
					<?php endif;?>
					<div class="table-responsive">
                        <div class="mb-4 text-right">
                            <a href="<?= base_url('admin/Donator/addDonator');?>"><button type="button" class="btn btn-primary btn-rounded"><i class="mdi mdi-open-in-new"></i> Tambah Donatur</button></a>
                        </div>
						<table id="listProduct" class="table table-striped" style="width:100%">
							<thead>
								<tr>
									<th>No</th>
									<th width="40%" >Nama Donatur</th>
									<th>Nominal</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
              <?php
              $no = 1;
              foreach ($donator as $d):?>
                <tr>
                    <td><?= $no?></td>
                    <td><?= $d['donatur_name']?></td>
                    <td><?= $d['nominal']?></td>
                    <td>
                      <a href="<?php echo base_url('admin/Donator/editDonator/'.$d['id_donator'])?>">
					  <button class="btn btn-facebook waves-effect btn-rounded waves-light btn-info btn-sm edit-product " type="button"><i class="fas fa-pencil-alt"></i></button></a>
                      <button class="btn btn-googleplus waves-effect btn-rounded waves-light btn-danger btn-sm del-product" type="button" data-id="<?= $d['id_donator']?>" data-dir="<?php echo base_url('admin/Donator/deleted/')?>"><i class="fas fa-trash-alt"></i></button>
                    </td>
                </tr>                
              <?php
              $no++; 
              endforeach?>
								</tfoot>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- ============================================================== -->
	<!-- End PAge Content -->
	<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
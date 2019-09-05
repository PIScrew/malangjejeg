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
                        <!-- <div class="mb-4 text-right">
                            <a href="<?= base_url('admin/Donator/addDonator');?>"><button type="button" class="btn btn-primary btn-rounded"><i class="mdi mdi-open-in-new"></i> Tambah Donatur</button></a>
                        </div> -->
						<table id="listProduct" class="table table-striped" style="width:100%">
							<thead>
								<tr>
									<th>No</th>
									<th>Nama Pemesan</th>
                                    <th>Telepon</th>
                                    <th>Alamat</th>
                                    <th>Nomer Transaksi</th>
                                    <th>Kurir</th>
									<th>Total</th>
                                    <th>Status</th>
								</tr>
							</thead>
							<tbody>
              <?php
              $no = 1;
              foreach ($order as $o):?>
                <tr>
                    <td><?= $no?></td>
                    <td><?= $o['firstname']?></td>
                    <td><?= $o['telephone']?></td>
                    <td><?= $o['complete_address']?></td>
                    <td><?= $o['id_transaction']?></td>
                    <td><?= $o['courier']?></td>
                    <td><?= $o['total_price_unique']?></td>
                    <td>
                        <?php
                            $status = $o['status'];
                            if($status == 1)
                            {
                        ?>      
                                <a href="/admin/Order/update_status?$id=<?php echo $o['id_invoice'];?>&$val=<?php echo $o['status']; ?>
                                <button type="button" class="btn btn-success btn-rounded">Proses</button></a>
                        <?php    
                            }
                            else{
                            ?>
                                <a href="/admin/Order/update_status?$id=<?php echo $o['id_invoice'];?>&$val=<?php echo $o['status']; ?>
                                <button type="button" class="btn btn-danger btn-rounded">Selesai</button></a>
                        <?php
                            }
                        ?>
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
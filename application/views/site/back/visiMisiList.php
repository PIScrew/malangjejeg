<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid" data-codepage="<?php echo $codepage ?>">
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
						<table id="listProduct" class="table table-striped" style="width:100%">
							<thead>
								<tr>
									<th></th>
                                    <th>Type</th>
                                    <th>Text</th>
                                    <th>Created At</th>
									<th>Updated At</th>

								</tr>
							</thead>
							<tbody>
              <?php
              $no = 1;
              foreach ($visi_misi as $v):?>
                <tr>
                    <td><?= $no?></td>
                    <td><?php 
                    if($v['type']==0){
                         echo "Misi";
                        }
                         else {echo "Visi";}; ?></td>
                    <td><?= $v['text']?></td>
                    <td><?= $v['created_at']?></td>
					<td><?= $v['updated_at']?></td>
                    <td>
                      
                      <a href="<?php echo base_url('admin/visiMisi/editVisiMisi/'.$v['id'])?>"><button class="btn btn-facebook waves-effect btn-rounded waves-light btn-info btn-sm edit-product " type="button"><i class="fas fa-pencil-alt"></i></button></a>
					  <a href="<?php echo base_url('admin/visiMisi/deleteVisiMisi/'.$v['id'])?>"><button class="btn btn-googleplus waves-effect btn-rounded waves-light btn-danger btn-sm del-product" type="button"><i class="fas fa-trash-alt"></i></button></a>
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
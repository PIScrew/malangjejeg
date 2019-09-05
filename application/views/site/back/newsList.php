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
									<th>Judul Berita</th>
									<th width="50%" >Image </th>
                                    <th>Date & Time </th>
                                    <th>Content</th>
									<th>Link Berita</th>
                                    <th>Created By</th>

								</tr>
							</thead>
							<tbody>
              <?php
              $no = 1;
              foreach ($news as $n):?>
                <tr>
                    <td><?= $no?></td>
                    <td><?= $n['news_title']?></td>
                    <td><img src="<?= img_url($n['news_img'])?>" alt="user" class="img-tumbnail" width="100"/></td>
                    <td><?= $n['created_at']?></td>
                    <td><?= $n['news_content']?></td>
					<td><?= $n['news_url']?></td>
                    <td><?php 
                    if($n['created_by']==0){
                         echo "None";
                        }
                         else {echo "Superadmin";}; ?></td>

                    <td>
                      
                      <a href="<?php echo base_url('admin/news/editNews/'.$n['id_news'])?>"><button class="btn btn-facebook waves-effect btn-rounded waves-light btn-info btn-sm edit-product " type="button"><i class="fas fa-pencil-alt"></i></button></a>
					  <a href="<?php echo base_url('admin/news/deleteNews/'.$n['id_news'])?>"><button class="btn btn-googleplus waves-effect btn-rounded waves-light btn-danger btn-sm del-product" type="button"><i class="fas fa-trash-alt"></i></button></a>
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
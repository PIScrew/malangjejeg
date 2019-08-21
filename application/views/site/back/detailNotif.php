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
<?php if($page_title == "Pemberitahuan Transaksi") :?>
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<p>Kode Invoice : <b> <?php echo $transaksi['invoice_code']?> </b></p>		
					<p><?php echo $transaksi['desc']?> sebesar <b> Rp.<?php echo $transaksi['total_price']?></b></p> 
					<p>atas nama <b> <?php echo $transaksi['name'] ?></b></p> 
					pada <?php echo $transaksi['created_at']?>
				</div>
			</div>
		</div>
	</div>

<?php elseif($page_title == "Pemberitahuan Tiket"):?>
<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<p>Kode Invoice : <b> <?php echo $ticket['invoice_code']?> </b></p>		
					<p><?php echo $ticket['desc']?> </p> 
					<p>atas nama <b> <?php echo $ticket['fullname'] ?></b></p> 
					pada <?php echo $ticket['created_at']?>
				</div>
			</div>
		</div>
	</div>
<?php endif;?>
</div>
<!-- End Container fluid  -->

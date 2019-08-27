<div class="row">
	<div class="col-md-8">
		<h3 class="title"><i class="fa fa-money"></i> Invoice</h3>
		<hr>
		<div class="bg-light p-3 border shadow-sm">
			<div class="text-center">
				<h3>Kode Order Anda:</h3>
				<h3 class="text-info"><?= $invoice[0]['code_order']; ?></h3>
				<?php if ($invoice[0]['payment_method']==0) : ?>
				<h5>Barang akan dikirim pada alamat pesanan, harap tunggu kurir kami dan lakukan pembayaran. Terimakasih</h5>
				<?php elseif($invoice[0]['payment_method']==1): ?>
				<h5>Harap Lakukan Pembayaran sebelum batas waktu <span class="text-danger font-weight-bold">(<?= $invoice[0]['expired_date'] ?>)</span></h5><h5> Sebesar <span class="text-danger font-weight-bold">Rp <?= rupiah($invoice[0]['total_price_unique']);?> (pastikan nominal sesuai hingga angka terakhir)</span></h5>
				<h5>Bank <?= $invoice[0]['bank_name']; ?></h5>
				<h5><?= $invoice[0]['account_number']; ?> a/n <?= $invoice[0]['atas_nama']; ?></h5>
				<?php endif; ?>
				<a href="<?php echo base_url()?>" class="btn btn-primary">SELESAI</a>
			</div>
		</div>
		<div class="mt-3">
			<h4>Dikirim ke Alamat</h4>
			<div><span class="fa fa-user"></span> <?= $invoice[0]['firstname']." ". $invoice[0]['lastname'] ?></div>
			<div><span class="fa fa-home"></span> <?= $invoice[0]['complete_address'].", ".$invoice[0]['subdistrict'].", ".$invoice[0]['city'].", ".$invoice[0]['province']; ?></div>
			<div><span class="fa fa-at"></span> <?= $invoice[0]['email']; ?></div>
			<div><span class="fa fa-phone"></span> <?= $invoice[0]['telephone']; ?></div>
		</div>
	</div>
	<div class="col-md-4 pt-5">
		<h4 class="title mb-3">Order summary</h4>
		<?php $subtotal=0; foreach ($invoice_product as $p) :?>
		<div class="media border-bottom mb-3">
			<?php if ($p['image'] == null) :?>
				<img src="<?php echo img_url($system['img_product_default']) ?>" width="50" height="50" alt="<?= $p['title_product'];?>">
			<?php else :?>
				<img src="<?php echo img_url($p['image']) ?>" width="50" height="50" alt="<?= $p['title_product'];?>">
			<?php endif;?>
			<div class="media-body ml-3">
				<h6><?= $p['title_product'];?></h6>
				<div><?= $p['qty'] ?> x <span class="price">Rp <?= rupiah($p['selling_price']);?></span></div>
			</div>
		</div>
		<?php $subtotal+=$p['selling_price']*$p['qty']; endforeach; ?>
		<div class="d-flex justify-content-between">
			<span>Items</span>
			<span>Rp <?= rupiah($subtotal) ?></span>
		</div>
		<div class="d-flex justify-content-between">
			<span>Unique Code</span>
			<span>Rp <?= rupiah($invoice[0]['price_unique']);?></span>
		</div>
		<div class="d-flex justify-content-between">
			<span>Shipping</span>
			<span>Rp <?= rupiah($invoice[0]['delivery_fee']);?></span>
		</div>
		<hr>
		<div class="box-total">
			<h4>TOTAL</h4>
			<h4><span class="price">Rp <?= rupiah($invoice[0]['total_price_unique']);?></span></h4>
			</div>
		</div>
	</div>
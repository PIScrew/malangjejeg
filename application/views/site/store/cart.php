<h3 class="title mb-3 codepage" data-codepage="<?php echo $code_page ?>">Anda mempunyai <?= sizeof($cart); ?> barang dikeranjang</h3>

<!-- Shopping Cart Table -->
<table class="table table-cart">
	<tbody>
		<?php $subtotal=0; foreach($cart as $c): ?>
		<tr>
			<td><button class="btn btn-sm btn-outline-warning rounded-circle remove-cart mb-3" title="Remove" data-id="<?= $c['id_cart'] ?>" data-url="<?= base_url('cart/remove_cart') ?>"><i class="fa fa-close"></i></button></td>
			<td>				
				<?php if ($c['image'] == null) :?>
					<a href="<?php echo base_url('p/'.$c['slug_product']);?>"><img src="<?php echo img_url($system['img_product_default']) ?>" width="50" height="50" alt="<?= $c['title_product'];?>"></a>
				<?php else :?>
					<a href="<?php echo base_url('p/'.$c['slug_product']);?>"><img src="<?php echo img_url($c['image']) ?>" width="50" height="50" alt="<?= $c['title_product'];?>"></a>
				<?php endif;?>
				<button class="btn btn-sm btn-outline-warning rounded">Remove</button>
			</td>
			<td>
				<h6><a href="<?php echo base_url('p/'.$c['slug_product']);?>" class="text-body"><?= $c['title_product'];?></a></h6>
				<h6 class="text-muted">Rp <?= rupiah($c['selling_price']);?></h6>
			</td>
			<td>
				<div class="input-spinner">
					<input type="number" class="form-control" name="qty" value="<?= $c['qty'];?>" min="1" max="<?= $c['stok'];?>"  data-id="<?= $c['id_cart']?>" data-price="<?= $c['selling_price'];?>" data-url="<?= base_url('cart/update_cart') ?>">
					<div class="btn-group-vertical">
						<button type="button" class="btn btn-light"><i class="fa fa-chevron-up"></i></button>
						<button type="button" class="btn btn-light"><i class="fa fa-chevron-down"></i></button>
					</div>
				</div>
				<span class="price product_price" data-subprice="<?= $c['selling_price']*$c['qty']?>" id="price_<?= $c['id_cart']?>">Rp <?= rupiah($c['selling_price']*$c['qty']);?></span>
			</td>
		</tr>
		<?php $subtotal+=$c['selling_price']*$c['qty']; endforeach; ?>
		<tr>
			<td colspan="4">
				<div class="box-total">
					<h4>Subotal: <span class="price" id="subtotal">Rp <?= rupiah($subtotal) ?></span></h4>
					<?php if($subtotal!=0): ?>
						<a href="<?php echo base_url('Cart/checkout')?>" class="btn btn-success">CHECKOUT</a>
					<?php endif; ?>
				</div>
			</td>
		</tr>

	</tbody>
</table>
<!-- /Shopping Cart Table -->
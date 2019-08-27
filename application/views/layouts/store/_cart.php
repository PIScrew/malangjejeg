<div class="modal fade modal-cart" id="cartModal" tabindex="-1" role="dialog" aria-labelledby="cartModalLabel"
 aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="cartModalLabel">Anda mempunyai <?= sizeof($cart); ?> barang dikeranjang</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">

			<?php $subtotal=0; foreach($cart as $c): ?>
				<div class="media">
					<a href="<?php echo base_url("p/".$c['slug_product'])?>">
						<?php if ($c['image'] == null) :?>
							<img src="<?php echo img_url($system['img_product_default']) ?>" width="50" height="50"alt="<?php echo $c['title_product']?>">
						<?php else :?>
							<img src="<?php echo img_url($c['image']) ?>" width="50" height="50" alt="<?php echo $c['title_product']?>">
						<?php endif;?>
					</a>
					<div class="media-body">
						<a href="<?= base_url('home/detail/').$c['slug_product'] ?>" title="<?= $c['title_product'];?>"><?= $c['title_product'];?></a>
						<div class="input-spinner input-spinner-sm">
						<input type="number" class="form-control form-control-sm cart_product_price" name="qty_cart" value="<?= $c['qty'];?>" min="1" max="<?= $c['stok'];?>"  data-id="<?= $c['id_cart']?>" data-price="<?= $c['selling_price'];?>" data-url="<?= base_url('cart/update_cart') ?>">
							<div class="btn-group-vertical">
								<button type="button" class="btn btn-light"><i class="fa fa-chevron-up"></i></button>
								<button type="button" class="btn btn-light"><i class="fa fa-chevron-down"></i></button>
							</div>
						</div>
						x <span class="price">Rp <?= rupiah($c['selling_price']);?></span>
						<button type="button" class="close remove-cart" title="Remove" aria-label="Close" data-id="<?= $c['id_cart'] ?>" data-url="<?= base_url('cart/remove_cart') ?>"><i class="fa fa-trash-o"></i></button>
					</div>
				</div>
			<?php $subtotal+=$c['selling_price']*$c['qty']; endforeach; ?>
			</div>
			<div class="modal-footer">
				<div class="box-total">
					<h4>Subotal: <span class="price side_subtotal">Rp <?= rupiah($subtotal) ?></span></h4>
					<a href="<?php echo base_url('Cart/');?>" class="btn btn-success">VIEW CART</a>
				</div>
			</div>
		</div>
	</div>
</div>
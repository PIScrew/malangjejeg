<!-- Grid -->
<h3 class="title mt-4"></h3>
<!-- url_filter -->
<div class="row no-gutters gutters-2">

	<?php foreach($listInfo as $p):?>
		<div class="col-6 col-md-3 mb-2">
			<div class="card card-product">
				<a href="<?php echo base_url("p/".$p['slug'])?>">
        <?php if ($p['img_path'] == null):?>
          <img src="<?php echo img_url($system['img_product_default']) ?>" alt="<?php echo $p['title_page']?>" class="card-img-top img-product">
        <?php else:?>
          <img src="<?php echo img_url($p['img_path']) ?>" alt="<?php echo $p['title_page']?>" class="card-img-top img-product">
        <?php endif;?>
				</a>
				<div class="card-body">
					<a href="<?php echo base_url("inf/".$p['slug'])?>" class="card-title h6"><?php echo $p['title_page']?></a>
          <div class="d-flex justify-content-between align-items-center">
            <a href="<?php echo base_url('inf/'.$p['slug'])?>" class="col-12"><button type="button" class="btn btn-outline-info btn-sm btn-block detail-product">Lihat Detail</button></a>
          </div>
				</div>
			</div>
		</div>
	<?php endforeach; ?>
</div>
<!-- /Grid -->

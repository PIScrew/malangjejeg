
<div class="container-fluid" data-codepage="<?= $codepage?>" data-subpage="<?= $subpage?>">

<!-- Home Slider -->
  <div class="swiper-container"   id="home-slider">
    <div class="swiper-wrapper">
      <?php foreach (@$slider as $s):?>
        <a href="<?php if ($s['link'] == null) { echo "#";} else { echo $s['link']; }?>" class="swiper-slide" data-cover="<?php echo img_url($s['img_path']) ?>" data-xs-height="150px" data-sm-height="265px"
          data-md-height="300px" data-lg-height="300px" data-xl-height="300px"></a>
        <?php endforeach;?>
      </div>
      <a href="#" role="button" class="carousel-control-prev d-none d-sm-flex" id="home-slider-prev"><i class="fa fa-angle-left fa-lg"></i></a>
      <a href="#" role="button" class="carousel-control-next d-none d-sm-flex" id="home-slider-next"><i class="fa fa-angle-right fa-lg"></i></a>
  </div>
<!-- /Home Slider -->

  <h3 class="title mt-4">Produk Baru </h3>
  <div class="row no-gutters gutters-2">
    <!-- List Produk -->
    <?php foreach($productNew as $pn){ ?>
      <div class="col-6 col-md-3 mb-2">
				<div class="card card-product">
          <div class="badge badge-danger badge-pill">Tersedia 5</div>
            <button class="add-cart  "  data-product=170 data-cart=add data-url=https://pasarmbois.com/cart/add_cart title="Added to cart" data-id="170"><i class="fa fa-shopping-cart fa-lg"></i></button>
								<a href="https://pasarmbois.com/p/peyek-bu-mut">
				<img src="https://pasarmbois.com/assets//img/product/1557811913-1088892458/PRODUCT-MCF1414.jpg" alt="Peyek Bu Mut" class="card-img-top img-product">
				</a>
				<div class="card-body">
					<span class="price">Rp <?= number_format($pn->price,0,",",".") ?></span>
					<a href="https://pasarmbois.com/p/peyek-bu-mut" class="card-title h6"><?= $pn->title_product ?></a>
					<div class="d-flex justify-content-between align-items-center">
            <button type="button" data-id="170" onclick="window.location.href='https://pasarmbois.com/p/peyek-bu-mut';" class="btn btn-outline-info btn-sm btn-block detail-product">Lihat Detail</button>
          </div>
				</div>
			</div>
		</div>
    <?php } ?>

  </div>

</div>

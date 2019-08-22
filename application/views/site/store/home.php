<!-- Home Slider -->
<div class="container-fluid" data-codepage="<?= $codepage?>" data-subpage="<?= $subpage?>">

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

    <!-- Hot new releases -->
    <h3 class="title mt-4">Hot New Releases</h3>
    <div class="row no-gutters gutters-2">
      <?php foreach (@$productNew as $pn):?>
        <div class="col-6 col-md-3 mb-2">
          <div class="card card-product">
            <?php

            if (isset($pn['id_cart'])) {
              if ($pn['id_cart']!=0) {
                $class_cart="active";
                $data_cart=' data-product='.$pn['id_product'].' data-id='.$pn['id_cart'].' data-cart=remove'." data-url=".base_url('cart/remove_cart');
              } else {
                $class_cart="";
                $data_cart=' data-product='.$pn['id_product'].' data-cart=add'.' data-url='.base_url('cart/add_cart');
              }	
            } else {
              $class_cart="";
              $data_cart=' data-product='.$pn['id_product'].' data-cart=add'.' data-url='.base_url('cart/add_cart');
            }

            $now = strtotime('Y-m-d H:i:s');
            $expire =  strtotime('Y-m-d H:i:s',strtotime('+24 hour',strtotime($pn['created_at'])));
            if (@$expire < $now) : ?>
              <div class="ribbon"><span class="bg-info text-white">New</span></div>
            <?php elseif ($pn['qty']>0 && $pn['qty']<= 5) :?>
              <div class="badge badge-danger badge-pill">Tersedia <?= $pn['qty']; ?></div>
            <?php elseif($pn['qty']<=0):?>
              <div class="badge badge-danger badge-pill">Habis</div>
            <?php endif; ?>
          <?php if(@$_SESSION['status']!="pmadmin"): ?>
          
          <?php endif; ?>
          <?php if($pn['qty']>0 and @$_SESSION['status']!="pmadmin" ):?>
          <button class="add-cart  <?= $class_cart; ?>" <?= $data_cart; ?> title="Added to cart" data-id="<?php echo $pn['id_product']?>"><i class="fa fa-shopping-cart fa-lg"></i></button>
          <?php endif; ?>
          <a href="<?php echo base_url("p/".$pn['slug_product'])?>">
          <img src="<?php echo img_url_product() ?>" alt="<?php echo $pn['title_product']?>" class="card-img-top img-product">
          </a>
          <div class="card-body">
            <span class="price"><?php echo rupiah($pn['selling_price'])?></span>
            <a href="<?php echo base_url("p/".$pn['slug_product'])?>" class="card-title h6"><?php echo $pn['title_product']?></a>
            <!-- <div class="d-flex justify-content-between align-items-center">
              <?php if (rating_product($pn['id_product']) == 0):?>
              <button type="button" data-id="<?= $pn['id_product'] ?>" onclick="window.location.href='<?= base_url('p/'.$pn['slug_product']) ?>';" class="btn btn-outline-info btn-sm btn-block detail-product">Lihat Detail</button>
              <?php else : ?>
                <span class="rating" data-value="<?php echo rating_product($pn['id_product'])?>"></span>
                <button type="button" data-id="<?= $pn['id_product'] ?>" onclick="window.location.href='<?= base_url('p/'.$pn['slug_product']) ?>';" class="btn btn-outline-info btn-sm detail-product">Lihat Detail</button>
              <?php endif;?>
            </div> -->
          </div>
        </div>
      </div>
    <?php endforeach; ?>

  </div>
  <!-- /Hot new releases -->
  <!-- Popular -->
  <h3 class="title mt-4">Popular Product</h3>
  <div class="content-slider">
    <div class="swiper-container" id="popular-slider">
      <div class="swiper-wrapper">

        <div class="swiper-slide">
          <div class="row no-gutters gutters-2">
            <?php $i = 0;
            foreach ($populer as $pp): 
              if (isset($pp['id_wishlist'])) {
                if ($pp['id_wishlist']!=0) {
                  $class_wishlist="active";
                  $data_wishlist=' data-produc='.$pp['id_product'].' data-id='.$pp['id_wishlist'].' data-wishlist=remove'." data-url=".base_url('wishlist/user_wishlist');
                } else {
                  $class_wishlist="";
                  $data_wishlist=' data-product='.$pp['id_product'].' data-wishlist=add'.' data-url='.base_url('wishlist/user_wishlist');
                }
              } else {
                $class_wishlist="";
                $data_wishlist=' data-product='.$pp['id_product'].' data-wishlist=add'.' data-url='.base_url('wishlist/user_wishlist');
              }
              
              if (isset($pp['id_cart'])) {
                if ($pp['id_cart']!=0) {
                  $class_cart="active";
                  $data_cart=' data-product='.$pp['id_product'].' data-id='.$pp['id_cart'].' data-cart=remove'." data-url=".base_url('cart/remove_cart');
                } else {
                  $class_cart="";
                  $data_cart=' data-product='.$pp['id_product'].' data-cart=add'.' data-url='.base_url('cart/add_cart');
                }	
              } else {
                $class_cart="";
                $data_cart=' data-product='.$pp['id_product'].' data-cart=add'.' data-url='.base_url('cart/add_cart');
              }

              if ($i < 4) :?>
              <div class="col-6 col-md-3 mb-2">
                <div class="card card-product">
                  <?php if ($pp['qty']>0 && $pp['qty']<= 5) :?>
                    <div class="badge badge-danger badge-pill">Tersedia <?= $pp['qty']; ?></div>
                  <?php elseif($pp['qty']<=0):?>
                    <div class="badge badge-danger badge-pill">Habis</div>
                  <?php endif; ?>
                  <?php if(@$_SESSION['status']!="pmadmin"): ?>
                  <button class="wishlist <?= $class_wishlist; ?>" <?= $data_wishlist; ?> <?php if($this->session->userdata('status') != "pmmember"){ echo 'data-toggle="modal" data-target=".bs-example-modal-sm"';}?> title="Add to wishlist"><i class="fa fa-heart"></i></button>
                  <?php endif; ?>
                  <?php if($pp['qty']>0 and @$_SESSION['status']!="pmadmin" ):?>			
                  <button class="add-cart  <?= $class_cart; ?>" <?= $data_cart; ?> title="Added to cart" data-id="<?php echo $pp['id_product']?>"><i class="fa fa-shopping-cart fa-lg"></i></button>
                  <?php endif; ?>
                  <a href="<?php echo base_url("p/".$pp['slug_product'])?>">
                  <img src="<?php echo img_url_product($pp['img_path']) ?>" walt="<?php echo $pp['title_product']?>" class="card-img-top img-product">
                  </a>
                  <div class="card-body">
                    <span class="price"><?php echo rupiah($pp['selling_price'])?></span>
                    <a href="<?php echo base_url("p/".$pp['slug_product'])?>" class="card-title h6"><?php echo $pp['title_product']?></a>
                    <div class="d-flex justify-content-between align-items-center">
                      <?php if ($pp['rating'] == 0):?>
                      <button type="button" data-id="<?= $pp['id_product'] ?>" onclick="window.location.href='<?= base_url('p/'.$pp['slug_product']) ?>';" class="btn btn-outline-info btn-sm btn-block detail-product">Lihat Detail</button>
                      <?php else : ?>
                        <span class="rating" data-value="<?php echo $pp['rating']?>"></span>
                        <button type="button" data-id="<?= $pp['id_product'] ?>" onclick="window.location.href='<?= base_url('p/'.$pp['slug_product']) ?>';" class="btn btn-outline-info btn-sm detail-product">Lihat Detail</button>
                      <?php endif;?>
                    </div>
                  </div>
                </div>
              </div>
            <?php endif; $i++;
            endforeach;?>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="row no-gutters gutters-2">
            <?php $i = 0;
            foreach ($populer as $pp): 
              if ($i > 3 && $i < 8) :?>
            <div class="col-6 col-md-3 mb-2">
              <div class="card card-product">
                <?php if ($pp['qty']>0 && $pp['qty']<= 5) :?>
                  <div class="badge badge-danger badge-pill">Tersedia <?= $pp['qty']; ?></div>
                <?php elseif($pp['qty']<=0):?>
                  <div class="badge badge-danger badge-pill">Habis</div>
                <?php endif; ?>
                <button class="wishlist" <?php if($this->session->userdata('status') != "pmmember"){ echo 'data-toggle="modal" data-target=".bs-example-modal-sm"';}?> title="Add to wishlist"><i class="fa fa-heart"></i></button>		
                <?php if($pp['qty']>0):?>						
                <button class="add-cart  <?= $class_cart; ?>" <?= $data_cart; ?>  <?php if($this->session->userdata('status') != "pmmember"){ echo 'data-toggle="modal" data-target=".bs-example-modal-sm"';}?> title="Added to cart" data-id="<?php echo $pp['id_product']?>"><i class="fa fa-shopping-cart fa-lg"></i></button>
                <?php endif; ?>
                <a href="<?php echo base_url("p/".$pp['slug_product'])?>">
                <img src="<?php echo img_url_product($pp['img_path']) ?>" walt="<?php echo $pp['title_product']?>" class="card-img-top img-product">
                </a>
                <div class="card-body">
                  <span class="price"><?php echo rupiah($pp['selling_price'])?></span>
                  <a href="d<?php echo base_url("p/".$pp['slug_product'])?>" class="card-title h6"><?php echo $pp['title_product']?></a>
                  <div class="d-flex justify-content-between align-items-center">
                    <?php if ($pp['rating'] == 0):?>
                    <button type="button" data-id="<?= $pp['id_product'] ?>" onclick="window.location.href='<?= base_url('p/'.$pp['slug_product']) ?>';" class="btn btn-outline-info btn-sm btn-block detail-product">Lihat Detail</button>
                    <?php else : ?>
                      <span class="rating" data-value="<?php echo $pp['rating']?>"></span>
                      <button type="button" data-id="<?= $pp['id_product'] ?>" onclick="window.location.href='<?= base_url('p/'.$pp['slug_product']) ?>';" class="btn btn-outline-info btn-sm detail-product">Lihat Detail</button>
                    <?php endif;?>
                  </div>
                </div>
              </div>
            </div>
          <?php endif; $i++;
          endforeach;?>
        </div>
      </div>

    </div>
  </div>
  <a href="#" role="button" class="carousel-control-prev" id="popular-slider-prev"><i class="fa fa-angle-left fa-lg"></i></a>
  <a href="#" role="button" class="carousel-control-next" id="popular-slider-next"><i class="fa fa-angle-right fa-lg"></i></a>
  </div>
  <!-- /Popular -->


</div>

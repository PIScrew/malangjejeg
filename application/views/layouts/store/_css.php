<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Fira+Sans">
<link rel="stylesheet" href="<?php echo vendor_url('plugins/bootstrap/bootstrap.css') ?>">
<link rel="stylesheet" href="<?php echo vendor_url('plugins/perfect-scrollbar/perfect-scrollbar.min.css')?>">
<link rel="stylesheet" href="<?php echo vendor_url('plugins/font-awesome/font-awesome.min.css')?>">
<?php if ($code_page == "home") :?>
  <link rel="stylesheet" href="<?php echo vendor_url('plugins/swiper/swiper.min.css')?>">
<?php elseif ($code_page =="category" || $code_page =="search"):?>
  <link rel="stylesheet" href="<?php echo vendor_url('plugins/nouislider/nouislider.min.css')?>">
<?php elseif ($code_page =="detail_produk"):?>
  <link rel="stylesheet" href="<?php echo vendor_url('plugins/swiper/swiper.min.css')?>">
  <link rel="stylesheet" href="<?php echo vendor_url('plugins/photoswipe/photoswipe.min.css')?>">
  <link rel="stylesheet" href="<?php echo vendor_url('plugins/photoswipe/photoswipe-default-skin/default-skin.min.css')?>">
<?php elseif ($code_page == "profile"):?>
  <link rel="stylesheet" href="<?php echo vendor_url('plugins/select2/select2.min.css') ?>">
<?php elseif ($code_page == "replayTicket" || $code_page =="addTicket"):?>
  <link rel="stylesheet" href="<?php echo vendor_url('plugins/summernote/summernote-bs4.css') ?>">
<?php endif; ?>
<link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
<link rel="stylesheet" href="<?php echo vendor_url('store/css/style.css')?>">
<link href="<?php echo assets_url('css','custom.store.css'); ?>" rel="stylesheet">
<link href="<?php echo vendor_url('plugins/sweetalert/sweetalert.css') ?>" rel="stylesheet" type="text/css">

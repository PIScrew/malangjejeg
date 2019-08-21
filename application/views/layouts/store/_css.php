<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Fira+Sans">
<link rel="stylesheet" href="<?php echo vendor_url('plugin/bootstrap/bootstrap.css') ?>">
<link rel="stylesheet" href="<?php echo vendor_url('plugin/perfect-scrollbar/perfect-scrollbar.min.css')?>">
<link rel="stylesheet" href="<?php echo vendor_url('plugin/font-awesome/font-awesome.min.css')?>">
<?php if ($code_page == "home") :?>
  <link rel="stylesheet" href="<?php echo vendor_url('plugin/swiper/swiper.min.css')?>">
<?php elseif ($code_page =="category" || $code_page =="search"):?>
  <link rel="stylesheet" href="<?php echo vendor_url('plugin/nouislider/nouislider.min.css')?>">
<?php elseif ($code_page =="detail_produk"):?>
  <link rel="stylesheet" href="<?php echo vendor_url('plugin/swiper/swiper.min.css')?>">
  <link rel="stylesheet" href="<?php echo vendor_url('plugin/photoswipe/photoswipe.min.css')?>">
  <link rel="stylesheet" href="<?php echo vendor_url('plugin/photoswipe/photoswipe-default-skin/default-skin.min.css')?>">
<?php elseif ($code_page == "profile"):?>
  <link rel="stylesheet" href="<?php echo vendor_url('plugin/select2/select2.min.css') ?>">
<?php elseif ($code_page == "replayTicket" || $code_page =="addTicket"):?>
  <link rel="stylesheet" href="<?php echo vendor_url('plugin/summernote/summernote-bs4.css') ?>">
<?php endif; ?>
<link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
<link rel="stylesheet" href="<?php echo vendor_url('front/css/style.css')?>">
<link href="<?php echo assets_url('css','custom.store.css'); ?>" rel="stylesheet">
<link href="<?php echo vendor_url('plugin/sweetalert/sweetalert.css') ?>" rel="stylesheet" type="text/css">

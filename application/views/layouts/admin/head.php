<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- Tell the browser to be responsive to screen width -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="<?php echo @$system['author']?>">
<!-- Favicon icon -->
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo vendor_url('back/images/favicon.png')?>">
<!-- <?php if($this->session->has_userdata('site_title')){ ?>
  <title><?php echo  $_SESSION['site_title'] ?></title>
<?php }else{ ?> -->
  <title><?php echo @$system['site_title']?></title>
<!-- <?php } ?> -->




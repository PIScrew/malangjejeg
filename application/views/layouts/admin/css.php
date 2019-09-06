<?php if(@$codepage == "back_index"):?>
  <link href="<?php echo vendor_url('plugins/c3/c3.min.css');?>" rel="stylesheet">
  <link href="<?php echo vendor_url('plugins/chartist/chartist.min.css'); ?>" rel="stylesheet">
<?php elseif(@$codepage == "back_product"):?>
  <?php if(@$subpage == "list_product" || @$subpage == "list_category" || @$subpage == "list_volunteer" || @$subpage == "list_donator"):?>
    <link rel="stylesheet" href="<?php echo vendor_url('plugins/datatables/dataTables.bootstrap4.css') ?>">
    <link rel="stylesheet" href="<?php echo vendor_url('plugins/datatables/responsive.dataTables.css') ?>">
    <link rel="stylesheet" href="<?php echo vendor_url('plugins/datatables/buttons.dataTables.min.css') ?>">
  <?php elseif(@$subpage == "add_product" || @$subpage == "edit_product"):?>
    <link rel="stylesheet" href="<?php echo vendor_url('plugins/summernote/summernote-bs4.css') ?>">
    <link rel="stylesheet" href="<?php echo vendor_url('plugins/bootstrapswitch/bootstrap-switch.min.css') ?>">
    <link rel="stylesheet" href="<?php echo vendor_url('plugins/dropzone/dropzone.css') ?>">
    <link rel="stylesheet" href="<?php echo vendor_url('plugins/datatables/dataTables.bootstrap4.css') ?>">
    <link rel="stylesheet" href="<?php echo vendor_url('plugins/datatables/responsive.dataTables.css') ?>">
    <link rel="stylesheet" href="<?php echo vendor_url('plugins/dropify/dropify.min.css') ?>">
    <link rel="stylesheet" href="<?php echo vendor_url('plugins/datatables/buttons.dataTables.min.css')?>">
  <?php endif;?>
<?php elseif(@$codepage == "back_hero"):?>
  <link rel="stylesheet" href="<?php echo vendor_url('plugins/dropify/dropify.min.css') ?>">
  <link rel="stylesheet" href="<?php echo vendor_url('plugins/summernote/summernote-bs4.css') ?>">
  <link rel="stylesheet" href="<?php echo vendor_url('plugins/dropzone/dropzone.css') ?>">
  <!-- <link rel="stylesheet" href="<?php echo vendor_url('plugins/dropzone/dropzone.min.css') ?>"> -->
  <link rel="stylesheet" href="<?php echo vendor_url('plugins/bootstrapswitch/bootstrap-switch.min.css') ?>">

  <?php elseif(@$codepage == "back_category"):?>
  <link rel="stylesheet" href="<?php echo vendor_url('plugins/dropify/dropify.min.css') ?>">
  <link rel="stylesheet" href="<?php echo vendor_url('plugins/summernote/summernote-bs4.css') ?>">
<?php endif; ?>

  <link href="<?php echo vendor_url('back/css/style.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo vendor_url('plugins/sweetalert/sweetalert.css') ?>" rel="stylesheet" type="text/css">
  <link href="<?php echo assets_url('css','custom.back.css'); ?>" rel="stylesheet">
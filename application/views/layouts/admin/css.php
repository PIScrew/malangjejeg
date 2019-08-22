<?php if($codepage =="back_street"):?>
  <?php if(@$subpage =="street_map"):?>
    <link rel="stylesheet" href="<?php echo vendor_url('plugins/datatables/dataTables.bootstrap4.css') ?>">
    <link rel="stylesheet" href="<?php echo vendor_url('plugins/datatables/responsive.dataTables.css') ?>">
    <link rel="stylesheet" href="<?php echo vendor_url('plugins/datatables/buttons.dataTables.min.css') ?>">
    <link rel="stylesheet" href="<?php echo vendor_url('plugins/leaflet/leaflet.css') ?>">
    <!-- <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css"
      integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
      crossorigin=""/> -->
  <?php elseif(@$subpage =="street_list"):?>
    <link rel="stylesheet" href="<?php echo vendor_url('plugins/datatables/dataTables.bootstrap4.css') ?>">
    <link rel="stylesheet" href="<?php echo vendor_url('plugins/datatables/responsive.dataTables.css') ?>">
    <link rel="stylesheet" href="<?php echo vendor_url('plugins/datatables/buttons.dataTables.min.css') ?>">
  <?php elseif(@$subpage =="street_add"):?>
    <link rel="stylesheet" href="<?php echo vendor_url('plugins/dropify/dropify.min.css') ?>">
  <?php endif; ?>
<?php elseif (@$codepage=="back_filter" || @$codepage=="back_contractor"||@$codepage=="back_map") :?>
  <link rel="stylesheet" href="<?php echo vendor_url('plugins/datatables/dataTables.bootstrap4.css') ?>">
  <link rel="stylesheet" href="<?php echo vendor_url('plugins/datatables/responsive.dataTables.css') ?>">
  <link rel="stylesheet" href="<?php echo vendor_url('plugins/datatables/buttons.dataTables.min.css') ?>">
<?php elseif(@$codepage==""):?>

<?php endif;?>

<?php if($codepage == "back_index"):?>
  <link href="<?php echo vendor_url('plugins/c3/c3.min.css');?>" rel="stylesheet">
  <link href="<?php echo vendor_url('plugins/chartist/chartist.min.css'); ?>" rel="stylesheet">
<?php elseif(@$codepage == "back_role"||
  @$codepage == "back_campus_list" ):?>
  <link rel="stylesheet" href="<?php echo vendor_url('plugins/datatables/dataTables.bootstrap4.css') ?>">
  <link rel="stylesheet" href="<?php echo vendor_url('plugins/datatables/responsive.dataTables.css') ?>">
  <link rel="stylesheet" href="<?php echo vendor_url('plugins/datatables/buttons.dataTables.min.css') ?>">
<?php elseif(@$codepage == "back_setting"):?>
  <link rel="stylesheet" href="<?php echo vendor_url('plugins/dropify/dropify.min.css') ?>">
  <link rel="stylesheet" href="<?php echo vendor_url('plugins/tagsinput/jquery-tagsinput.min.css') ?>">
<?php elseif(@$codepage=="back_news"||@$codepage=="back_event"):?>
  <link rel="stylesheet" href="<?php echo vendor_url('plugins/dropzone/dropzone.min.css') ?>">
<?php endif;?>

  <link href="<?php echo vendor_url('back/css/style.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo vendor_url('plugins/sweetalert/sweetalert.css') ?>" rel="stylesheet" type="text/css">
  <link href="<?php echo assets_url('css','custom.back.css'); ?>" rel="stylesheet">

  

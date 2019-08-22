<script src="<?php echo vendor_url('plugins/jquery/jquery.min.js'); ?>"></script>
<script src="<?php echo vendor_url('plugins/popper/popper.min.js'); ?>"></script>
<script src="<?php echo vendor_url('plugins/bootstrap/bootstrap.min.js'); ?>"></script>
<script src="<?php echo vendor_url('plugins/sweetalert/sweetalert.min.js')?>"></script>

<?php if ($codepage == "back_login") :?>
 <!-- ============================================================== -->
 <script>
  $('[data-toggle="tooltip"]').tooltip();
  $(".preloader").fadeOut();
    // ==============================================================
    // Login and Recover Password
    // ==============================================================
    $('#to-recover').on("click", function() {
      $("#loginform").slideUp();
      $("#recoverform").fadeIn();
    });
  </script>

<?php elseif(
  @$codepage =="back_street" ||
  @$codepage =="back_filter" ||
  @$codepage =="back_map"    ||
  @$codepage =="back_contractor" ||
  @$codepage =="back_user"   ||
  @$codepage =="back_role"    
):?>
  <script src="<?php echo vendor_url('back/js/app.min.js'); ?>"></script>
  <script src="<?php echo vendor_url('back/js/app.init.js'); ?>"></script>
  <script src="<?php echo vendor_url('back/js/app-style-switcher.js'); ?>"></script>
  <script src="<?php echo vendor_url('plugins/perfect-scrollbar/perfect-scrollbar.jquery.min.js'); ?>"></script>
  <script src="<?php echo vendor_url('plugins/sparkline/sparkline.js'); ?>"></script>
  <script src="<?php echo vendor_url('back/js/waves.js'); ?>"></script>
  <script src="<?php echo vendor_url('back/js/sidebarmenu.js'); ?>"></script>
  <script src="<?php echo vendor_url('back/js/custom.js'); ?>"></script>

  <?php if(@$subpage=="street_map"):?>
    <script src="<?php echo vendor_url('plugins/datatables/datatables.min.js') ?>"></script>
    <script src="<?php echo vendor_url('plugins/datatables/dataTables.responsive.js') ?>"></script>
    <script src="<?php echo vendor_url('plugins/leaflet/leaflet.js') ?>"></script>
    <!-- <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js"
      integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og=="
      crossorigin=""></script> -->
  <?php elseif(@$subpage=="street_list"):?>
    <script src="<?php echo vendor_url('plugins/datatables/datatables.min.js') ?>"></script>
    <script src="<?php echo vendor_url('plugins/datatables/dataTables.responsive.js') ?>"></script>
  <?php elseif(@$subpage=="street_add"):?>
    <script src="<?php echo vendor_url('plugins/dropify/dropify.min.js') ?>"></script>
    <!-- <script src="<?php echo vendor_url('plugins/jqueryrepeater/repeater-init.js') ?>"></script> -->
    <script src="<?php echo vendor_url('plugins/jqueryrepeater/jquery.repeater.min.js') ?>"></script>
  <?php elseif(@$codepage="back_filter" ):?>
    <script src="<?php echo vendor_url('plugins/datatables/datatables.min.js') ?>"></script>
    <script src="<?php echo vendor_url('plugins/datatables/dataTables.responsive.js') ?>"></script>
  
  <?php endif;?>
<script src="<?php echo assets_url('js','custom.back.js'); ?>"></script>

<?php elseif (@$codepage == "back_index" ||
  @$codepage == "back_user" ||
  @$codepage == "back_news" ||
  @$codepage == "back_achievement" ||
  @$codepage == "back_event"||
  @$codepage == "back_pustaka"||
  @$codepage == "back_role" ||
  @$codepage == "back_setting" ||
  @$codepage == "back_campus" ||
  @$codepage == "back_campus_list"):?>
  <script src="<?php echo vendor_url('back/js/app.min.js'); ?>"></script>
  <script src="<?php echo vendor_url('back/js/app.init.js'); ?>"></script>
  <script src="<?php echo vendor_url('back/js/app-style-switcher.js'); ?>"></script>
  <script src="<?php echo vendor_url('plugins/perfect-scrollbar/perfect-scrollbar.jquery.min.js'); ?>"></script>
  <script src="<?php echo vendor_url('plugins/sparkline/sparkline.js'); ?>"></script>
  <script src="<?php echo vendor_url('back/js/waves.js'); ?>"></script>
  <script src="<?php echo vendor_url('back/js/sidebarmenu.js'); ?>"></script>
  <script src="<?php echo vendor_url('back/js/custom.js'); ?>"></script>

  <?php if ($codepage =="back_index"):?>
    <!-- charts -->
    <script src="<?php echo vendor_url('plugins/chartist/chartist.min.js'); ?>"></script>
    <script src="<?php echo vendor_url('plugins/chartist/chartist-plugin-tooltip.min.js');?>"></script>
    <!-- End charts -->
    <!-- Ci3 -->
    <script src="<?php echo vendor_url('plugins/c3/c3.min.js'); ?>"></script>
    <script src="<?php echo vendor_url('plugins/c3/d3.min.js'); ?>"></script>
    <!-- End charts -->
    <script src="<?php echo vendor_url('back/js/dashboard3.js'); ?>"></script>
    <script src="<?php echo vendor_url('plugins/datatables/datatables.min.js') ?>"></script>
    <script src="<?php echo vendor_url('plugins/datatables/dataTables.responsive.js') ?>"></script>

  <?php elseif (@$codepage == "back_role" ||
  @$codepage == "back_campus_list" ):?>
    <script src="<?php echo vendor_url('plugins/datatables/datatables.min.js') ?>"></script>
    <script src="<?php echo vendor_url('plugins/datatables/dataTables.responsive.js') ?>"></script>
  <?php elseif (@$codepage == "back_setting" ):?>
    <script src="<?php echo vendor_url('plugins/dropify/dropify.min.js') ?>"></script>
    <script src="<?php echo vendor_url('plugins/tagsinput/jquery-tagsinput.min.js') ?>"></script>
  <?php elseif(@$codepage=="back_news"): ?>
    <!-- Dropzone js -->
    <script src="<?php echo vendor_url('plugins/dropzone/dropzone.js')?>"></script>
    <?php elseif(@$codepage=="back_event"):?>
    <script src="<?php echo vendor_url('plugins/dropify/dropify.min.js') ?>"></script>
  <?php endif; ?>

<script src="<?php echo assets_url('js','custom.back.js'); ?>"></script>
<?php endif; ?>
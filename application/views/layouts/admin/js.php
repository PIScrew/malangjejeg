<script src="<?php echo vendor_url('plugins/jquery/jquery.min.js'); ?>"></script>
<script src="<?php echo vendor_url('plugins/popper/popper.min.js'); ?>"></script>
<script src="<?php echo vendor_url('plugins/bootstrap/bootstrap.min.js'); ?>"></script>
<script src="<?php echo vendor_url('plugins/sweetalert/sweetalert.min.js')?>"></script>
<script src="<?php echo vendor_url('plugins/dropzone/dropzone.min.js') ?>"></script>

<?php if (@$codepage == "back_login") :?>
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

<?php elseif (@$codepage == "back_index" ||
  @$codepage == "back_product" ||
  @$codepage == "back_donator" ||
  @$codepage == "back_member"||
  @$codepage == "banned_member"||
  @$codepage == "back_transaction"||
  @$codepage == "back_ticket"||
  @$codepage == "back_page" ||
  @$codepage == "back_user" ||
  @$codepage == "profile" ||
  @$codepage == "detail_profile" ||
  @$codepage == "back_addProduct" ||
  @$codepage == "add_hero" ||
  @$codepage == "list_category" ||
  @$codepage == "back_setting"||
  @$codepage == "back_slider" ||
  @$codepage == "back_addPage" || 
  @$codepage == "back_editProduct" ||
  @$codepage == "detail_profile" || 
  @$codepage == "back_transaction_detail" ||
  @$codepage == "back_earning"||
  @$codepage == "back_contact"||
  @$codepage == "back_setHomePage"||
  @$codepage == "back_setOngkir"||
  @$codepage == "back_category" ||
  @$codepage == "back_hero" ||
  @$codepage == "set_address" || 
  @$codepage == "back_category_detail" ||
  @$codepage == "back_slider_detail" ||
  @$codepage == "back_useradmin" ||
  @$codepage == "back_useradmin_detail"  ||
  @$codepage == "back_page"):?>
  <script src="<?php echo vendor_url('back/js/app.min.js'); ?>"></script>
  <script src="<?php echo vendor_url('back/js/app.init.js'); ?>"></script>
  <script src="<?php echo vendor_url('back/js/app-style-switcher.js'); ?>"></script>
  <script src="<?php echo vendor_url('plugins/perfect-scrollbar/perfect-scrollbar.jquery.min.js'); ?>"></script>
  <script src="<?php echo vendor_url('plugins/sparkline/sparkline.js'); ?>"></script>
  <script src="<?php echo vendor_url('back/js/waves.js'); ?>"></script>
  <script src="<?php echo vendor_url('back/js/sidebarmenu.js'); ?>"></script>
  <script src="<?php echo vendor_url('back/js/custom.js'); ?>"></script>


  <?php if (@$codepage =="back_index"):?>
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

  <?php elseif (@$codepage == "back_product"):?>
    <?php if (@$subpage == "list_product" || @$subpage == "list_category" || @$subpage == "list_volunteer" || @$subpage == "list_donator"):?>
      <script src="<?php echo vendor_url('plugins/datatables/datatables.min.js') ?>"></script>
      <script src="<?php echo vendor_url('plugins/datatables/dataTables.responsive.js') ?>"></script>
      <script src="<?php echo vendor_url('plugins/datatables/vfs_fonts.js') ?>"></script>
      <script src="<?php echo vendor_url('plugins/dropzone/dropzone.min.js') ?>"></script>
      <script src="<?php echo vendor_url('plugins/dropify/dropify.min.js') ?>"></script>
    <?php elseif (@$codepage == "add_product" || 
    @$codepage == "edit_product" || @$codepage == "back_product"):?>
      <script src="<?php echo vendor_url('plugins/dropzone/dropzone.min.js') ?>"></script>
      <script src="<?php echo vendor_url('plugins/dropify/dropify.min.js') ?>"></script>
      <script src="<?php echo vendor_url('plugins/summernote/summernote-bs4.js') ?>"></script>
      <script src="<?php echo vendor_url('plugins/bootstrapswitch/bootstrap-switch.min.js') ?>"></script>
      
    <?php endif;?>
  <?php elseif(@$codepage == "back_hero"):?>
    <script src="<?php echo vendor_url('plugins/dropify/dropify.min.js') ?>"></script>
    <script src="<?php echo vendor_url('plugins/sweetalert/sweetalert.min.js')?>"></script>

  <?php endif;?>
  <script src="<?php echo assets_url('js','custom.back.js'); ?>"></script>
<?php endif;?>
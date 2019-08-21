<script src="<?php echo vendor_url('plugins/jquery/jquery.min.js'); ?>"></script>
<script src="<?php echo vendor_url('plugins/popper/popper.min.js'); ?>"></script>
<script src="<?php echo vendor_url('plugins/bootstrap/bootstrap.min.js'); ?>"></script>
<script src="<?php echo vendor_url('plugins/perfect-scrollbar/perfect-scrollbar.min.js'); ?>"></script>
<?php if ($code_page == "home") :?>
  <script src="<?php echo vendor_url('plugins/swiper/swiper.min.js');?>"></script>
<?php elseif ($code_page =="category"):?>
  <script src="<?php echo vendor_url('plugins/nouislider/nouislider.min.js');?>"></script>
  <script src="<?php echo vendor_url('plugins/raty-fa/jquery.raty-fa.min.js');?>"></script>
<?php elseif ($code_page == "detail_produk" || $code_page =="search" || $code_page =="detailinvoice"):?>
  <script src="<?php echo vendor_url('plugins/nouislider/nouislider.min.js');?>"></script>
  <script src="<?php echo vendor_url('plugins/swiper/swiper.min.js');?>"></script>
  <script src="<?php echo vendor_url('plugins/raty-fa/jquery.raty-fa.min.js');?>"></script>
  <script src="<?php echo vendor_url('plugins/photoswipe/photoswipe.min.js');?>"></script>
  <script src="<?php echo vendor_url('plugins/photoswipe/photoswipe-ui-default.min.js');?>"></script>
<?php elseif ($code_page == "profile"):?>
  <script src="<?php echo vendor_url('plugins/select2/select2.full.min.js') ?>"></script>
<?php elseif ($code_page == "replayTicket" || $code_page =="addTicket"):?>
  <script src="<?php echo vendor_url('plugin/summernote/summernote-bs4.js') ?>"></script>
<?php elseif ($code_page == "scanqr"):?>
  <script src="<?php echo assets_url('js/scanqr','qrcodelib.js'); ?>"></script>
  <script src="<?php echo assets_url('js/scanqr','webcodecamjs.js'); ?>"></script>
  <script src="<?php echo assets_url('js/scanqr','scanqr.js'); ?>"></script>
<?php endif; ?>
<script src="<?php echo vendor_url('plugins/sweetalert/sweetalert.min.js')?>"></script>
<script src="<?php echo vendor_url('store/js/script.js');?>"></script>
<script src="<?php echo assets_url('js','custom.store.js');?>"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.4.0/clipboard.min.js"></script>
<?php if (isset($_SESSION['status'])) { ?>
<script type="text/javascript">
  $(document).ready(function(){
    setInterval(get_notification, 5000);
  })
  function get_notification() {
    $.ajax({
      type:'POST',
      url: "<?php echo base_url('home/get_notification') ;?>",
      'dataType':'json',
      success: function(data){
        console.log(data);
        var html='';
        var counter=(data.length==0)? '' :data.length;
        var symbol='';var title='';var btn_type='';
        for (var i = 0; i < data.length; i++) {
          if(data[i].id_invoice!=0){
            symbol="fa fa-shopping-cart";
            link="<?= base_url('invoice/') ?>"+data[i].code_order;
          } else if(data[i].id_comment!=0){
            symbol="fa fa-comments";
            link= "<?= base_url('p/') ?>"+data[i].slug;
          } else if(data[i].id_ticket!=0){
            symbol="fa fa-envelope";
            link="<?= base_url('ticket/') ?>"+data[i].no_ticket;
          }
          html+='<a class="dropdown-item has-icon read_notification" data-id="'+data[i].id_notification+'" data-url="<?= base_url('home/read_notification') ?>" data-href="'+link+'" href="#"><i class="'+symbol+'"></i>'+data[i].desc+
        '<span class="text-info">*</span>'+
        '</a>';
        }
        $('.counter_notif').text(counter);
        $('.notifications').html(html);
      }
    });
  }
</script>
<?php } ?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-129885026-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-129885026-1');
</script>
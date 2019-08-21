<!doctype html>
<html lang="en">
  
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <?php echo @$_head ?>
    <?php echo @$_css ?>
</head>
  <body>
  <?php echo @$_header ?>
    <div class="container-fluid" id="main-container">
      <div class="row">
        <?php echo @$_sidebar?>
        <div class="col" id="main-content">
          <?php echo @$_body; ?>
          <?php echo @$_footer?>
        </div>
      </div>
    </div>
    <?php echo @$_cart; ?>
    <?php echo @$_js; ?>
  </body>
</html>

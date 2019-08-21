<div class="row justify-content-center codepage" data-codepage="<?php echo $code_page ?>">
  <div class="col-xl-6 col-md-8 col-12"> 
    <?php if(!empty($_SESSION['success_reg'])):?>
        <div class="alert alert-success" role="alert">
          <?php echo $_SESSION['success_reg']?>
        </div>
      <?php elseif(!empty($_SESSION['fail_reg'])):?>
      <div class="alert alert-danger" role="alert">
        <?php echo $_SESSION['fail_reg']?>
      </div>
      <?php endif;?>
      <form method="POST" action="<?php echo base_url('login/action_login'); ?>">
        <div class="form-group">
          <input type="text" class="form-control" name="username" placeholder="Username">
        </div>
        <?php if(!empty($_SESSION['fail_msg'])):?>
          <div class="alert alert-danger" role="alert">
            <?php echo $_SESSION['fail_msg']?>
          </div>
        <?php endif;?>
        <button type="submit" class="btn btn-success btn-block">LOGIN</button>
      </form>
  </div>
</div>
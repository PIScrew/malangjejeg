<header class="navbar navbar-expand navbar-light fixed-top">

	<!-- Toggle Menu -->
	<span class="toggle-menu"><i class="fa fa-bars fa-lg"></i></span>

	<!-- Logo -->
	<a class="navbar-brand" href="<?php echo base_url()?>"><img src="<?php echo img_url($system['logo']);?>" class="logo" alt="<?php echo $system['title_site']?>"></a>

	<!-- Search Form -->
	<form class="form-inline form-search d-none d-sm-inline" action="<?php echo base_url('Home/Search'); ?>" method="get">
		<div class="input-group">
			<button class="btn btn-light btn-search-back" type="button"><i class="fa fa-arrow-left"></i></button>
			<input type="text" class="form-control"  id="searchKeyword" type="search" name="search" placeholder="Search ..." aria-label="Search ...">
			<input type="hidden" id="isHeader" name="isHeader" value="1">
			<button class="btn btn-light"type="submit"><i class="fa fa-search"></i></button>
		</div>
	</form>
	<!-- /Search Form -->

	<!-- navbar-nav -->
	<ul class="navbar-nav ml-auto">
		<!-- Search Toggle -->
		<li class="nav-item d-sm-none">
			<a href="#" class="nav-link" id="search-toggle"><i class="fa fa-search fa-lg"></i></a>
		</li>
		<!-- /Search Toggle -->
		<!-- Shopping Cart Toggle -->
		<li class="nav-item dropdown ml-1 ml-sm-3">
			<a href="<?= base_url('home/scanqr'); ?>" class="nav-link">				
				<i class="fa fa-qrcode fa-lg"></i>
			</a>
		</li>
		<!-- /Shopping Cart Toggle -->
		<!-- Shopping Cart Toggle -->
		<?php if(@$_SESSION['status']!="pmadmin"): ?>
		<li class="nav-item dropdown ml-1 ml-sm-3">
			<a href="#" class="nav-link" data-toggle="modal" data-target="#cartModal">
				<i class="fa fa-shopping-cart fa-lg"></i>
				<span class="badge badge-pink badge-count"><?= sizeof($cart) ?></span>
			</a>
		</li>
		<?php endif; ?>
		<!-- /Shopping Cart Toggle -->

		<?php  if($this->session->userdata('status') == "pmmember" && $_SESSION['role'] == 3 ):?>
		<!-- Notification Dropdown -->
		<?php 
				$new_notif=0;
				 foreach ($notif_header as $nh) {
					if ($nh['status']==0) {
						$new_notif++;
					}
				}
				$counter=($new_notif==0)?'':$new_notif; 
			?>
		<li class="nav-item dropdown ml-1 ml-sm-3">
			<a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownNotif" data-toggle="dropdown" aria-haspopup="true"
			 aria-expanded="false">
				<i class="fa fa-bell fa-lg"></i>
				<span class="badge badge-info badge-count counter_notif"><?= $counter ?></span>
			</a>
			<div class="dropdown-menu dropdown-menu-right notifications" aria-labelledby="dropdownNotif">
			<?php 
				foreach ($notif_header as $nh) : 
					if ($nh['id_invoice']!=0) {
						$symbol="fa fa-shopping-cart";
            			$link=base_url('invoice/').$nh['code_order'];
					} else if($nh['id_comment']!=0){
						$symbol="fa fa-comments";
						$link= base_url('p/').$nh['slug'];
					} else if($nh['id_ticket']!=0){
						$symbol="fa fa-envelope";
            			$link=base_url('ticket/').$nh['no_ticket'];
					}
			?>
				<a class="dropdown-item has-icon read_notification" data-id="<?= $nh['id_notification'] ?>" data-url="<?= base_url('home/read_notification') ?>" data-href="<?= $link ?>" href="#"><i class="<?= $symbol; ?>"></i><?= $nh['desc']; ?>
				<span class="text-info">*</span>
				</a>
			<?php endforeach; ?>
			</div>
		</li>
		<?php endif;?>

	</ul>

	<?php  if($this->session->userdata('status') == "pmmember" && $_SESSION['role'] == 3 ):?>
	<div class="dropdown dropdown-user">
		<a class="dropdown-toggle" href="#" role="button" id="userDropdown" data-toggle="dropdown" aria-haspopup="true"
		 aria-expanded="false">
			<img src="<?php echo img_url(@$_SESSION['img_path']) ?>" alt="User">
		</a>
		<div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
			<a class="dropdown-item has-icon" href="<?php echo base_url('U/'.$_SESSION['username'])?>"><i class="fa fa-user fa-fw"></i> Profile</a>
			<a class="dropdown-item has-icon" href="<?php echo base_url('Profile/updatePass')?>"><i class="fa fa-cog fa-fw"></i> Ganti Password</a>
			<a class="dropdown-item has-icon" id="activate-affiliate" data-affiliate="<?php echo @$_SESSION['affiliate']?>" data-url="<?php echo base_url('Profile/activate_affiliate')?>" data-goto="<?php echo base_url('Profile/goto_affiliate')?>" href="#"><i class="fa fa-share-alt-square fa-fw"></i> Affiliate</a>
			<div class="dropdown-divider"></div>
			<a class="dropdown-item has-icon" href="<?php echo base_url('User/logout')?>"><i class="fa fa-sign-out fa-fw"></i> Sign out</a>
		</div>
	</div>
	<?php endif;?>
	<!-- /User Dropdown -->

</header>
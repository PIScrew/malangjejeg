<!-- Topbar header - style you can find in pages.scss -->
<!-- ============================================================== -->
<header class="topbar">
	<nav class="navbar top-navbar navbar-expand-md navbar-dark">
		<div class="navbar-header">
			<!-- This is for the sidebar toggle which is visible on mobile only -->
			<a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
				<i class="ti-menu ti-close"></i>
			</a>
			<!-- ============================================================== -->
			<!-- Logo -->
			<!-- ============================================================== -->
			<div class="navbar-brand">
				<a href="index.html" class="logo">
					<!-- Logo icon -->
					<b class="logo-icon">
						<!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
						<!-- Dark Logo icon -->
						<img src="<?php echo vendor_url('back/images/logo-icon.png'); ?>" alt="homepage" class="dark-logo" />
						<!-- Light Logo icon -->
						<img src="<?php echo vendor_url('back/images/logo-light-icon.png'); ?>" alt="homepage" class="light-logo" />
					</b>
					<!--End Logo icon -->
					<!-- Logo text -->
					<span class="logo-text">
						<!-- dark Logo text -->
						<img src="<?php echo vendor_url('back/images/logo-text.png'); ?>" alt="homepage" class="dark-logo" />
						<!-- Light Logo text -->
						<img src="<?php echo vendor_url('back/images/logo-light-text.png'); ?>" class="light-logo" alt="homepage" />
					</span>
				</a>
				<a class="sidebartoggler d-none d-md-block" href="javascript:void(0)" data-sidebartype="mini-sidebar">
					<i class="mdi mdi-toggle-switch mdi-toggle-switch-off font-20"></i>
				</a>
			</div>
			<!-- ============================================================== -->
			<!-- End Logo -->
			<!-- ============================================================== -->
			<!-- ============================================================== -->
			<!-- Toggle which is visible on mobile only -->
			<!-- ============================================================== -->
			<a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
				data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
				aria-expanded="false" aria-label="Toggle navigation">
				<i class="ti-more"></i>
			</a>
		</div>
		<!-- ============================================================== -->
		<!-- End Logo -->
		<!-- ============================================================== -->
		<div class="navbar-collapse collapse" id="navbarSupportedContent">
			<!-- ============================================================== -->
			<!-- toggle and nav items -->
			<!-- ============================================================== -->
			<ul class="navbar-nav float-left mr-auto">
				<!-- <li class="nav-item d-none d-md-block">
                            <a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar">
                                <i class="mdi mdi-menu font-24"></i>
                            </a>
                        </li> -->
				<!-- ============================================================== -->
				<!-- Search -->
				<!-- ============================================================== -->
				<li class="nav-item search-box">
					<a class="nav-link waves-effect waves-dark" href="javascript:void(0)">
						<div class="d-flex align-items-center">
							<i class="mdi mdi-magnify font-20 mr-1"></i>
							<div class="ml-1 d-none d-sm-block">
								<span>Search</span>
							</div>
						</div>
					</a>
					<form class="app-search position-absolute">
						<input type="text" class="form-control" placeholder="Search &amp; enter">
						<a class="srh-btn">
							<i class="ti-close"></i>
						</a>
					</form>
				</li>
			</ul>
			<!-- ============================================================== -->
			<!-- Right side toggle and nav items -->
			<!-- ============================================================== -->
			<ul class="navbar-nav float-right">
				<!-- ============================================================== -->
				<!-- Messages -->
				<!-- ============================================================== -->
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" id="2" data-toggle="dropdown"
						aria-haspopup="true" aria-expanded="false">
						<i class="font-22 mdi mdi-email-outline"></i>

					</a>
					<div class="dropdown-menu dropdown-menu-right mailbox animated bounceInDown" aria-labelledby="2">
						<span class="with-arrow">
							<span class="bg-danger"></span>
						</span>
						<ul class="list-style-none">
							<li>
								<div class="drop-title text-white bg-danger">
									<h4 class="mb-0 m-t-5">5 New</h4>
									<span class="font-light">Messages</span>
								</div>
							</li>
							<li>
								<div class="message-center message-body">
									<!-- Message -->
									<a href="javascript:void(0)" class="message-item">
										<span class="user-img">
											<img src="<?php echo vendor_url('back/images/users/1.jpg'); ?>" alt="user" class="rounded-circle">
											<span class="profile-status online pull-right"></span>
										</span>
										<div class="mail-contnet">
											<h5 class="message-title">Pavan kumar</h5>
											<span class="mail-desc">Just see the my admin!</span>
											<span class="time">9:30 AM</span>
										</div>
									</a>
									<!-- Message -->
									<a href="javascript:void(0)" class="message-item">
										<span class="user-img">
											<img src="<?php echo vendor_url('back/images/users/2.jpg'); ?>" alt="user" class="rounded-circle">
											<span class="profile-status busy pull-right"></span>
										</span>
										<div class="mail-contnet">
											<h5 class="message-title">Sonu Nigam</h5>
											<span class="mail-desc">I've sung a song! See you at</span>
											<span class="time">9:10 AM</span>
										</div>
									</a>
									<!-- Message -->
									<a href="javascript:void(0)" class="message-item">
										<span class="user-img">
											<img src="<?php echo vendor_url('back/images/users/3.jpg'); ?>" alt="user" class="rounded-circle">
											<span class="profile-status away pull-right"></span>
										</span>
										<div class="mail-contnet">
											<h5 class="message-title">Arijit Sinh</h5>
											<span class="mail-desc">I am a singer!</span>
											<span class="time">9:08 AM</span>
										</div>
									</a>
									<!-- Message -->
									<a href="javascript:void(0)" class="message-item">
										<span class="user-img">
											<img src="<?php echo vendor_url('back/images/users/4.jpg'); ?>" alt="user" class="rounded-circle">
											<span class="profile-status offline pull-right"></span>
										</span>
										<div class="mail-contnet">
											<h5 class="message-title">Pavan kumar</h5>
											<span class="mail-desc">Just see the my admin!</span>
											<span class="time">9:02 AM</span>
										</div>
									</a>
								</div>
							</li>
							<li>
								<a class="nav-link text-center link" href="javascript:void(0);">
									<b>See all e-Mails</b>
									<i class="fa fa-angle-right"></i>
								</a>
							</li>
						</ul>
					</div>
				</li>
				<!-- ============================================================== -->
				<!-- End Messages -->
				<!-- ============================================================== -->
				<!-- ============================================================== -->
				<!-- Comment -->
				<!-- ============================================================== -->
				<li class="nav-item dropdown border-right" id="notif-b">
					<a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" data-toggle="dropdown"
						aria-haspopup="true" aria-expanded="false">
						<i class="mdi mdi-bell-outline font-22"></i>
						<span class="badge badge-pill badge-info noti"><?php echo $jumlah; ?></span>
					</a>
					<div class="dropdown-menu dropdown-menu-right mailbox animated bounceInDown">
						<span class="with-arrow">
							<span class="bg-primary"></span>
						</span>
						<ul class="list-style-none">   
							<li>
								<div class="drop-title bg-primary text-white">
									<h4 class="mb-0 m-t-5"><?php echo $jumlah; ?> New</h4>
									<span class="font-light">Notifications</span>
								</div>
							</li>
							<li>
								<div class="message-center notifications">
									<!-- Message -->
									<?php foreach($notif as $n):?>
									<a href="<?php echo base_url('admin/notification/linkNotif/'.$n['id']) ?>" class="message-item">
										<span class="btn btn-danger btn-circle">
											<i class="fa fa-link"></i>
										</span>
										<div class="mail-contnet">
								  <?php 
								  if($n['id_comment'] != 0 && $n['id_comment'] != null){ 
									echo "Comment";
								  }
								  else if($n['id_ticket'] != 0 && $n['id_ticket'] != null){
									echo "Ticket";
								  }
								  else if($n['id_transaction'] != 0 && $n['id_transaction'] != null){
									echo "Transaksi";
								  }
								  else if($n['id_review'] != 0 && $n['id_review'] != null){
									echo "Review";
								  }
								  ?>
								  </h5>
											
											<span class="mail-desc"><?php echo $n['desc'];?></span>
											<span class="time"><?php echo $n['created_at'];?></span>
										</div>
									</a>
									<?php endforeach ?> 
								
									
									
									
								</div>
							</li>
							<li>
								<a class="nav-link text-center m-b-5" href="<?php echo base_url('admin/notification')?>">
									<strong>Check all notifications</strong>
									<i class="fa fa-angle-right"></i>
								</a>
							</li>
						</ul>
					</div>
				</li>
				<!-- ============================================================== -->
				<!-- End Comment -->
				<!-- ============================================================== -->
				<!-- ============================================================== -->
				<!-- User profile and search -->
				<!-- ============================================================== -->	
				
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle waves-effect waves-dark pro-pic" href="#" data-toggle="dropdown"
						aria-haspopup="true" aria-expanded="false">
						<img src="<?= img_url(getUser($_SESSION['id'])['img_path'])?>" alt="user" class="rounded-circle" width="40">
						<span class="m-l-5 font-medium d-none d-sm-inline-block"><?php echo ucwords($_SESSION['fullname']);?><i
								class="mdi mdi-chevron-down"></i></span>
					</a>
					<div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
						<span class="with-arrow">
							<span class="bg-primary"></span>
						</span>
						<div class="d-flex no-block align-items-center p-15 bg-primary text-white m-b-10">
							<div class="">
								<img src="<?= img_url(getUser($_SESSION['id'])['img_path'])?>" alt="user" class="rounded-circle" width="60">
							</div>
							
							<div class="m-l-10">
								<h4 class="mb-0"><?php echo ucwords($_SESSION['fullname']);?></h4>
								<p class=" mb-0"><?php echo ucwords($_SESSION['email']); ?></p>
							</div>
						</div>
						
						<a class="dropdown-item" href="javascript:void(0)">
							<i class="ti-user m-r-5 m-l-5"></i> My Profile</a>
						<a class="dropdown-item" href="javascript:void(0)">
							<i class="ti-wallet m-r-5 m-l-5"></i> My Balance</a>
						<a class="dropdown-item" href="javascript:void(0)">
							<i class="ti-email m-r-5 m-l-5"></i> Inbox</a>	
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="<?php echo base_url('admin/User/editPasswordAct/'.$_SESSION['id'])?>">
							<i class="ti-settings m-r-5 m-l-5"></i> Account Setting</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="<?php echo base_url('admin/User/logout')?>">
							<i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
						<div class="dropdown-divider"></div>
						<div class="p-l-30 p-10">
							<a href="javascript:void(0)" class="btn btn-sm btn-success btn-rounded">View Profile</a>
						</div>
					</div>
				</li>
				<!-- ============================================================== -->
				<!-- User profile and search -->
				<!-- ============================================================== -->
			</ul>
		</div>
	</nav>
</header>
<!-- ============================================================== -->
<!-- End Topbar header -->
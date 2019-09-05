<aside class="left-sidebar">
	<!-- Sidebar scroll-->
	<div class="scroll-sidebar">
		<!-- Sidebar navigation-->
		<nav class="sidebar-nav">
			<ul id="sidebarnav">
				<!-- dashboard -->
				<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url('admin/dashboard')?>"
					aria-expanded="false"><i class="mdi mdi-apps"></i><span class="hide-menu">Dashboard</span></a></li>
				<!-- end dashboard -->
				
				<li class="nav-small-cap">
					<i class="mdi mdi-dots-horizontal"></i>
					<span class="hide-menu">E-Commerce</span>
				</li>

			<!-- Street -->
				<li class="sidebar-item">
					<a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
						<i class="mdi mdi-comment-multiple-outline"></i>
						<span class="hide-menu">Manage Product</span>
					</a>
					<ul aria-expanded="false" class="collapse  first-level">
						<li class="sidebar-item">
							<a href="<?php echo base_url('admin/Product/index')?>" class="sidebar-link">
								<i class="mdi mdi-adjust"></i>
								<span class="hide-menu"> List Product</span>
							</a>
						</li>
						<li class="sidebar-item">
							<a href="<?php echo base_url('admin/Product/addProduct')?>" class="sidebar-link">
								<i class="mdi mdi-adjust"></i>
								<span class="hide-menu"> Add Product</span>
							</a>
						</li>
					</ul>
				</li>
			<!-- End Street -->

			<!-- Filter -->
				<li class="sidebar-item">
					<a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
						<i class="mdi mdi-comment-multiple-outline"></i>
						<span class="hide-menu">Manage Kategori</span>
					</a>
					<ul aria-expanded="false" class="collapse  first-level">
						<li class="sidebar-item">
							<a href="<?php echo base_url('admin/Category/index')?>" class="sidebar-link">
								<i class="mdi mdi-adjust"></i>
								<span class="hide-menu">List Kategori</span>
							</a>
						</li>

						<li class="sidebar-item">
							<a href="<?php echo base_url('admin/Category/create')?>" class="sidebar-link">
								<i class="mdi mdi-adjust"></i>
								<span class="hide-menu">Tambah Kategori</span>
							</a>
						</li>

					</ul>
				</li>
			<!-- End Filter -->

			<!-- Map Setting -->
				<li class="sidebar-item">
					<a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
						<i class="mdi mdi-comment-multiple-outline"></i>
						<span class="hide-menu">Manage Resource</span>
					</a>
					<ul aria-expanded="false" class="collapse  first-level">
						<li class="sidebar-item">
							<a href="<?php echo base_url('admin/Volunteer/index')?>" class="sidebar-link">
								<i class="mdi mdi-adjust"></i>
								<span class="hide-menu">List Volunteer</span>
							</a>
						</li>

						</li>
						<li class="sidebar-item">
							<a href="<?php echo base_url('admin/Donator/index')?>" class="sidebar-link">
								<i class="mdi mdi-adjust"></i>
								<span class="hide-menu"> List Donatur</span>
							</a>
						</li>
					</ul>
				</li>
			<!-- End Map Setting -->

			<!-- Order Menu -->
			<li class="sidebar-item">
					<a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
						<i class="mdi mdi-comment-multiple-outline"></i>
						<span class="hide-menu">Manage Order</span>
					</a>
					<ul aria-expanded="false" class="collapse  first-level">
						<li class="sidebar-item">
							<a href="<?php echo base_url('admin/Order/index')?>" class="sidebar-link">
								<i class="mdi mdi-adjust"></i>
								<span class="hide-menu">List Pemesanan</span>
							</a>
						</li>

						</li>
					</ul>
				</li>
			<!-- End Order -->
			
			<!-- Setting -->
			<li class="nav-small-cap">
					<i class="mdi mdi-dots-horizontal"></i>
					<span class="hide-menu">System</span>
				</li>

				<li class="sidebar-item">
					<a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
						<i class="mdi mdi-comment-multiple-outline"></i>
						<span class="hide-menu">Kontraktor</span>
					</a>
					<ul aria-expanded="false" class="collapse  first-level">
						<li class="sidebar-item">
							<a href="<?php echo base_url('admin/Contractor/list')?>" class="sidebar-link">
								<i class="mdi mdi-adjust"></i>
								<span class="hide-menu"> Kontraktor List</span>
							</a>
						</li>
						<li class="sidebar-item">
							<a href="<?php echo base_url('admin/User/roleList')?>" class="sidebar-link">
								<i class="mdi mdi-adjust"></i>
								<span class="hide-menu"> </span>
							</a>
						</li>
					</ul>
				</li>

				
				<li class="sidebar-item">
					<a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
						<i class="mdi mdi-comment-multiple-outline"></i>
						<span class="hide-menu">User</span>
					</a>
					<ul aria-expanded="false" class="collapse  first-level">
						<li class="sidebar-item">
							<a href="<?php echo base_url('admin/User/UserList')?>" class="sidebar-link">
								<i class="mdi mdi-adjust"></i>
								<span class="hide-menu"> User List</span>
							</a>
						</li>
						<li class="sidebar-item">
							<a href="<?php echo base_url('admin/User/RoleList')?>" class="sidebar-link">
								<i class="mdi mdi-adjust"></i>
								<span class="hide-menu"> User Role</span>
							</a>
						</li>
					</ul>
				</li>
				<li class="sidebar-item">
					<a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
						<i class="mdi mdi-settings"></i>
						<span class="hide-menu">Pengaturan</span>
					</a>
					<ul aria-expanded="false" class="collapse  first-level">
						<li class="sidebar-item">
							<a href="<?php echo base_url('admin/Setting/general')?>" class="sidebar-link">
								<i class="mdi mdi-adjust"></i>
								<span class="hide-menu"> Pengaturan General</span>
							</a>
						</li>
						<li class="sidebar-item">
							<a href="<?php echo base_url('admin/Setting/imgdefault')?>" class="sidebar-link">
								<i class="mdi mdi-adjust"></i>
								<span class="hide-menu"> Pengaturan Image Default</span>
							</a>
						</li>
						<li class="sidebar-item">
							<a href="<?php echo base_url('admin/Setting/address')?>" class="sidebar-link">
								<i class="mdi mdi-adjust"></i>
								<span class="hide-menu"> Pengatur Alamat</span>
							</a>
						</li>
						<li class="sidebar-item">
							<a href="<?php echo base_url('admin/Setting/pageSetting')?>" class="sidebar-link">
								<i class="mdi mdi-adjust"></i>
								<span class="hide-menu"> Pengaturan Halaman</span>
							</a>
						</li>
					</ul>
				</li>
			<!-- End Setting -->



				<li class="nav-small-cap">
					<i class="mdi mdi-dots-horizontal"></i>
					<span class="hide-menu">CMS</span>
				</li>
				<!-- News -->
				<li class="sidebar-item">
					<a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
						<i class="mdi mdi-comment-multiple-outline"></i>
						<span class="hide-menu">Berita Dan informasi</span>
					</a>
					<ul aria-expanded="false" class="collapse  first-level">
						<li class="sidebar-item">
							<a href="<?php echo base_url('admin/News/add')?>" class="sidebar-link">
								<i class="mdi mdi-adjust"></i>
								<span class="hide-menu"> Add News</span>
							</a>
						</li>
						<li class="sidebar-item">
							<a href="<?php echo base_url('admin/News/list')?>" class="sidebar-link">
								<i class="mdi mdi-adjust"></i>
								<span class="hide-menu"> List News</span>
							</a>
						</li>
						<li class="sidebar-item">
							<a href="<?php echo base_url('admin/News/draft')?>" class="sidebar-link">
								<i class="mdi mdi-adjust"></i>
								<span class="hide-menu"> Draft News</span>
							</a>
						</li>
					</ul>
				</li>
				<!-- news -->
				
				<!-- Prestasi -->
				<li class="sidebar-item">
					<a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
						<i class="mdi mdi-comment-multiple-outline"></i>
						<span class="hide-menu">Prestasi</span>
					</a>
					<ul aria-expanded="false" class="collapse  first-level">
						<li class="sidebar-item">
							<a href="<?php echo base_url('admin/Achievement/add')?>" class="sidebar-link">
								<i class="mdi mdi-adjust"></i>
								<span class="hide-menu"> Add Prestasi</span>
							</a>
						</li>
						<li class="sidebar-item">
							<a href="<?php echo base_url('admin/Achievement/list')?>" class="sidebar-link">
								<i class="mdi mdi-adjust"></i>
								<span class="hide-menu"> List Prestasi</span>
							</a>
						</li>
						<li class="sidebar-item">
							<a href="<?php echo base_url('admin/Achievement/draft')?>" class="sidebar-link">
								<i class="mdi mdi-adjust"></i>
								<span class="hide-menu"> Draft Prestasi</span>
							</a>
						</li>
					</ul>
				</li>
				<!-- Prestasi -->
				<!-- Event -->
				<li class="sidebar-item">
					<a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
						<i class="mdi mdi-comment-multiple-outline"></i>
						<span class="hide-menu">Event</span>
					</a>
					<ul aria-expanded="false" class="collapse  first-level">
						<li class="sidebar-item">
							<a href="<?php echo base_url('admin/Event/add')?>" class="sidebar-link">
								<i class="mdi mdi-adjust"></i>
								<span class="hide-menu"> Add event</span>
							</a>
						</li>
						
						<li class="sidebar-item">
							<a href="<?php echo base_url('admin/Event/list')?>" class="sidebar-link">
								<i class="mdi mdi-adjust"></i>
								<span class="hide-menu"> List event</span>
							</a>
						</li>

						<li class="sidebar-item">
							<a href="<?php echo base_url('admin/Event/draft')?>" class="sidebar-link">
								<i class="mdi mdi-adjust"></i>
								<span class="hide-menu"> Draft event</span>
							</a>
						</li>

						<li class="sidebar-item">
							<a href="<?php echo base_url('admin/Event/archive')?>" class="sidebar-link">
								<i class="mdi mdi-adjust"></i>
								<span class="hide-menu"> Archive event</span>
							</a>
						</li>
					</ul>
				</li>
				<!-- event -->

				<!-- Pustaka -->
				<li class="sidebar-item">
					<a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
						<i class="mdi mdi-comment-multiple-outline"></i>
						<span class="hide-menu">Pustaka</span>
					</a>
					<ul aria-expanded="false" class="collapse  first-level">
						<li class="sidebar-item">
							<a href="<?php echo base_url('admin/Pustaka/add')?>" class="sidebar-link">
								<i class="mdi mdi-adjust"></i>
								<span class="hide-menu"> Add Pustaka</span>
							</a>
						</li>
						
						<li class="sidebar-item">
							<a href="<?php echo base_url('admin/Pustaka/list')?>" class="sidebar-link">
								<i class="mdi mdi-adjust"></i>
								<span class="hide-menu"> List Pustaka</span>
							</a>
						</li>

						<li class="sidebar-item">
							<a href="<?php echo base_url('admin/Pustaka/draft')?>" class="sidebar-link">
								<i class="mdi mdi-adjust"></i>
								<span class="hide-menu"> Draft Pustaka</span>
							</a>
						</li>
					</ul>
				</li>

				<!-- Pustaka -->
				<li class="nav-small-cap">
					<i class="mdi mdi-dots-horizontal"></i>
					<span class="hide-menu">CMS Campus</span>
				</li>
				<!-- Department -->
				<li class="sidebar-item">
					<a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
						<i class="mdi mdi-comment-multiple-outline"></i>
						<span class="hide-menu">Jurusan & Program Studi</span>
					</a>
					<ul aria-expanded="false" class="collapse  first-level">
						<li class="sidebar-item">
							<a href="<?php echo base_url('admin/News/add')?>" class="sidebar-link">
								<i class="mdi mdi-adjust"></i>
								<span class="hide-menu"> Jurusan</span>
							</a>
						</li>
						<li class="sidebar-item">
							<a href="<?php echo base_url('admin/News/draft')?>" class="sidebar-link">
								<i class="mdi mdi-adjust"></i>
								<span class="hide-menu"> Program Studi</span>
							</a>
						</li>
					</ul>
				</li>
				<!-- End Department -->
				<!-- Hero -->
				<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url('admin/header')?>"
					 aria-expanded="false"><i class="mdi mdi-apps"></i><span class="hide-menu">Laboratorium</span></a></li>
				<!-- Hero -->	
				<!-- Sorotan -->
				<li class="sidebar-item">
					<a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
						<i class="mdi mdi-comment-multiple-outline"></i>
						<span class="hide-menu">Sorotan</span>
					</a>
					<ul aria-expanded="false" class="collapse  first-level">
						<li class="sidebar-item">
							<a href="<?php echo base_url('admin/page/help')?>" class="sidebar-link">
								<i class="mdi mdi-adjust"></i>
								<span class="hide-menu"> Semua Sorotan</span>
							</a>
						</li>
						<li class="sidebar-item">
							<a href="<?php echo base_url('admin/page/faq')?>" class="sidebar-link">
								<i class="mdi mdi-adjust"></i>
								<span class="hide-menu"> Sorotan non aktif</span>
							</a>
						</li>
					</ul>
				</li>
				<!-- Sorotan -->
				<!-- Hero -->
				<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url('admin/header')?>"
					 aria-expanded="false"><i class="mdi mdi-apps"></i><span class="hide-menu">Gambar Header</span></a></li>
				<!-- Hero -->
				<!-- Hero -->
				<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url('admin/Campus/profile')?>"
					 aria-expanded="false"><i class="mdi mdi-apps"></i><span class="hide-menu">Profil Kampus</span></a></li>
				<!-- Hero -->		
				<li class="nav-small-cap">
					<i class="mdi mdi-dots-horizontal"></i>
					<span class="hide-menu">System</span>
				</li>

				
				<li class="sidebar-item">
					<a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
						<i class="mdi mdi-comment-multiple-outline"></i>
						<span class="hide-menu">User Admin</span>
					</a>
					<ul aria-expanded="false" class="collapse  first-level">
						<li class="sidebar-item">
							<a href="<?php echo base_url('admin/User/UseradminList')?>" class="sidebar-link">
								<i class="mdi mdi-adjust"></i>
								<span class="hide-menu"> User Admin</span>
							</a>
						</li>
						<li class="sidebar-item">
							<a href="<?php echo base_url('admin/User/roleList')?>" class="sidebar-link">
								<i class="mdi mdi-adjust"></i>
								<span class="hide-menu"> Admin Role</span>
							</a>
						</li>
					</ul>
				</li>
				<li class="sidebar-item">
					<a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
						<i class="mdi mdi-settings"></i>
						<span class="hide-menu">Pengaturan</span>
					</a>
					<ul aria-expanded="false" class="collapse  first-level">
						<li class="sidebar-item">
							<a href="<?php echo base_url('admin/Setting/general')?>" class="sidebar-link">
								<i class="mdi mdi-adjust"></i>
								<span class="hide-menu"> Pengaturan General</span>
							</a>
						</li>
						<li class="sidebar-item">
							<a href="<?php echo base_url('admin/Setting/imgdefault')?>" class="sidebar-link">
								<i class="mdi mdi-adjust"></i>
								<span class="hide-menu"> Pengaturan Image Default</span>
							</a>
						</li>
						<li class="sidebar-item">
							<a href="<?php echo base_url('admin/Setting/address')?>" class="sidebar-link">
								<i class="mdi mdi-adjust"></i>
								<span class="hide-menu"> Pengatur Alamat</span>
							</a>
						</li>
						<li class="sidebar-item">
							<a href="<?php echo base_url('admin/Setting/pageSetting')?>" class="sidebar-link">
								<i class="mdi mdi-adjust"></i>
								<span class="hide-menu"> Pengaturan Halaman</span>
							</a>
						</li>
					</ul>
				</li>
				
			</ul>
		</nav>
		<!-- End Sidebar navigation -->
	</div>
	<!-- End Sidebar scroll-->
</aside>
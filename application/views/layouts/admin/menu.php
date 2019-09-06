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
						<span class="hide-menu">Manage Produk</span>
					</a>
					<ul aria-expanded="false" class="collapse  first-level">
						<li class="sidebar-item">
							<a href="<?php echo base_url('admin/Product/index')?>" class="sidebar-link">
								<i class="mdi mdi-adjust"></i>
								<span class="hide-menu"> List Produk</span>
							</a>
						</li>
						<li class="sidebar-item">
							<a href="<?php echo base_url('admin/Product/addProduct')?>" class="sidebar-link">
								<i class="mdi mdi-adjust"></i>
								<span class="hide-menu"> Add Produk </span>
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
					<span class="hide-menu">Manage Front</span>
				</li>

				<li class="sidebar-item">
					<a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
						<i class="mdi mdi-comment-multiple-outline"></i>
						<span class="hide-menu">Hero</span>
					</a>
					<ul aria-expanded="false" class="collapse  first-level">
						<li class="sidebar-item">
							<a href="<?php echo base_url('admin/Hero/index')?>" class="sidebar-link">
								<i class="mdi mdi-adjust"></i>
								<span class="hide-menu"> List Hero</span>
							</a>
						</li>
						<li class="sidebar-item">
							<a href="<?php echo base_url('admin/Hero/formAddHero')?>" class="sidebar-link">
								<i class="mdi mdi-adjust"></i>
								<span class="hide-menu"> Add Hero </span>
							</a>
						</li>
					</ul>
				</li>

				
				<li class="sidebar-item">
					<a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
						<i class="mdi mdi-comment-multiple-outline"></i>
						<span class="hide-menu">About</span>
					</a>
					<ul aria-expanded="false" class="collapse  first-level">
						<li class="sidebar-item">
							<a href="<?php echo base_url('admin/About/listAbout')?>" class="sidebar-link">
								<i class="mdi mdi-adjust"></i>
								<span class="hide-menu"> List Data  </span>
							</a>
						</li>
						<li class="sidebar-item">
							<a href="<?php echo base_url('admin/About/formAddAbout')?>" class="sidebar-link">
								<i class="mdi mdi-adjust"></i>
								<span class="hide-menu"> Add Data </span>
							</a>
						</li>
					</ul>
				</li>

				<li class="sidebar-item">
					<a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
						<i class="mdi mdi-comment-multiple-outline"></i>
						<span class="hide-menu">Visi Misi</span>
					</a>
					<ul aria-expanded="false" class="collapse  first-level">
						<li class="sidebar-item">
							<a href="<?php echo base_url('admin/visiMisi/index')?>" class="sidebar-link">
								<i class="mdi mdi-adjust"></i>
								<span class="hide-menu"> List Visi Misi  </span>
							</a>
						</li>
						<li class="sidebar-item">
							<a href="<?php echo base_url('admin/visiMisi/formAddVisiMisi')?>" class="sidebar-link">
								<i class="mdi mdi-adjust"></i>
								<span class="hide-menu"> Add Visi Misi </span>
							</a>
						</li>
					</ul>
				</li>


				<li class="sidebar-item">
					<a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
						<i class="mdi mdi-comment-multiple-outline"></i>
						<span class="hide-menu">Carousel Toko</span>
					</a>
					<ul aria-expanded="false" class="collapse  first-level">
						<li class="sidebar-item">
							<a href="<?php echo base_url('admin/Carousel/index')?>" class="sidebar-link">
								<i class="mdi mdi-adjust"></i>
								<span class="hide-menu"> List Carousel Toko</span>
							</a>
						</li>
						<li class="sidebar-item">
							<a href="<?php echo base_url('admin/Carousel/formAddCarousel')?>" class="sidebar-link">
								<i class="mdi mdi-adjust"></i>
								<span class="hide-menu"> Add Carousel Toko </span>
							</a>
						</li>
					</ul>
				</li>

				<li class="sidebar-item">
					<a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
						<i class="mdi mdi-comment-multiple-outline"></i>
						<span class="hide-menu">Optional</span>
					</a>
					<ul aria-expanded="false" class="collapse  first-level">
						<li class="sidebar-item">
							<a href="<?php echo base_url('admin/option/index')?>" class="sidebar-link">
								<i class="mdi mdi-adjust"></i>
								<span class="hide-menu"> List Option </span>
							</a>
						</li>
						<li class="sidebar-item">
							<a href="<?php echo base_url('admin/Option/formAddOption')?>" class="sidebar-link">
								<i class="mdi mdi-adjust"></i>
								<span class="hide-menu"> Add Option </span>
							</a>
						</li>
						
					</ul>
				</li>

				<li class="sidebar-item">
					<a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
						<i class="mdi mdi-comment-multiple-outline"></i>
						<span class="hide-menu">Video Youtube</span>
					</a>
					<ul aria-expanded="false" class="collapse  first-level">
						<li class="sidebar-item">
							<a href="<?php echo base_url('admin/Youtube/index')?>" class="sidebar-link">
								<i class="mdi mdi-adjust"></i>
								<span class="hide-menu"> List Video Youtube  </span>
							</a>
						</li>
						<li class="sidebar-item">
							<a href="<?php echo base_url('admin/Youtube/formAddYoutube')?>" class="sidebar-link">
								<i class="mdi mdi-adjust"></i>
								<span class="hide-menu"> Add Video Youtube  </span>
							</a>
						</li>
					</ul>
				</li>

				<li class="sidebar-item">
					<a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
						<i class="mdi mdi-comment-multiple-outline"></i>
						<span class="hide-menu">Galery</span>
					</a>
					<ul aria-expanded="false" class="collapse  first-level">
						<li class="sidebar-item">
							<a href="<?php echo base_url('admin/Galery/index')?>" class="sidebar-link">
								<i class="mdi mdi-adjust"></i>
								<span class="hide-menu"> List Galery  </span>
							</a>
						</li>
						<li class="sidebar-item">
							<a href="<?php echo base_url('admin/Galery/formAddGalery')?>" class="sidebar-link">
								<i class="mdi mdi-adjust"></i>
								<span class="hide-menu"> Add Galery </span>
							</a>
						</li>
					</ul>
				</li>

				<li class="sidebar-item">
					<a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
						<i class="mdi mdi-comment-multiple-outline"></i>
						<span class="hide-menu">News</span>
					</a>
					<ul aria-expanded="false" class="collapse  first-level">
						<li class="sidebar-item">
							<a href="<?php echo base_url('admin/News/index')?>" class="sidebar-link">
								<i class="mdi mdi-adjust"></i>
								<span class="hide-menu"> List News  </span>
							</a>
						</li>
						<li class="sidebar-item">
							<a href="<?php echo base_url('admin/News/formAddNews')?>" class="sidebar-link">
								<i class="mdi mdi-adjust"></i>
								<span class="hide-menu"> Add News </span>
							</a>
						</li>
					</ul>
				</li>
			<!-- End Setting -->

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
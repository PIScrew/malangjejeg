<!-- Sidebar -->
<div class="col" id="main-sidebar">
	<div class="list-group list-group-flush">
		<a href="<?php echo base_url()?>" class="list-group-item list-group-item-action active"><span class="lnr lnr-home"></span>
			Home</a>
		<a href="<?php echo base_url()?>" class="list-group-item list-group-item-action"><span class="lnr lnr-list"></span>
			Kategori</a>
		<?php 
		// print_r($category); die();
		$i = 0;
		foreach ($category as $cg ):
		if ($i < 7) :?>
			<a href="<?php echo base_url('Category/'.$cg['slug_category'])?>" class="list-group-item list-group-item-action sub"><?php echo $cg['title_category']?></a>
		<?php endif; $i++;
		endforeach;?>
		<div class="collapse" id="categories">
		<?php $i = 0;
		foreach ($category as $cg ):
		if ($i > 6) :?>
			<a href="<?php echo base_url('Category/'.$cg['slug_category'])?>" class="list-group-item list-group-item-action sub"><?php echo $cg['title_category']?></a>
		<?php endif; $i++;
		endforeach;?>
		</div>
		<a href="#categories" class="list-group-item list-group-item-action sub toggle" data-toggle="collapse" aria-expanded="false">Kategori Lain &#9662;</a>
		<a href="<?php echo base_url('informasi')?>" class="list-group-item list-group-item-action"><span class="lnr lnr-layers"></span> Halaman Informasi</a>
		<a href="<?php echo base_url('about-us')?>" class="list-group-item list-group-item-action sub">About Us</a>
		<a href="<?php echo base_url('contact')?>" class="list-group-item list-group-item-action sub">Contact Us</a>
		<a href="<?php echo base_url('faq')?>" class="list-group-item list-group-item-action sub">FAQ</a>
		<?php  if($this->session->userdata('status') == "pmmember" && $_SESSION['role'] == 3 ):?>
		<a href="<?php echo base_url('User/logout')?>" class="list-group-item list-group-item-action sub">Keluar</a>
		<?php else:?>
		<?php if(@$_SESSION['status']!="pmadmin"): ?>
		<a href="<?php echo base_url('Login')?>" class="list-group-item list-group-item-action sub">Login / Register</a>
		<?php endif; ?>
		<?php endif;?>
		<a href="<?php echo base_url('help')?>" class="list-group-item list-group-item-action"><span class="lnr lnr-question-circle"></span> Help</a>
	</div>
	<div class="small p-3">Copyright © 2018 ProfileImageStudio</div>
	<img src="<?php echo img_url('img/site/osi.png')?>" class="sidebar-background sidebar-background--one">
	<img src="<?php echo img_url('img/site/ji.png')?>" class="sidebar-background sidebar-background--two">
</div>
<!-- /Sidebar -->
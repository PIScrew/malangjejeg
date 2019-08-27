<!-- Breadcrumb -->
<nav aria-label="breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="index-2.html" class="text-info">Home</a></li>
		<li class="breadcrumb-item active" aria-current="page"><?php echo $page['title_page']?></li>
	</ol>
</nav>
<!-- /Breadcrumb -->
<div class="row">
		<div class="col-12">
			<h3 class="title"><?php echo $page['title_page']?></h3>
      <?php if($page['img_path'] != null):?>
      <div class="col-12">
        <center><img src="<?php echo img_url($page['img_path']) ?>" alt="<?php echo $page['title_page']?>" class="page_img"></center>
      </div>
      <?php endif;?>
			<p><?php echo $page['content']?></p>
		</div>
</div>
<div class="my-5"></div>
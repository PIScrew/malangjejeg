<!-- About Us -->
<?php 
$i = 0;
foreach (@$about as $ab):
	if ($i % 2):?>
	<div class="row">
		<?php if($ab['img_path'] != null):?>
		<div class="col-md-6 mb-3 mb-md-0 order-md-2">
			<img src="<?php echo img_url($ab['img_path']) ?>" alt="<?php echo $ab['title']?>" class="w-100">
		</div>
		<?php endif;?>
		<div class="col-md-<?php if($ab['img_path'] != null){echo '6';}else{echo'12';}?>	 order-md-1">
			<h3 class="title"><?php echo $ab['title']?></h3>
			<p><?php echo $ab['desc']?></p>
		</div>
	</div>
	<div class="my-5"></div>
<?php else : ?>	
	<div class="row">
		<?php if($ab['img_path'] != null):?>
		<div class="col-md-6 mb-3 mb-md-0">
			<img src="<?php echo img_url($ab['img_path']) ?>" alt="<?php echo $ab['title']?>" class="w-100">
		</div>
		<?php endif;?>
		<div class="col-md-<?php if($ab['img_path'] != null){echo '6';}else{echo'12';}?>">
			<h3 class="title"><?php echo $ab['title']?></h3>
			<p><?php echo $ab['desc']?></p>
		</div>
	</div>
	<div class="my-5"></div>
<?php endif;$i++;
endforeach;?>

<!-- Our Values -->
<h3 class="title text-center mb-4">Our Values</h3>
<div class="row">
	<?php foreach($values as $v):?>
	<div class="col-md-6 mb-3">
		<div class="media">
			<img class="rounded-circle mr-3" src="<?php echo img_url($v['img_path']) ?>" width="64" height="64" alt="We Serve">
			<div class="media-body">
				<h5><?php echo $v['title']?></h5>
				<?php echo $v['desc']?>
			</div>
		</div>
	</div>
	<?php endforeach;?>
</div>
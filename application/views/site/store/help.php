<div class="row">
	<div class="col-12 mb-4">
		<h3 class="title"></h3>
		<hr>
	</div>
	<?php 
	$i = 0;
	foreach($type as $t):?>
	<div class="col-md-3">
		<h5><i class="<?php echo $t['icon']?>"></i><?php echo $t['type_faq']?></h5>
	</div>
	<div class="col-md-9 mb-4">
		<div id="accordion<?php echo $i?>" role="tablist" class="mb-3">
			<?php
			$s = 1;
			foreach($help as $f):
			if ($t['type_faq'] == $f['type_faq']) :?>
				<div class="card mb-1">
					<div class="card-header p-2" role="tab" id="heading<?php echo $i?>-<?php echo $s?>">
						<a class="collapsed text-secondary font-weight-bold" data-toggle="collapse" href="#collapse<?php echo $i?>-<?php echo $s?>" aria-expanded="false"
						aria-controls="collapse<?php echo $i?>-<?php echo $s?>">
						<?php echo $f['title']?>
						</a>
					</div>
					<div id="collapse<?php echo $i?>-<?php echo $s?>" class="collapse" role="tabpanel" aria-labelledby="heading<?php echo $i?>-<?php echo $s?>" data-parent="#accordion<?php echo $i?>">
						<div class="card-body">
						<?php echo $f['desc']?>
						</div>
					</div>
				</div>
			<?php
			endif; 
			$s++;
			endforeach;?>
		</div>
	</div>
	<?php 
	$i++;
	endforeach;?>
</div>
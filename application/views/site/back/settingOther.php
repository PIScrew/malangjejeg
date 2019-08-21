<div class="container-fluid" data-codepage="<?php echo $codepage?>">
<?php echo form_open_multipart('admin/setting/setOther', array("class" => "form-horizontal r-separator"));?>
	<div class="row">
		<div class="col-md-8 offset-md-2">
			<div class="card">
				<form action="#">
					<div class="form-body">
						<div class="card-body">
							<div class="form-group m-t-40 row">
								<label for="example-text-input" class="col-6 col-form-label">Search</label>
								<div class="col-6">
									<input class="form-control" type="number" id="search" name="search" value="<?php echo $conf['conf_page_search'] ?>">
								</div>
							</div>
							<div class="form-group m-t-40 row">
								<label for="example-text-input" class="col-6 col-form-label">Product</label>
								<div class="col-6">
									<input class="form-control" type="number" id="product" name="product" value="<?php echo $conf['conf_page_product'] ?>">
								</div>
							</div>
                            <div class="form-group m-t-40 row">
								<label for="example-text-input" class="col-6 col-form-label">Category</label>
								<div class="col-6">
									<input class="form-control" type="number" id="category" name="category" value="<?php echo $conf['conf_page_category'] ?>">
								</div>
							</div>
                            <div class="form-group m-t-40 row">
								<label for="example-text-input" class="col-6 col-form-label">Top Sell</label>
								<div class="col-6">
									<input class="form-control" type="number" id="topsell" name="topsell" value="<?php echo $conf['conf_page_topsell'] ?>">
								</div>
							</div>
						</div>
						<div class="form-actions">
							<div class="card-body text-right">
								<button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Simpan</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
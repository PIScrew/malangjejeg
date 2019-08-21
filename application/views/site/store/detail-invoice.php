<div class="card user-card codepage" data-codepage="<?php echo $code_page ?>">
	<div class="card-body">
		<div class="media">
			<img src="<?php echo img_url($profile['img_path']) ?>" width="100" height="100" class="img-thumbnail rounded-circle"
			 alt="<?php echo ucwords(@$profile['firstname']).' '. ucwords(@$profile['lastname']);?>">
			<div class="media-body ml-3 pt-3">
				<h4><?php echo ucwords(@$profile['firstname']).' '. ucwords(@$profile['lastname']);?></h4>
				<div class="small text-muted">Terdaftar <?php echo tgl_indo(@$profile['created_at'])?></div>
				<div class="small text-muted">Email: <?php echo @$profile['email']?></div>
				<div class="small text-muted">Pembelian: 100</div>
			</div>
		</div>
    <hr>
    <div class="row">
      <div class="col-md-12">
        <h3><b>INVOICE</b> <span >#<?php echo $order['code_order']?></span><?php if ($order['receipt'] != null):?><span class="pull-right">Resi: <?php echo $order['receipt']?></span><?php endif;?></h3>
				<hr>
        <div class="table-responsive m-t-40" style="clear: both;">
          <table class="table table-hover">
            <thead>
              <tr>
                <th class="text-center">#</th>
                <th>Description</th>
                <th class="text-right">Quantity</th>
                <th class="text-right">Unit Cost</th>
                <th class="text-right">Total</th>
              </tr>
            </thead>
            <tbody>
            <?php $no = 1;
            foreach ($invoice as $i):?>
              <tr>
                <td class="text-center"><?php echo $no?></td>
                <td><?php echo $i['title_product']?></td>
                <td class="text-right"><?php echo $i['qty']?> </td>
                <td class="text-right"> <?php echo rupiah($i['selling_price'])?> </td>
                <td class="text-right"> <?php echo rupiah($i['total_price'])?> </td>
              </tr>
            <?php $no++; 
            endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
      <div class="col-md-12">
        <div class="row">	
          <div class="col-6 pull-left text-left">
            <address>
              <h3>Dikirim Kepada,</h3>
              <h4 class="font-bold"><?php echo ucwords($order['firstname']).' '.ucwords($order['lastname']);?></h4>
              <p class="text-muted m-l-30"><?php echo $order['complete_address']?>
                <br /><?php echo @$order['zip_code']?>, <?php echo $order['subdistrict']?>
                <br /> <?php echo $order['city']?>, <?php echo $order['province']?> - <?php echo $order['telephone']?></p>
            </address>
          </div>
          <div class="col-6 pull-right m-t-30 text-right">
            <table class="pull-right">
              <tr>
                <td>
                  Sub - Total amount:
                </td>
                <td>
                  Rp <?php echo rupiah($order['total_price'])?>
                </td>
              </tr>
              <tr>								
                <td>
                  Kode Unik Pengiriman:
                </td>
                <td>
                  Rp <?php echo rupiah($order['price_unique'])?>
                </td>
              </tr>
              <tr>									
                <td>
                  Ongkos kirim:
                </td>
                <td>
                  Rp <?php echo rupiah($order['delivery_fee'])?>
                </td>
              </tr>
              <tr>									
                <td>
                  Total Biaya:
                </td>
                <td>
                  Rp <?php echo rupiah($order['total_price_unique'])?>
                </td>
              </tr>
            </table>
          </div>
          
          <div class="col-12">
            <h4><b>Pembayaran</b> </h4>
            <h5><?php echo $rekening['title']?> <br><?php echo $rekening['name']?> - <?php echo $rekening['account_number']?></h5>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
      <hr>
      <?php if ($order['receipt'] != null && sizeof($riview) == 0):?>
      
      <div class="col-12">
        <?php echo form_open('Profile/review'); ?>
        <input type="hidden" name="invoice" value="<?php echo $order['code_order']?>">
          <div class="form-group">
            <select name="id_product" class="form-control" id="product">
            <?php foreach ($productR as $i): // 
              if($i['exist'] == 0 ):?>
              <option value="<?php echo $i['id_product']?>"> <?php echo $i['title_product']?></option>
            <<?php endif; 
          endforeach;?>
            </select>
          </div>
          <div class="form-group">
            <textarea class="form-control" name="riview" id="inputDesc" rows="3" placeholder="Your review"></textarea>
          </div>
          <div class="form-group">
            <label>Rating</label>
            <div id="star-rating" class="text-warning h5"></div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary">Cancel</button>
            <button type="submit" class="btn btn-primary">Send</button>
          </div>
        </form>
      </div>
     <?php elseif(sizeof($riview) > 0):?>
      <div class="col-12">
      <?php foreach(@$riview as $rw):?>
        <div class="card mt-1">
          <div class="card-body">
            <div class="media-body ml-3">
              <h5><?php echo $rw['title_product']?></h5>
              <span class="rating text-secondary" data-value="<?php echo $rw['rating']?>"></span>
              <small class="ml-2"><?php echo tgl_indo($rw['created_at'])?></small>
              <p><?php echo $rw['content']?></p>
            </div>
          </div>
        </div>
      <?php endforeach;?>
      </div>      
      <?php endif;?>
    </div>
	</div>
</div>
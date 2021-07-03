<div class="container">  
	<form action="<?= base_url() . 'index.php/inventory/updateinventory/' . $hotel_id . '?category=' . $subcategory . '&range=' . $range . '&start_date=' . $start_date?>" 
		  method="post" class="form-horizontal">
		<?php if ($range) : ?>
		
			<div class="form-group row">
				<?php foreach ($dates as $d) { ?>
					
					<div class="checkbox checkbox-icon-black col-sm-3 col-xs-6">
						<input id="checkbox<?=$d?>" name = "dates[<?=$d?>]" type="checkbox" checked="checked">
						<label for="checkbox<?=$d?>"><?= $d ?></label>
					</div>
				<?php } ?>
			</div>
		<?php else : ?>
			<input id="checkbox<?=$start_date?>" name = "dates[<?=$start_date?>]" type="hidden">
		<?php endif; ?>
		<div class="form-group row">
			<label for="available" class="col-sm-2 control-label">Total Available</label>
			<div class="col-sm-2">
			<?php
			// if(isset($params['booked']))
			// {
			?>
				<!-- <input type="text" class="form-control" name="available" placeholder="" value = <?= ($params['total_available']-$params['booked']) ?> required> -->
				<?php
				// }
				// else
				// {
					?>
					<input type="text" class="form-control" name="available" placeholder="" value = <?= $params['total_available'] ?> required>
					<?php

				// }
				?>
			
			</div>
			<label for="capacity" class="col-sm-2 control-label">Capacity</label>
			<div class="col-sm-2">
				<input type="text" class="form-control" name="capacity" placeholder="" value = <?= $params['capacity'] ?> >
			</div>
			<label for="blocked" class="col-sm-2 control-label">Blocked</label>
			<div class="col-sm-2">
				<label class="switchToggle"><input "<?= ($params['blocked']) ? 'checked="checked"' : "" ?>" type="checkbox" name="blocked">
					<span class="slider green round"></span>
                </label>
				<!--input type="text" class="form-control" name="blocked" placeholder="" value = <?= $params['blocked'] ?> required-->
			</div>
		</div>
		
		<!-- <div class="form-group row">
			<label for="baseprice" class="col-sm-2 control-label">Base Price</label>
			<div class="col-sm-2">
				<input type="hidden" class="form-control" name="baseprice" placeholder="" value = <?= $params['base_price'] ?> required>
			</div>
			<label for="originalprice" class="col-sm-2 control-label">Original Price</label>
			<div class="col-sm-2">
				<input type="hidden" class="form-control" name="originalprice" placeholder="" value = <?= $params['original_price'] ?> required>
			</div>
			<label for="price" class="col-sm-2 control-label">Price</label>
			<div class="col-sm-2">
				<input type="hidden" class="form-control" name="price" placeholder="" value = <?= $params['price'] ?> required>
			</div>
		</div> -->
			
		<div class="form-group row">
			<button type="submit" class="btn btn-info offset-4">Update Inventory</button>
		</div>
	</form>
</div> 

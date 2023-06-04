<div class="text-align-center"><?= stripslashes($top) ?></div>
<table align="center" width="900" height="600" cellpadding="0" cellspacing="0" border="0">
	<tr>
		<td>
			<table border="1" align="center"> 	
				<tr> 	
					<th>#</th><th>Artist</th><th>Album</th><th>Avail</th><th>Price</th><th>Add</th> 	
				</tr> 	
				<?php foreach ($result as $r) { ?> 	
				<tr> 
					<td class="border"><img src="images/avail/<?= $r['image'] ?>"></td>
					<td class='shop_text'>#<?= strtoupper($r['number']) ?> - <?= $r['artist']?></td>
					<td class="shop_text"><?= $r['title']?></td>
					<td class='avail '><?= $r['quantity']?></td>
					<td class='shop_text '>$<?= sprintf("%.2f",$r['price'])?></td>
					<?php if($r['quantity'] == 0) { ?> 
					<td class='shop_text' style="color:red">OUT OF STOCK</td>
					<?php } else { ?>
					<td class="text shop">
						<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
							<input type="hidden" name="cmd" value="_cart">
							<input type="hidden" name="business" value="LVX2K5FBLM9WA">
							<input type="hidden" name="lc" value="US">
							<input type="hidden" name="item_name" value="<?= $r['artist']?> - <?php echo $this->r['title']?>">
							<input type="hidden" name="amount" value="<?= $r['price']?>">
							<input type="hidden" name="currency_code" value="USD">
							<input type="hidden" name="button_subtype" value="products">
							<input type="hidden" name="no_note" value="1">
							<input type="hidden" name="no_shipping" value="2">
							<input type="hidden" name="add" value="1">
							<input type="hidden" name="bn" value="PP-ShopCartBF:btn_cart_LG.gif:NonHosted">
							<input type="image" src="images/add.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
							<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
						</form>
					</td> 	
					<?php } ?>							
				</tr> 	
				<?php } ?>
			</table> 
		</td>
	</tr>
</table>
<div class="text-align-center"><?= stripslashes($bottom) ?></div>
	


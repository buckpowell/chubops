
<div class="text-align-center"><?=stripslashes($top)?></div>
<div class="center-div" style ="display: block;overflow: hidden;">
	<?php foreach ($shared as $s) { ?>
	<div class="boxed">
		<div class="boxed_title"><?= $s['title'] ?></div>
		<a href="images/boxed/<?= $s['image'] ?>" class="highslide-full-expand" onclick="return hs.expand(this,
			{wrapperClassName: 'borderless floating-caption', dimmingOpacity: 0.75, align: 'center'})">
			<img id="thumb2" width="100" height="100" border="0"
			src="images/boxed/<?= $s['image']?>" alt="Highslide JS"
			title="Click to enlarge" />
		</a>
		<div class="highslide-caption" id="boxed_caption">
			<div class="boxed_des"><?= $s['description'] ?></div>
		</div>
		<div class="boxed_cond"><?= $s['cond'] ?></div>
		<div class="boxed_price"><?= "$" . strtoupper($s['price']) ?></div>
		<?php if($s['quantity'] == 0) { ?>
		<div style="color:red">OUT OF STOCK</div>
		<?php } else { ?>
		<div class="paypal">
			<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
				<input type="hidden" name="cmd" value="_cart">
				<input type="hidden" name="business" value="LVX2K5FBLM9WA">
				<input type="hidden" name="lc" value="US">
				<input type="hidden" name="item_name" value="<?= $s['title']?>">
				<input type="hidden" name="amount" value="<?= $s['price']?>">
				<input type="hidden" name="currency_code" value="USD">
				<input type="hidden" name="button_subtype" value="products">
				<input type="hidden" name="no_note" value="0">
				<input type="hidden" name="cn" value="Add special instructions to the seller:">
				<input type="hidden" name="no_shipping" value="2">
				<input type="hidden" name="add" value="1">
				<input type="hidden" name="bn" value="PP-ShopCartBF:btn_cart_LG.gif:NonHosted">
				<input type="image" src="images/add.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
				<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
			</form>
		</div>
		<?php } ?>
	</div>
	<?php } ?>
</div>
<div class="text-align-center"><?= stripslashes($bottom)?></div>


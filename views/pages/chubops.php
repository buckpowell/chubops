<?php echo $top;?>
<?php include_once('views/chubops_nav.php')?>
<div class="center-div" style ="display: block;overflow: hidden; width:610px">
	<?php for($i=0; $i < sizeof($chubops); $i++) { ?>
		<div class="boxed">
			<div class="boxed_title"><?php echo $chubops[$i]['title'] ?></div>
			<a href="images/thumbs/<?php echo $chubops[$i]['image'] ?>" class="highslide-full-expand" onclick="return hs.expand(this,
				{wrapperClassName: 'borderless floating-caption', dimmingOpacity: 0.75, align: 'center'})">
				<img id="thumb2" width="100" height="100" border="0"
				src="images/thumbs/<?php echo $chubops[$i]['image']?>" alt="Highslide JS"
				title="Click to enlarge" />
			</a>
			<div class="highslide-caption" id="boxed_caption">
				<div class="boxed_des"><?php echo $chubops[$i]['description'] ?></div>
			</div>
			<div class="boxed_cond"><?php echo $chubops[$i]['cond'] ?></div>
			<div class="boxed_price"><?php "$" . strtoupper($chubops[$i]['price']) ?></div>
			<?php if($chubops[$i]['quantity'] == 0) { ?>
			<div style="color:red">OUT OF STOCK</div>
			<?php } else { ?>
			<div class="paypal">
				<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
					<input type="hidden" name="cmd" value="_cart">
					<input type="hidden" name="business" value="LVX2K5FBLM9WA">
					<input type="hidden" name="lc" value="US">
					<input type="hidden" name="item_name" value="<?= $chubops[$i]['title']?>">
					<input type="hidden" name="amount" value="<?= $chubops[$i]['price']?>">
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
<?php echo $bottom; ?>		




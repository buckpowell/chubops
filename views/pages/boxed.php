<div class="text-align-center"><?php echo stripslashes($top)?>
<div class="container">
	<div>
		<?php foreach ($left as $l) { ?>
			<img src="images/boxed/<?= $l['image'] ?>" class="border" width="100" height="100" style="padding-bottom:5px">
		<?php } ?>
	</div>
	<div class="body-width text-align-center"><?php echo stripslashes($body)?></div>
	<div>
		<?php foreach ($right as $r) { ?>
		<img src="images/boxed/<?= $r['image'] ?>" class="border" width="100" height="100" style="padding-bottom:5px">
		<?php } ?>
	</div>
</div>

<div class="link_container">
	<div class="link">
		<div class="text-align-center padding-left-right">Elvis Boxed Sets</div>
		<div class="link_pic"><a href="?controller=boxed&action=elvis&id=e"><span class="elvis"><img src="images/elvis_glitter.gif" width="100%" height="auto" border="0"></span></a></div>
	</div>
	<div class="link">
		<div class="text-align-center padding-left-right">Beatles Boxed Sets</div>
		<div class="link_pic"><a href="?controller=boxed&action=beatles&id=b"><img src="images/beatles_cartoon.gif" width="100%" height="auto" border="0"></a></div>
	</div>
	<div class="link">
		<div class="text-align-center padding-left-right">Stones Boxed Sets</div>
		<div class="link_pic"><a href="?controller=boxed&action=stones&id=r"><img src="images/stones_glitter.gif" width="100%" height="auto" border="0"></a></div>
	</div>
	<div class="link">
		<div class="text-align-center padding-left-right">Superstar Boxed Sets</div>
		<div class="link_pic"><a href="?controller=boxed&action=superstar&id=s"><img src="images/superstar.gif" width="100%" height="auto" border="0"></a></div>
	</div>
	<div class="link">
		<div class="text-align-center padding-left-right">Memorabilia Boxed Sets</div>
		<div class="link_pic"><a href="?controller=boxed&action=collectables&id=m"><img src="images/100percent.gif" width="100%" height="auto" border="0"></a></div>
	</div>
	<div class="link">
		<div class="text-align-center padding-left-right">Chubops Boxed Sets</div>
		<div class="link_pic"><a href="?controller=boxed&action=chubop&id=c"><img src="images/chubops.jpg" width="100%" height="auto" border="0"></a></div>
	</div>
</div>
<div class="text-align-center"><?php echo stripslashes($bottom)?></div>
<a name="scroll">


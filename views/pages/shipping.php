<div class="text-align-center"><?= stripslashes($top) ?></div>
<div class="container center-div">
	<div>
		<?php foreach ($left as $l) { ?>
			<img src="images/thumbs/<?= $l['image'] ?>" class="border">
		<?php } ?>
	</div>
	<div class="body-width text-align-center">
		<div class="text-align-center"><?= stripslashes($body) ?></div>
	</div>
	<div>
		<?php foreach ($right as $r) { ?>
		<img src="images/thumbs/<?= $r['image'] ?>" class="border">
			<?php } ?>
		</div>
</div>
<div class="text-align-center"><?= stripslashes($bottom) ?></div>


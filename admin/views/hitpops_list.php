<div class="text-align-center"><?=stripslashes($top)?></div>
<div class="center-div">
	<h3 align="center"><a href="?controller=list&action=chubops">View Hitpops List</a></h3>
	<br>
	<table class="border" align="center" width="700">
		<tr>
			<th colspan="5">Incomplete Hitpops List</th>
		</tr>
		<?php for ($i = 0; $i < count($hitpops); $i++) { 
				switch ($i) {
					case 0:
					case 16:
					case 24:
					case 32:
					case 40:
			{ ?>
		<tr>
			
			<?php
				switch ($i) {
				case 0:
				case 16:
				?>
				(16)
				<?php } ?>
			<?php } ?>	
			<?php
				switch ($i) {
				case 24:
				case 32:
				case 40:
				?>
				(8)
			<?php } ?>			
		<?php } ?>
		<tr>
			<td class="padding-left-right border"><img src="images/avail/<?= $hitpops[$i]['image'] ?>"></td>
			<td class="padding-left-right border"><center>#<?= $hitpops[$i]['number'] ?></center></td>
			<td class="padding-left-right border"><?= $hitpops[$i]['artist'] ?></td>
			<td class="padding-left-right border"><?= $hitpops[$i]['title'] ?></td>
		</tr>
		<?php } ?>
	</table>
</div>
<div class="text-align-center"><?= stripslashes($bottom) ?></div>

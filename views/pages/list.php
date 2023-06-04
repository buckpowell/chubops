<div class="text-align-center"><?=stripslashes($top)?></div>
<div class="center-div">
	<h3 align="center"><a href="?controller=list&action=hitpops">View Hitpops List</a></h3>
	<br>
	<table class="border" align="center" width="700">
		<tr>
			<th colspan="5">Complete List (Amurol & Album Graphics)</th>
		</tr>
		<tr>
			<th align="center" colspan="5" class="padding-left-right">Courtesy of Jeff Allender</th>
		</tr>
		<?php for ($i = 0; $i < count($result); $i++) { 
				switch ($i) {
					case 0:
					case 8:
					case 16:
					case 24:
					case 32:
					case 40:
					case 48:
					case 58:
					case 74:
			{ ?>
		<tr>
			<td colspan="3" align="center" class="padding-left-right"><a href="?chubops_controller&series=<?= $result[$i]['series']?>">Series <?= $result[$i]['series']?></a>&nbsp;
			<?php
				switch ($i) {
				case 0:
				case 8:
				case 16: 
				case 24:
				case 32:
				case 40:
				?>
				(8)
				<?php } ?>
				<?php 
				switch ($i) {
			       case 48: 
				?>
				(10)
			<?php } ?>
			<?php 
				switch ($i) {
			       case 58: 
				?>
				(16)
			<?php } ?>
			<?php 
				switch ($i) {
			       case 74: 
				?>
				(11)
			<?php } ?>
				&nbsp;
			 <?php 
			 switch ($i) {
				case 0:
				case 8:
				?>
				<td>&nbsp;Part of Volume 1</td>
			<?php } ?>	
			<?php
			switch ($i) {
				case 16:
				case 24:
				?>
			<td>&nbsp;Part of Volume 2</td
			<?php } ?>			
		</tr>	
			<?php } ?>		
		<?php } ?>
		<tr>
			<td class="padding-left-right border"><img src="images/avail/<?= $result[$i]['image'] ?>"></td>
			<td class="padding-left-right border"><center>#<?= $result[$i]['number'] ?></center></td>
			<td class="padding-left-right border"><?= $result[$i]['artist'] ?></td>
			<td class="padding-left-right border"><?= $result[$i]['title'] ?></td>
		</tr>
		<?php } ?>
	</table>
</div>
<div class="text-align-center"><?= stripslashes($bottom) ?></div>

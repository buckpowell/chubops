<div class="center-div">
	<table class="border" align="center" width="700">
		<tr>
			<th colspan="5">Hitpops (Incomplete List)</th>
		</tr>
		<?php for ($i = 0; $i < count($result); $i++) { 
				switch ($i) {
					case 0:
					case 16:
					case 24:
					case 32:
					case 40:
					case 48:
			{ ?>
		<tr>
			<td colspan="3" align="center" class="padding-left-right list-name"> <?= $result[$i]['country']?>&nbsp;
			<?php
				switch ($i) {
				case 0:
				case 8:
				?>
				(16)
				<?php } ?>
				<?php
				switch ($i) {
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
				(8)
			<?php } ?>
				&nbsp;		
		</tr>	
			<?php } ?>		
		<?php } ?>
		<tr>
			<td align="center" class="text border"><a href="index.php?controller=hitpops&action=view&id=<?php echo $result[$i]['id'] ?>"><img src="images/mag.png" border="0"></a></td>
			<td class="padding-left-right border"><img src="images/avail/<?= $result[$i]['image'] ?>"></td>
			<td class="padding-left-right border"><center>#<?= $result[$i]['number'] ?></center></td>
			<td class="padding-left-right border"><?= $result[$i]['artist'] ?></td>
			<td class="padding-left-right border"><?= $result[$i]['title'] ?></td>
		</tr>
		<?php } ?>
	</table>
</div>




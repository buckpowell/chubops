<table class="border" align="center" border="0" width="900">
	<tr>
		<th colspan="9">Boxed List</th>
	</tr>
	<?php for ($i=0; $i < count($result); $i++) { ?>
	<tr>
		<td colspan="9" class="list-name"><?= $result[$i]['name'] ?></td>
	</tr>
	<?php $detail = Admin::fetchBoxedByType($result[$i]['type']);?>
		<?php for($j = 0; $j < count($detail); $j++){ ?>
	<tr>
		<td align="center" class="border"><a href="index.php?controller=boxed&action=view&id=<?= $detail[$j]['id'] ?>"><img src="images/mag.png"></a></td>
		<td align="center" width="10%" class="border"><?= $detail[$j]['type'] ?><?= $detail[$j]['typeid'] ?></td>
		<td class="border"><?= $detail[$j]['title'] ?></td>
		<td class="border" align="center"><?= $detail[$j]['quantity'] ?></td>
		<td class="border" align="center"width="10%"><?= "$" . $detail[$j]['price'] ?></td>
		<?php } ?>
	</tr>
	<?php } ?>
</table>








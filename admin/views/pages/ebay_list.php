<table class="border" align="center" border="0" width="900">
	<tr>
		<th colspan="5" class="admin-text">eBay Pics</th>
	</tr>
	<?php if (!$result) { echo 'No Records Found';exit;} ?>
	<tr>
	<th class="header">View</th><th class="header">Delete</th><th class="header">Title</th><th class="header">Description</th><th class="header">Sort</th>
	</tr>
	<?php for ($i = 0;$i < count($result);$i++) { ?>
	<tr>
		<td align="center" class="text border"><a href="index.php?controller=ebay&action=view&id=<?= $result[$i]['id'] ?>"><img src="images/mag.png" border="0"></a></td>
		<td align="center" class="text border"><a href="index.php?controller=ebay&action=delete&&id=<?= $result[$i]['id'] ?>" onclick="javascript:return confirm('Are you sure you want to delete this item?')"><img src="images/delete.png" border="0"></a></td>
		<td class="text border"><?= $result[$i]['title'] ?></td>
		<td align="center" class="text border" width="70%"><?= $result[$i]['description'] ?></td>
		<td align="center" class="text border"><?= $result[$i]['sort'] ?></td>
	</tr>
	<?php } ?>
</table>








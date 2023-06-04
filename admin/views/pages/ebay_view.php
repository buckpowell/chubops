<table align="center" border="0" class="border">
	<form method="post" action="?controller=ebay&action=update">
	<input type="hidden" name="id" value="<?= $result['id']?>">
	<tr>
        <td valign="top" class="label">Title</td>
		<td><input type="text" name="title" size="30" value="<?=$result['title']?>"></td>
	</tr>
		<td valign="top" class="label">Desc</td>
		<td><textarea name="description" rows="10" cols="50"><?=$result['description']?></textarea></td>
	</tr>
	<tr>
		<td valign="top" class="label">Sort</td>
		<td><input type="text" name="sort" size="1" value="<?=$result['sort']?>"></td>
	</tr>
	<tr>
		<td colspan="2" align="right"><input type="submit" value="Submit" class="submit"></td>
	</tr>
	</form>
</table>



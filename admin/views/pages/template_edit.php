<table align="center" border="0" class="border" height="100%" width="100%">
	<form method="post" action="?controller=ebay&action=update_template">
	<tr>
		<td valign="top" class="label">Title:</td>
		<td><input type="text" class="input" name="title" size="100" value="<?= $result['title'] ?>"></td>
	</tr>
	<tr>
		<td valign="top" class="label">Desc:</td>
		<td><textarea rows="10" cols="50" name="description"><?= $result['description'] ?></textarea></td>
	</tr>
	<tr>
		<td valign="top" class="label">Sort:</td>
		<td><input type="text" class="input" name="sort" size="2" value="<?= $result['sort'] ?>"></td>
	</tr>
	<tr>
		<td colspan="2" align="right"><input type="submit" value="Submit" class="submit"></td>
	</tr>
</form>
</table>

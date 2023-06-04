<table align="center" border="0">
	<tr>
		<td align="center"><img src="images/chubops/<?= $result['image'] ?>" border="0" alt="image"></td>
	</tr>
    <tr>
		<td align="center"><?= $result['image'] ?></td>
	</tr>
</table>
<form method="post" action="?controller=hitpops&action=update">

<table align="center" border="0" class="border">
	<tr>
	<input type="hidden" name="id" value="<?= $result['id'] ?>">
		<td valign="top" class="label">Series</td>
		<td><input type="text" READONLY name="series" size="1" value="<?= $result['series'] ?>"></td>
	</tr>
	<tr>
		<td valign="top" class="label">Number</td>
		<td><input type="text" READONLY class="input" name="number" size="2" value="<?= $result['number'] ?>"></td>
	</tr>
	<tr>
		<td valign="top" class="label">Artist</td>
		<td><input type="text" READONLY name="artist" size="50" value="<?= $result['artist'] ?>"></td>
	</tr>
	<tr>
		<td valign="top" class="label">Title</td>
		<td><input type="text" name="title" READONLY size="68" value="<?= $result['title'] ?>"></td>
	</tr>
	<tr>
		<td valign="top" class="label">Tracks</td>
		<td><textarea name="description" rows="10" cols="50"><?= strip_tags($result['description']) ?></textarea></td>
	</tr>
	<tr>
		<td valign="top" class="label">Condition</td>
		<td><input type="text" name="cond" size="68" value="<?= $result['cond'] ?>"></td>
	</tr>
	<tr>
		<td valign="top" class="label">Qty</td>
		<td><input type="text" name="quantity" size="2" value="<?= $result['quantity'] ?>"></td>
	</tr>
	<tr>
		<td valign="top" class="label">Price</td>
		<td><input type="text" name="price" size="3" value="<?= $result['price'] ?>"></td>
	</tr>
	<tr>
		<td colspan="2" align="right"><input type="submit" value="Submit" class="submit"></td>
	</tr>
</table>
</form>
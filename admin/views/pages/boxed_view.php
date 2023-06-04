<table align="center">
	<tr>
		<td align="center"><img src="images/boxed/<?= $result['image'] ?>" border="0"></td>
	</tr>
    <tr>
		<td align="center"><?= $result['image'] ?></td>
	</tr>
</table>
<table align="center" class="border">
	<form method="post" action="?controller=boxed&action=update" enctype="multipart/form-data">
	<input type="hidden" name="id" value="<?= $result['id'] ?>">
	<input type="hidden" name="typeid" value="<?= $result['typeid'] ?>">
	<input type="hidden" name="type" value="<?= $result['type'] ?>">
	<input type="hidden" name="orig_img" value="<?= $result['image'] ?>">
	<tr>
		<td align="left"><label for="photo">Image:</label><input type="file" name="photo" size="30"></td>
	</tr>
	<tr>
	<td><label for="title">Name:</label><input name="name" value="<?= $result['name']?>" readonly disabled ></td>
	</tr>
	<tr>
		<td><label for="title">Title:</label><input type="text" name="title" size="44" value="<?= $result['title'] ?>"></td>
	</tr>
	<tr>
		<td><label for="cond">Condition:</label><input type="text"  name="cond" size="44" value="<?= $result['cond'] ?>"></td>
	</tr>
	<tr>
		<td><label for="description">Desc:</label><textarea name="description" rows="10" cols="50" ><?= strip_tags(stripslashes(str_replace('\"', '', $result['description']))) ?></textarea></td>
	</tr>
	<tr>
		<td><label for="qty">Qty:</label><input type="text" name="quantity" size="2" value="<?= $result['quantity'] ?>"></td>
	</tr>
	<tr>
		<td><label for="price">Price:</label><input type="text" name="price" size="5" value="<?= $result['price'] ?>"></td>
	</tr>
	<tr>
		<td><label for="sort">Sort:</label><input type="text" name="sort" size="1" value="<?= $result['sort'] ?>"></td>
	</tr>
	<tr>
		<td align="right"><input type="submit" value="Submit" class="submit"></td>
	</tr>
</table>
</form>

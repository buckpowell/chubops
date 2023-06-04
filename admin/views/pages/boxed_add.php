<table align="center" border="0" class="border">
	<form method="post" action="?controller=boxed&action=add" enctype="multipart/form-data">
	<tr>
        <td valign="top" class="label">Image</td>
		<td><input type="file" name="photo" size="30"></td>
	</tr>
	<tr>
		<td valign="top" class="label">Type</td>
		<td>
            <select name="type">
                <option value="E">Elvis</option>
                <option value="B">Beatles</option>
                <option value="R">Stones</option>
                <option value="S">Superstar</option>
				<option value="C">Chubops</option>
				<option value="M">Collectables</option>
            </select>
			<input type="hidden" name="typeid">
        </td>
	</tr>
	<tr>
		<td valign="top" class="label">Title</td>
		<td><input type="text"  name="title" size="44"></td>
	</tr>
	<tr>
		<td valign="top" class="label">Cond</td>
		<td><input type="text" name="cond" size="44"></td>
	</tr>
	<tr>
		<td valign="top" class="label">Desc</td>
		<td><textarea name="description" rows="10" cols="50"></textarea></td>
	</tr>
	<tr>
		<td valign="top" class="label">Qty</td>
		<td><input type="text" name="quantity" size="2" value="0"></td>
	</tr>
	<tr>
		<td valign="top" class="label">Price</td>
		<td><input type="text" name="price" size="5" value="0"></td>
	</tr>
	<tr>
		<td valign="top" class="label">Sort</td>
		<td><input type="text" name="sort" size="1" value="0"></td>
	</tr>
	<tr>
		<td colspan="2" align="right"><input type="submit" value="Submit" class="submit"></td>
	</tr>
	</form>
</table>



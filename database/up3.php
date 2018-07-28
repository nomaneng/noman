<?php
	include "db.php";
	$id = $_GET['id'];
	$sql = "SELECT * FROM product_buy WHERE id='$id'";
	$result = $object->query($sql);

	?>

	<table>
		<form method="post" action="up4.php">
		<?php
		while ($data = $result->fetch_assoc()) {
			
		?>

		<tr>
			<td>Name:</td>
			<td><input type="text" name="name" value="<?php echo $data['name']?>"></td>
		</tr>
		<tr>
			<td>Gmail:</td>
			<td><input type="text" name="mail"  value="<?php echo $data['gmail']?>"></td>
		</tr>
		<tr>
			<td>Phone:</td>
			<td><input type="text" name="phone"  value="<?php echo $data['phone']?>"></td>
		</tr>
		<tr>
			<td>Reference Code:</td>
			<td><input type="text" name="code"  value="<?php echo $data['rcode']?>"></td>
		</tr>
		<tr>
			<td>Colour:</td>
			<td><input type="text" name="col"  value="<?php echo $data['colour']?>"></td>
		</tr>
		<tr>
			<td>Quentity:</td>
			<td><input type="text" name="quantity"  value="<?php echo $data['quentity']?>"></td>
		</tr>
		<tr>
			<td>Price:</td>
			<td><input type="text" name="takas"  value="<?php echo $data['price']?>"></td>
		</tr>
		<tr>
			<td>Address:</td>
			<td><input type="text" name="add"  value="<?php echo $data['address']?>"></td>
		</tr>
		<tr>
			<td>Confirm:</td>
			<td><input type="text" name="con"  value="<?php echo $data['confirm']?>"></td>
		</tr>
		<tr>
			<td colspan="2">
				<input type="hidden" name="id" value="<?php echo $id ?>">
				<input type="Submit" name="go">
			</td>
		</tr>
			
		<?php
			}
		?>

				
	</form>
		</table>

	
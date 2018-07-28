<?php
	include "db.php";
	$a="SELECT * FROM product_buy";
	$b=$object->query($a);
	echo '<table border="2">';
		?>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Gmail</th>
				<th>Phone Number</th>
				<th>Reference Code</th>
				<th>Colour</th>
				<th>Quentity</th>
				<th>Price</th>
				<th>Address</th>
				<th>Confirm</th>
				<th>Update</th>
				<th>Delete</th>	
			</tr>

		<?php
		while ($value = $b->fetch_assoc()) {
			?>
			<tr>
				<td><?php echo $value['id'] ?></td>
				<td><?php echo $value['name'] ?></td>
				<td><?php echo $value['gmail'] ?></td>
				<td><?php echo $value['phone'] ?></td>
				<td><?php echo $value['rcode'] ?></td>
				<td><?php echo $value['colour'] ?></td>
				<td><?php echo $value['quentity'] ?></td>
				<td><?php echo $value['price'] ?></td>
				<td><?php echo $value['address'] ?></td>
				<td><?php echo $value['confirm'] ?></td>
				<td><a href="up3.php?id=<?php echo $value['id'] ?>">update</a></td>
				<td><a href="del.php?id=<?php echo $value['id'] ?>">delete</a></td>
			</tr>
			<?php
		}
		echo "</table>";
?>
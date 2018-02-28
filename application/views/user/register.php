<table>
	<thead>
		<th>id</th>
		<th>name</th>
		<th>pass</th>
		<th>edit</th>
		<th>delete</th>
	</thead>

	<?php
 	foreach ($row as $key => $value) {
 	?>

	<tbody>
		<tr>
			<td><?=$value['u_id']?></td>
			<td><?=$value['u_name']?></td>
			<td><?=$value['u_pass']?></td>
			<td>
				<form action="form_edit/<?=$value['u_id']?>" method="post">
				<button type="summit">edit</button>
				</form>
			</td>
			<td>
				<form action="user/delete/<?=$value['u_id']?>" method="post">
				<button type="summit">delete</button>
				</form>
			</td>
		</tr>
	</tbody>
	<?php
	 	}
	?>
</table>
<form action="<?=base_url()?>index.php/user/insert" method="post">
<input class="form-control" type="text" name="name">
<input class="form-control" type="password" name="pass">
<button type="summit">OK</button>
</form>

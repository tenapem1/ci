<!-- <?php
	var_dump($rows);
?> -->
<table border="1" cellspacing="0" padding="5" width="50%">
	<thead>
		<th>id</th>
		<th>name</th>
		<th>password</th>
	</thead>
	<tbody>
		<?php 
			foreach ($rows as $key => $value) {
		?>
		<tr>
			<td><?=$value['u_id'];?></td>
			<td><?=$value['u_name'];?></td>
			<td><?=$value['u_pass'];?></td>
		</tr>
		<?php
	}
		?>
	</tbody>
</table>
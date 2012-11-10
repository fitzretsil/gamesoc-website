<table width="90%" cellspacing="0">
	<thead>
		<tr>
			<th>Pos.</th>
			<th>Name</th>
			<th>Pts.</th>
		</tr>
	</thead>
	<tbody>
		<?php
			$people = $this->requestAction('tournaments/standings/');
			foreach ( $people as $person ) {
		?>
		<tr>
			<td>&nbsp;</td>
			<td><?php echo $person['User']['username']; ?></td>
			<td><?php echo $person[0]['points']; ?></td>
		</tr>
		<?php } ?>
	</tbody>
</table>

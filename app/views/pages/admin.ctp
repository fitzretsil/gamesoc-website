<h2>Admin Control Panel</h2>

<table cellspacing="0" width="100%" class="menu">
	<tr>
		<td><?php echo $this->Html->image( 'http://lomond.andydiack.co.uk/fitzretsil/open_icon_library-standard/icons/png/128x128/actions/edit-find-user.png' ); ?></td>
		<td><?php echo $this->Html->image( 'http://lomond.andydiack.co.uk/fitzretsil/open_icon_library-standard/icons/png/128x128/actions/view-calendar-day.png' ); ?></td>
		<td><?php echo $this->Html->image( 'http://lomond.andydiack.co.uk/fitzretsil/open_icon_library-standard/icons/png/128x128/devices/input-gaming.png' ); ?></td>
	</tr>
	<tr>
		<td><?php echo $this->Html->link( 'Membership Management', array( 'controller' => 'users', 'admin' => true ) ); ?></td>
		<td>Event Management</td>
		<td>Tournament Management</td>
	</tr>
</table>

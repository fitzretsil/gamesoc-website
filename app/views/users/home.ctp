<div class='news' style='height: 12px;'>
	<h2>My Profile</h2>
</div>

<table width='600px'>
	<tr>
		<th>Username:</th>
		<td><?php echo $user['User']['username']; ?></td>
		<th>Name:</th>
		<td><?php echo $user['User']['first_name'] . ' ' . $user['User']['last_name']; ?></td>
	</tr>
	<tr>
                <th>Gamertag:</th>
                <td><?php echo $user['User']['gamertag']; ?></td>
                <th>E-Mail:</th>
                <td><?php echo $user['User']['email']; ?></td>
        </tr>
	<tr>
                <th>University:</th>
                <td><?php echo $user['User']['year'] == 0 ? "N/A" : $user['User']['university']; ?></td>
                <th>Matriculation Number:</th>
                <td><?php echo $user['User']['year'] == 0 ? "N/A" : $user['User']['matriculation_number']; ?></td>
        </tr>
	<tr>
                <th>Degree:</th>
                <td><?php echo $user['User']['year'] == 0 ? "N/A" : $user['User']['degree']; ?></td>
                <th>Year:</th>
                <td><?php echo $user['User']['year'] == 0 ? "N/A" : $user['User']['year']; ?></td>
        </tr>
</table>

<div class='news' style='height: 12px;'>
        <h2>My Hardware</h2>
</div>

<table width='600px' cellspacing='0'>
        <tr>
                <td></td>
                <td><strong>Name</strong></td>
                <td><strong>Processor Speed</strong></td>
                <td><strong>Memory</strong></td>
                <td><strong>Storage</strong></td>
		<td></td>
        </tr>
<?php $counter = 0; ?>
<?php foreach($user['Hardware'] as $item['Hardware']) { ?>
<?php
        switch($item['Hardware']['type']) {
                case 'computer' :
                        $image = '01';
                        break;
                case 'xbox' :
                        $image = '03';
                        break;
                case 'ps3' :
                        $image = '02';
                        break;
                case 'wii' :
                        $image = '04';
                        break;
                default :
                        $image = '01';
                        break;
        }
?>
        <tr <?php echo (($counter % 2) == 0 ? "style='background: #FFF;'" : ''); ?>>
                <td><img src='gs/<?php echo $image; ?>.png' width='20px' /></td>
                <td><?php echo $item['Hardware']['name']; ?></td>
                <td><?php echo $item['Hardware']['cpu']; ?> GHz</td>
                <td><?php echo $item['Hardware']['ram']; ?> GB</td>
                <td><?php echo $item['Hardware']['hdd']; ?> GB</td>
		<td><a href='hardware/edit/<?php echo $item['Hardware']['id']; ?>'>edit</a></td>
        </tr>
<?php
        $counter++;
}
?>
</table>

<p><a href='hardware/add/'>Add new hardware</a></p>

<?php if ($session->read('Auth.User.group_id')) { ?>

<div class='news' style='height: 12px;'>
        <h2>Committee Controls</h2>
</div>

<div id='committee-controls'>
	<strong>News</strong>
	<ul>
		<li><a href='news/add/'>Add Article</a></li>
		<li><a href='news/admin'>View Articles</a></li>
	</ul>
	<br />
</div>

<div id='committee-controls'>
	<strong>Events</strong>
	<ul>
		<li><a href='events/add/'>Add Event</a></li>
		<li><a href='events/admin/'>View Events</a></li>
		<li><a href='types/add/'>Add Event Type</a></li>
		<li><a href='types/index/'>View Event Types</a></li>
	</ul>
</div>

<div id='committee-controls'>
	<strong>Members</strong>
	<ul>
		<li><a href='users/add/'>Register Member</a></li>
		<li><a href='users/index'>View Members</a></li>
	</ul>
	<br />
</div>
<?php } ?>

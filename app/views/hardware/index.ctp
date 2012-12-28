<div class='news' style='height: 14px;'>
	<h2>GameSoc Owns</h2>
</div>

<p>Over the years the society has collected a range of hardware from the archaic to the modern and games for all the systems, currently the most 
popular of which are Teeworlds (PC), Super Smash Brothers Melee (wii) and Rockband (360) as well as a 24 port switch, 802.11 b/g router and several 
large power reels / strips.</p>

<div class='line'>
	<div class='hardware'>
		<img src='gs/03.png' alt='Xbox 360' />
		<div class='hardware-text'>
			<strong>Xbox 360</strong><br />
			3x3.2 GHz<br />
			512MB RAM<br />
			20GB HDD
		</div>
	</div>

	<div class='hardware'>
	        <img src='gs/01.png' alt='Trogdor' />
	        <div class='hardware-text'>
	                <strong>Trogdor</strong><br />
	                1x1.8 GHz<br />
	                512MB RAM<br />
	                40GB HDD
	        </div>
	</div>


	<div class='hardware'>
	        <img src='gs/04.png' alt='Wii' />
	        <div class='hardware-text'>
	                <strong>Wii</strong><br />
	                1x0.8 GHz<br />
	                88MB RAM<br />
	                0.5GB Storage
	        </div>
	</div>
	
	<div class='hardware'>
	        <img src='gs/01.png' alt='Leviathan' />
	        <div class='hardware-text'>
	                <strong>Leviathan</strong><br />
	                1x1.8GMHz<br />
	                512MB RAM<br />
	                40GB Storage
	        </div>
	</div>
</div>

<div class='news' style='height: 14px;'>
	<h2>The Members Own</h2>
</div>

<p>Below is a list of hardware owned by the society members covering PC's, Consoles and Handhelds.</p>

<table width='600px' cellspacing='0'>
	<tr>
		<td></td>
		<td><strong>Name</strong></td>
		<td><strong>Processor Speed</strong></td>
		<td><strong>Memory</strong></td>
		<td><strong>Storage</strong></td>
		<td><strong>Owner</strong></td>
	</tr>
<?php $counter = 0; ?>
<?php foreach($hardware as $item) { ?>
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
		<td><?php echo $item['User']['gamertag']; ?></td>
	</tr>
<?php 
	$counter++;
} 
?>
</table>

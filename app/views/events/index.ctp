<div class='news' style='height: 14px;'>
	<h2>Upcoming Events</h2>
</div>

<?php

foreach ($events as $event) {
	echo "<div class='event'>";
		echo "<img src='gs/{$event['Type']['image']}' alt='{$event['Event']['title']}' />";
		echo "<div class='event-text'>";
			echo "<strong>{$event['Event']['title']}</strong><br />";
			echo "<div class='event-info'>";
				$start = strtotime($event['Event']['start']);
				echo date('g:ia D jS M y', $start) . " @ ";
				echo $event['Event']['location'] . "<br /> " . ($event['Event']['price'] == 0 ? "Free" : "&pound;{$event['Event']['price']}") . " Entry";
			echo "</div>";
			echo "<p>{$event['Event']['description']}</p>";
		echo "</div>";
	echo "</div>";
}

?>

<div class='news' style='height: 14px;'>
	<h2>How to LAN (A Primer)</h2>
</div>

<p>If you haven't been to a LAN event before or haven't been in a while don't fear below we go over the things you will need to bring with you.</p>

<p><strong>1. Computer / Laptop / Consoles</strong>		
<br />
- Necessary to get the most out of the whole LAN experiance.</p>

<p><strong>2. Cat 5 Networking Cable</strong>
<br />
- It's very often forgotten but you will need a networking cable in order to join in the PC gaming side of the LAN.</p>

<p><strong>3. Headphones</strong>
<br />
- It is can be disadvantage for everyone to hear the sound effects from your game.</p>

<p><strong>4. Game Discs / ISO's / Patches</strong></p>

<p><strong>5. Matriculation Card</strong>
<br />
- Several of the University venues do not allow access without a valid matriculation card or without someone to sign you in as a guest.</p>

<p><strong>6. Money</strong>
<br />
- Although our LANs are free to attend the unions for some reason still require payment for food and drinks.</p>

<p><strong>7. Steam</strong>
<br />
- If you want to play Steam games you will need to update to the most recent version the night before the LAN then set steam to play offline as this 
will ensure that everyone has the same patch version.</p>

<p><strong>8. Have fun and talk to people</strong></p>

<p>If you have any suggestions or addendums for this section yell at either the president or webmaster.</p>

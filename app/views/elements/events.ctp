<?php
$events = $this->requestAction('events/element/sort:start/direction:asc/limit:3');
foreach ( $events as $event ) {
?>
<p>
	<?php echo $this->Html->image( $event['Type']['image'], array( 'alt' => $event['Type']['name'], 'style' => 'float: left;' ) ); ?><br />
	<?php echo "{$event['Event']['title']}"; ?><br />
<?php
echo gamesoc_date($event['Event']['start'])."<br />{$event['Event']['location']}<br />";
echo ($event['Event']['price'] == 0 ? "Free Entry" : "&pound;{$event['Event']['price']}");
echo "</p>";
} 

function gamesoc_date($date) {
	$today = date('Y-m-d');
	
	$date = strtotime($date);
	
	$date = date("jS M y g.iA", $date);
	
	return $date;
}

?>

<?php
/**
 *
 * PHP versions 4 and 5
 *
 * GameSoc : Edinburgh University Computer Gaming Society (http://gamesoc.org)
 * Copyright 2012 Edinburgh University Computer Gaming Society
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2012 Edinburgh University Computer Gaming Society
 * @link          http://gamesoc.org GameSoc
 * @package       cake
 * @subpackage    cake.app.view.layouts
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php __('GameSoc.org | Edinburgh University Computer Gaming Society | '); ?>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta( 'favicon.ico', '/favicon.ico', array('type' => 'icon') );

		echo $this->Html->css('gs.space');

		echo $scripts_for_layout;
	?>
	<script type="text/javascript">
		function onlogin() {
			alert("hello");
		}
	</script>
</head>
<body>
	<div id="fb-root"></div>
<script>
  window.fbAsyncInit = function() {
    // init the FB JS SDK
    FB.init({
      appId      : '236283639834605', // App ID from the App Dashboard
      channelUrl : '//www.gamesoc.org/channel.html', // Channel File for x-domain communication
      status     : true, // check the login status upon init?
      cookie     : true, // set sessions cookies to allow your server to access the session?
      xfbml      : true  // parse XFBML tags on this page?
    });

    // Additional initialization code such as adding Event Listeners goes here

  };

  // Load the SDK's source Asynchronously
  (function(d){
     var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement('script'); js.id = id; js.async = true;
     js.src = "//connect.facebook.net/en_US/all.js";
     ref.parentNode.insertBefore(js, ref);
   }(document));
</script>
	
	<div id="container">
		<div id="header">
			<div id="social">
                                <?php echo $this->Html->image('f_logo.png' ); ?>
                                <?php echo $this->Html->image('twitter-bird-dark-bgs.png'); ?>
                        </div>
		</div>
		<div id="menu">
			<?php echo $this->Html->link( 'Home', '/' ); ?>
			<?php echo $this->Html->link( 'Events', array( 'controller' => 'events' ) ); ?>
			<?php echo $this->Html->link( 'About', array( 'controller' => 'pages', 'action' => 'display', 'about' ) ); ?>
		</div>
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $content_for_layout; ?>

		</div>
		<div id="column">
			<h5>Upcoming Events</h5>
			<?php echo $this->element('events'); ?>
			
			<h5>Twitter</h5>
			
			<a class="twitter-timeline" href="https://twitter.com/Gamesoc" data-widget-id="261077724951617536">Tweets by @Gamesoc</a>
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

		</div>
		<div id="footer">
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt'=> __('CakePHP: the rapid development php framework', true), 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false)
				);
			?>
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>

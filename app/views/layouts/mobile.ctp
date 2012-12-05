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

		echo $this->Html->css('gs.mobile');

		echo $scripts_for_layout;
	?>
	<meta name="description" content="">
        <meta name="HandheldFriendly" content="True">
        <meta name="MobileOptimized" content="320">
        <meta name="viewport" content="width=device-width">
        <meta http-equiv="cleartype" content="on">
</head>
<body>
	<div id="header"><h1><?php echo $this->Html->link( 'GameSoc', array( '/' ) ); ?></h1></div>
	<div id="menu">
		<?php echo $this->Html->link( 'Events', array( 'controller' => 'events' ) ); ?>
		<?php echo $this->Html->link( 'About', array( 'controller' => 'pages', 'action' => 'display', 'about' ) ); ?>
	</div>
	<div id="content">

		<?php echo $this->Session->flash(); ?>

		<?php echo $content_for_layout; ?>

	</div>
</body>
</html>

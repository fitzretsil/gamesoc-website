<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>GameSoc.org | <?php echo $title_for_layout?></title>
		<base href='http://www.gamesoc.org/'>
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
		<?php echo $this->Html->css('style'); ?>
		<!--[if IE ]>
		<?php echo $this->Html->css('ie'); ?>
		<![endif]--> 
		<!-- Include external files and scripts here (See HTML helper for more info.) -->
		<script src='ckeditor/ckeditor.js'></script>
		<?php echo $scripts_for_layout; ?>
	</head>
	<body>

		<div id='container'>

			<div id='header'>
				<div id='logo'>
					<?php echo $this->Html->image('gamesoclogo1.png', array( 'alt' => 'GameSoc' ) ); ?>
				</div>
				<div id='logo2'></div>
				<div id='title'>
					<?php echo $this->Html->image('title.png', array( 'alt' => 'Edinburgh University Computer Gaming Society' ) ); ?>
					
				</div>
			</div>

			<div id='main-body'>
				<div id='top-right-corner'></div>			
				<div id='ie-fix'></div>	

				<!-- If you'd like some sort of menu to show up on all of your views, include it here -->
				<div id="menu">
					<div class="bar"></div>
					<div id="menu-links">
						<a href='news/index'>home</a>
						&nbsp; | &nbsp;
						<a href='events/'>events</a>
						&nbsp; | &nbsp;
						<a href='pages/about/'>about</a>
						&nbsp; | &nbsp;
						<a href='hardware/'>hardware</a>
						&nbsp; | &nbsp;
						<a href='pages/contact/'>contact</a>
						&nbsp; | &nbsp;
						<span class="user-links">
						<?php
						if ($session->check('Auth.User.id')) {
						?> 
							<a href='users/home/'>home</a>
							&nbsp; | &nbsp;
							<a href='users/logout'>logout</a>
						<?php } else { ?>
							<a href='users/login/'>login</a>
							&nbsp; | &nbsp;
							<a href='users/register/'>join</a>
						<?php } ?>
						</span>
					</div>
					<div class="bar"></div>
				</div>
				
				<?php 
					echo $this->Session->flash();
					echo $this->Session->flash('auth'); ?>
	
				<!-- Here's where I want my views to be displayed -->
				<div id='events'>
					<h3>Upcoming Events</h3>	
					<?php echo $this->element('events'); ?>
				</div>
				<div id='view'>
					<?php echo $content_for_layout ?>
				</div>
	
				<!-- Add a footer to each displayed page -->
				<div id="footer">
					<div class="bar"></div>
					<div id="footer-text">
						&copy; 2010 Edinburgh University Computer Gaming Socity<br />
						Site designed by Andy Diack &amp; Kenny Benton<br />
						Site developed by Andy Diack
					</div>
				</div>
				<div id='ie-fix2'></div>
			</div>
		</div>
	</body>
</html>

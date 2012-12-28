<div class="tournaments form">
<?php echo $this->Form->create('Tournament');?>
	<fieldset>
 		<legend><?php __('Add Tournament'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('game');
		echo $this->Form->input('time');
		echo $this->Form->input('spaces', array( 'label' => 'Number of Spaces (set to 0 for no limit)', 'default' => 0 ) );
		echo $this->Form->input('event_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Tournaments', true), array('action' => 'index'));?></li>
	</ul>
</div>

<div class="tournaments form">
<?php echo $this->Form->create('Tournament');?>
	<fieldset>
 		<legend><?php __('Edit Tournament'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('game');
		echo $this->Form->input('time');
		echo $this->Form->input('spaces');
		echo $this->Form->input('creator');
		echo $this->Form->input('modifier');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Tournament.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Tournament.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Tournaments', true), array('action' => 'index'));?></li>
	</ul>
</div>
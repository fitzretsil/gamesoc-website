<div class="hardwares form">
<?php echo $this->Form->create('Hardware');?>
	<fieldset>
 		<legend><?php __('Edit Hardware'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('type');
		echo $this->Form->input('name');
		echo $this->Form->input('cpu');
		echo $this->Form->input('ram');
		echo $this->Form->input('hdd');
		echo $this->Form->input('creation');
		echo $this->Form->input('modification');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Hardware.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Hardware.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Hardwares', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
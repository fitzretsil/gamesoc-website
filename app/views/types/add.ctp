<div class="types form">
<?php echo $this->Form->create('Type');?>
	<fieldset>
 		<legend><?php __('Add Type'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('image');
		echo $this->Form->input('creation');
		echo $this->Form->input('modification');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Types', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Events', true), array('controller' => 'events', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event', true), array('controller' => 'events', 'action' => 'add')); ?> </li>
	</ul>
</div>
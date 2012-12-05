<div class="events form">
<?php echo $this->Form->create('Event');?>
	<fieldset>
 		<legend><?php __('Admin Add Event'); ?></legend>
	<?php
		echo $this->Form->input('title');
		echo $this->Form->input('type_id');
		echo $this->Form->input('start');
		echo $this->Form->input('end');
		echo $this->Form->input('location');
		echo $this->Form->input('price');
		echo $this->Form->input('image');
		echo $this->Form->input('description');
		echo $this->Form->input('modifier');
		echo $this->Form->input('creator');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Events', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Types', true), array('controller' => 'types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Type', true), array('controller' => 'types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tournaments', true), array('controller' => 'tournaments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tournament', true), array('controller' => 'tournaments', 'action' => 'add')); ?> </li>
	</ul>
</div>
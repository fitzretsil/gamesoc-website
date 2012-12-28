<div class="news" style='height: 14px;'>
	<h2>Add Event</h2>
</div>

<div class='form'>

<?php echo $this->Form->create('Event');?>
	<?php
		echo $this->Form->input('title');
		echo $this->Form->input('type_id');
echo "</div>";
echo "<div class='form2'>";
		echo $this->Form->input('start');
		echo $this->Form->input('end');
echo "</div>";	
echo "<div class='form'>";
		echo $this->Form->input('location');
		echo $this->Form->input('price');
		echo $this->Form->input('description');
		echo $this->Form->input('modifier');
		echo $this->Form->input('creator');
echo "</div>";
	?>
<?php echo $this->Form->end(__('Submit', true));?>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Events', true), array('action' => 'admin'));?></li>
		<li><?php echo $this->Html->link(__('List Types', true), array('controller' => 'types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Type', true), array('controller' => 'types', 'action' => 'add')); ?> </li>
	</ul>
</div>

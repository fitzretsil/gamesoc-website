<div class="types view">
<h2><?php  __('Type');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $type['Type']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $type['Type']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Image'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $type['Type']['image']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Creation'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $type['Type']['creation']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modification'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $type['Type']['modification']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Type', true), array('action' => 'edit', $type['Type']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Type', true), array('action' => 'delete', $type['Type']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $type['Type']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Types', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Type', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Events', true), array('controller' => 'events', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event', true), array('controller' => 'events', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Events');?></h3>
	<?php if (!empty($type['Event'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Title'); ?></th>
		<th><?php __('Type Id'); ?></th>
		<th><?php __('Start'); ?></th>
		<th><?php __('End'); ?></th>
		<th><?php __('Location'); ?></th>
		<th><?php __('Price'); ?></th>
		<th><?php __('Image'); ?></th>
		<th><?php __('Modifier'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th><?php __('Creator'); ?></th>
		<th><?php __('Created'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($type['Event'] as $event):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $event['id'];?></td>
			<td><?php echo $event['title'];?></td>
			<td><?php echo $event['type_id'];?></td>
			<td><?php echo $event['start'];?></td>
			<td><?php echo $event['end'];?></td>
			<td><?php echo $event['location'];?></td>
			<td><?php echo $event['price'];?></td>
			<td><?php echo $event['image'];?></td>
			<td><?php echo $event['modifier'];?></td>
			<td><?php echo $event['modified'];?></td>
			<td><?php echo $event['creator'];?></td>
			<td><?php echo $event['created'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'events', 'action' => 'view', $event['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'events', 'action' => 'edit', $event['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'events', 'action' => 'delete', $event['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $event['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Event', true), array('controller' => 'events', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>

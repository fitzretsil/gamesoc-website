<div class="hardwares index">
	<h2><?php __('Hardwares');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('user_id');?></th>
			<th><?php echo $this->Paginator->sort('type');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('cpu');?></th>
			<th><?php echo $this->Paginator->sort('ram');?></th>
			<th><?php echo $this->Paginator->sort('hdd');?></th>
			<th><?php echo $this->Paginator->sort('creation');?></th>
			<th><?php echo $this->Paginator->sort('modification');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($hardwares as $hardware):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $hardware['Hardware']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($hardware['User']['id'], array('controller' => 'users', 'action' => 'view', $hardware['User']['id'])); ?>
		</td>
		<td><?php echo $hardware['Hardware']['type']; ?>&nbsp;</td>
		<td><?php echo $hardware['Hardware']['name']; ?>&nbsp;</td>
		<td><?php echo $hardware['Hardware']['cpu']; ?>&nbsp;</td>
		<td><?php echo $hardware['Hardware']['ram']; ?>&nbsp;</td>
		<td><?php echo $hardware['Hardware']['hdd']; ?>&nbsp;</td>
		<td><?php echo $hardware['Hardware']['creation']; ?>&nbsp;</td>
		<td><?php echo $hardware['Hardware']['modification']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $hardware['Hardware']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $hardware['Hardware']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $hardware['Hardware']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $hardware['Hardware']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Hardware', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
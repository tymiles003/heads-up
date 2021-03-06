<div class="attendances index">
	<h2><?php echo __('Attendances');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('attendance_id');?></th>
			<th><?php echo $this->Paginator->sort('student_id');?></th>
			<th><?php echo $this->Paginator->sort('attendance_date');?></th>
			<th><?php echo $this->Paginator->sort('attendancetype_id');?></th>
			<th><?php echo $this->Paginator->sort('section_id');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($attendances as $attendance): ?>
	<tr>
		<td><?php echo h($attendance['Attendance']['attendance_id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($attendance['Student']['student_id'], array('controller' => 'students', 'action' => 'view', $attendance['Student']['student_id'])); ?>
		</td>
		<td><?php echo h($attendance['Attendance']['attendance_date']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($attendance['Attendancetype']['attendancetype_id'], array('controller' => 'attendancetypes', 'action' => 'view', $attendance['Attendancetype']['attendancetype_id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($attendance['Section']['section_id'], array('controller' => 'sections', 'action' => 'view', $attendance['Section']['section_id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $attendance['Attendance']['attendance_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $attendance['Attendance']['attendance_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $attendance['Attendance']['attendance_id']), null, __('Are you sure you want to delete # %s?', $attendance['Attendance']['attendance_id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Attendance'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Attendancetypes'), array('controller' => 'attendancetypes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Attendancetype'), array('controller' => 'attendancetypes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sections'), array('controller' => 'sections', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Section'), array('controller' => 'sections', 'action' => 'add')); ?> </li>
	</ul>
</div>

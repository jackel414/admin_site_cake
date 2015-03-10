<h1 id="header_text">National Research Network Groups</h1>
<div id="org_list_table">
	<table>
		<tr>
			<th>Name</th>
		</tr>
		<?php if ($groups == null) { ?>
		<tr>
			<td>No groups to display</td>
		</tr>
		<?php } else {
			foreach ($groups as $group): ?>
		<tr>
			<td><?php echo $this->Html->link($group['Group']['name'], array('action' => 'view', $group['Group']['id'])); ?></td>
		</tr>
		<?php endforeach; ?>
		<?php unset($group); 
		} ?>
	</table>
</div>
<p>&nbsp;</p>

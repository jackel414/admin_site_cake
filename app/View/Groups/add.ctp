<h1>NRN Group - Add</h1>

<p>&nbsp;</p>

<div id="form_table">

<?php echo $this->Form->create('Group'); ?>
	<fieldset>
		<legend><?php echo __('Add Group'); ?></legend>
		<table>
		<tbody>
			<tr><td>
				<?php echo $this->Form->input('name', array('label' => 'Name: ')); ?>
			</td></tr>			
		</tbody>
		</table>
	<p><?php echo $this->Form->end('Add Group'); ?></p>
	</fieldset>
</div>

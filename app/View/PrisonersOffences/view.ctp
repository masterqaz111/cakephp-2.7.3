
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">
			
			<ul class="list-group">			
						<li class="list-group-item"><?php echo $this->Html->link(__('Edit Prisoners Offence'), array('action' => 'edit', $prisonersOffence['PrisonersOffence']['id']), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Form->postLink(__('Delete Prisoners Offence'), array('action' => 'delete', $prisonersOffence['PrisonersOffence']['id']), array('class' => ''), __('Are you sure you want to delete # %s?', $prisonersOffence['PrisonersOffence']['id'])); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Prisoners Offences'), array('action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Prisoners Offence'), array('action' => 'add'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Prisoners'), array('controller' => 'prisoners', 'action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Prisoner'), array('controller' => 'prisoners', 'action' => 'add'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Offences'), array('controller' => 'offences', 'action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Offence'), array('controller' => 'offences', 'action' => 'add'), array('class' => '')); ?> </li>
				
			</ul><!-- /.list-group -->
			
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .span3 -->
	
	<div id="page-content" class="col-sm-9">
		
		<div class="prisonersOffences view">

			<h2><?php  echo __('Prisoners Offence'); ?></h2>
			
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<tbody>
						<tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($prisonersOffence['PrisonersOffence']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Prisoner'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($prisonersOffence['Prisoner']['name'], array('controller' => 'prisoners', 'action' => 'view', $prisonersOffence['Prisoner']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Offence'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($prisonersOffence['Offence']['name'], array('controller' => 'offences', 'action' => 'view', $prisonersOffence['Offence']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->

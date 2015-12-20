
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">
		
                    <li class="dropdown">
                <a class="list-group-item" data-toggle="dropdown"><?= __("Users") ?><b class="caret"></b></a>
                <ul class="dropdown-menu">
                   <li class="list-group-item"><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index'), array('class' => '')); ?></li> 
				<li class="list-group-item"><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add'), array('class' => '')); ?></li> 
                </ul>    
            </li>  
                <li class="dropdown">
                 <a class="list-group-item" data-toggle="dropdown"><?= __("Prisoners") ?><b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li class="list-group-item"><?php echo $this->Html->link(__('New Prisoner'), array('action' => 'add'), array('class' => '')); ?></li>
                </ul>    
            </li>
            <li class="dropdown">
                 <a class="list-group-item" data-toggle="dropdown"><?= __("Categories") ?><b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li class="list-group-item"><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index'), array('class' => '')); ?></li> 
				<li class="list-group-item"><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add'), array('class' => '')); ?></li> 
                </ul>    
            </li>
            <li class="dropdown">
                 <a class="list-group-item" data-toggle="dropdown"><?= __("Comments") ?><b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li class="list-group-item"><?php echo $this->Html->link(__('List Comments'), array('controller' => 'comments', 'action' => 'index'), array('class' => '')); ?></li> 
				<li class="list-group-item"><?php echo $this->Html->link(__('New Comment'), array('controller' => 'comments', 'action' => 'add'), array('class' => '')); ?></li>
                </ul>    
            </li>
            <li class="dropdown">
                 <a class="list-group-item" data-toggle="dropdown"><?= __("Offences") ?><b class="caret"></b></a>
                <ul class="dropdown-menu">
                 <li class="list-group-item"><?php echo $this->Html->link(__('List Offences'), array('controller' => 'offences', 'action' => 'index'), array('class' => '')); ?></li> 
				<li class="list-group-item"><?php echo $this->Html->link(__('New Offence'), array('controller' => 'offences', 'action' => 'add'), array('class' => '')); ?></li>
                </ul>    
            </li>
			
			
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .col-sm-3 -->
	
	<div id="page-content" class="col-sm-9">

		<div class="prisoners index">
		
			<h2><?php echo __('Prisoners'); ?></h2>
			
			<div class="table-responsive">
				<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
					<thead>
						<tr>
							
							<th><?php echo $this->Paginator->sort('name'); ?></th>
							<th><?php echo $this->Paginator->sort('number'); ?></th>
							<th><?php echo $this->Paginator->sort('details'); ?></th>
							<th><?php echo $this->Paginator->sort('user_id'); ?></th>
							<th><?php echo $this->Paginator->sort('category_id'); ?></th>
                                                        <th><?php echo $this->Paginator->sort('offence_id'); ?></th>
							<th><?php echo $this->Paginator->sort('created'); ?></th>
							<th><?php echo $this->Paginator->sort('modified'); ?></th>
							<th class="actions"><?php echo __('Actions'); ?></th>
						</tr>
					</thead>
					<tbody>
<?php foreach ($prisoners as $prisoner): ?>
	<tr>
		
		<td><?php echo h($prisoner['Prisoner']['name']); ?>&nbsp;</td>
		<td><?php echo h($prisoner['Prisoner']['number']); ?>&nbsp;</td>
		<td><?php echo h($prisoner['Prisoner']['details']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($prisoner['User']['username'], array('controller' => 'users', 'action' => 'view', $prisoner['User']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($prisoner['Category']['title'], array('controller' => 'categories', 'action' => 'view', $prisoner['Category']['id'])); ?>
		</td>
                    <td>
                       <?php foreach ($prisoner['Offence'] as $offence) { 
                         
                            echo $this->Html->link($offence['name'], array('controller' => 'offences', 'action' => 'view', $offence['id'])) . " &nbsp;";
                            } 
                            ?>
                            &nbsp;
                </td>
		<td><?php echo h($prisoner['Prisoner']['created']); ?>&nbsp;</td>
		<td><?php echo h($prisoner['Prisoner']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $prisoner['Prisoner']['id']), array('class' => 'btn btn-default btn-xs')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $prisoner['Prisoner']['id']), array('class' => 'btn btn-default btn-xs')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $prisoner['Prisoner']['id']), array('class' => 'btn btn-default btn-xs'), __('Are you sure you want to delete # %s?', $prisoner['Prisoner']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
					</tbody>
				</table>
			</div><!-- /.table-responsive -->
			
			<p><small>
				<?php
					echo $this->Paginator->counter(array(
					'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
					));
				?>
			</small></p>

			<ul class="pagination">
				<?php
					echo $this->Paginator->prev('< ' . __('Previous'), array('tag' => 'li'), null, array('class' => 'disabled', 'tag' => 'li', 'disabledTag' => 'a'));
					echo $this->Paginator->numbers(array('separator' => '', 'currentTag' => 'a', 'tag' => 'li', 'currentClass' => 'disabled'));
					echo $this->Paginator->next(__('Next') . ' >', array('tag' => 'li'), null, array('class' => 'disabled', 'tag' => 'li', 'disabledTag' => 'a'));
				?>
			</ul><!-- /.pagination -->
			
		</div><!-- /.index -->
	
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->
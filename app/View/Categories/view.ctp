
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">
			
                    <li class="dropdown">
                 <a class="list-group-item" data-toggle="dropdown"><?= __("Prisoners") ?><b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li class="list-group-item"><?php echo $this->Html->link(__('List Prisoners'), array('controller' => 'prisoners', 'action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Prisoner'), array('controller' => 'prisoners', 'action' => 'add'), array('class' => '')); ?> </li>
                
                </ul>    
            </li>
            
            <li class="dropdown">
                 <a class="list-group-item" data-toggle="dropdown"><?= __("Categories") ?><b class="caret"></b></a>
                <ul class="dropdown-menu">
                 <li class="list-group-item"><?php echo $this->Html->link(__('Edit Category'), array('action' => 'edit', $category['Category']['id']), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Form->postLink(__('Delete Category'), array('action' => 'delete', $category['Category']['id']), array('class' => ''), __('Are you sure you want to delete # %s?', $category['Category']['id'])); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Categories'), array('action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Category'), array('action' => 'add'), array('class' => '')); ?> </li>
                </ul>    
            </li>
			
			
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .span3 -->
	
	<div id="page-content" class="col-sm-9">
		
		<div class="categories view">

			<h2><?php  echo __('Category'); ?></h2>
			
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<tbody>
						<tr>		<td><strong><?php echo __('Title'); ?></strong></td>
		<td>
			<?php echo h($category['Category']['title']); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

					
			<div class="related">

				<h3><?php echo __('Related Prisoners'); ?></h3>
				
				<?php if (!empty($category['Prisoner'])): ?>
					
					<div class="table-responsive">
						<table class="table table-striped table-bordered">
							<thead>
								<tr>
											<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Number'); ?></th>
		<th><?php echo __('Details'); ?></th>
		<th><?php echo __('User'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
									<th class="actions"><?php echo __('Actions'); ?></th>
								</tr>
							</thead>
							<tbody>
									<?php
										$i = 0;
										foreach ($category['Prisoner'] as $prisoner): ?>
		<tr>
			
			<td>
			<?php echo $this->Html->link($prisoner['name'], array('controller' => 'prisoners', 'action' => 'view', $prisoner['category_id']), array('class' => '')); ?>
			&nbsp;
                        </td>
			<td><?php echo $prisoner['number']; ?></td>
			<td><?php echo $prisoner['details']; ?></td>
			<td>
			<?php echo $this->Html->link($prisoner['User']['username'], array('controller' => 'users', 'action' => 'view', $prisoner['user_id']), array('class' => '')); ?>
			&nbsp;
                        </td>
			
			<td><?php echo $prisoner['created']; ?></td>
			<td><?php echo $prisoner['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'prisoners', 'action' => 'view', $prisoner['id']), array('class' => 'btn btn-default btn-xs')); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'prisoners', 'action' => 'edit', $prisoner['id']), array('class' => 'btn btn-default btn-xs')); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'prisoners', 'action' => 'delete', $prisoner['id']), array('class' => 'btn btn-default btn-xs'), __('Are you sure you want to delete # %s?', $prisoner['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
							</tbody>
						</table><!-- /.table table-striped table-bordered -->
					</div><!-- /.table-responsive -->
					
				<?php endif; ?>

				
				<div class="actions">
					<?php echo $this->Html->link('<i class="icon-plus icon-white"></i> '.__('New Prisoner'), array('controller' => 'prisoners', 'action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>				</div><!-- /.actions -->
				
			</div><!-- /.related -->

			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->

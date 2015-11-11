
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">
			
                    <li class="dropdown">
                <a class="list-group-item" data-toggle="dropdown"><?= __("Users") ?><b class="caret"></b></a>
                <ul class="dropdown-menu">
                   <li class="list-group-item"><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add'), array('class' => '')); ?> </li>
               </ul>    
            </li>  
                <li class="dropdown">
                 <a class="list-group-item" data-toggle="dropdown"><?= __("Prisoners") ?><b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li class="list-group-item"><?php echo $this->Html->link(__('Edit Prisoner'), array('action' => 'edit', $prisoner['Prisoner']['id']), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Form->postLink(__('Delete Prisoner'), array('action' => 'delete', $prisoner['Prisoner']['id']), array('class' => ''), __('Are you sure you want to delete # %s?', $prisoner['Prisoner']['id'])); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Prisoners'), array('action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Prisoner'), array('action' => 'add'), array('class' => '')); ?> </li>
                </ul>    
            </li>
            <li class="dropdown">
                 <a class="list-group-item" data-toggle="dropdown"><?= __("Categories") ?><b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li class="list-group-item"><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add'), array('class' => '')); ?> </li>
                </ul>    
            </li>
            <li class="dropdown">
                 <a class="list-group-item" data-toggle="dropdown"><?= __("Comments") ?><b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li class="list-group-item"><?php echo $this->Html->link(__('List Comments'), array('controller' => 'comments', 'action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Comment'), array('controller' => 'comments', 'action' => 'add'), array('class' => '')); ?> </li>
                </ul>    
            </li>
            <li class="dropdown">
                 <a class="list-group-item" data-toggle="dropdown"><?= __("Offences") ?><b class="caret"></b></a>
                <ul class="dropdown-menu">
                 <li class="list-group-item"><?php echo $this->Html->link(__('List Offences'), array('controller' => 'offences', 'action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Offence'), array('controller' => 'offences', 'action' => 'add'), array('class' => '')); ?> </li>
                </ul>    
            </li>
			
			
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .span3 -->
	
	<div id="page-content" class="col-sm-9">
		
		<div class="prisoners view">

			<h2><?php  echo __('Prisoner'); ?></h2>
			
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<tbody>
						<tr>		<td><strong><?php echo __('Name'); ?></strong></td>
		<td>
			<?php echo h($prisoner['Prisoner']['name']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Number'); ?></strong></td>
		<td>
			<?php echo h($prisoner['Prisoner']['number']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Details'); ?></strong></td>
		<td>
			<?php echo h($prisoner['Prisoner']['details']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('User'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($prisoner['User']['username'], array('controller' => 'users', 'action' => 'view', $prisoner['User']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Category'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($prisoner['Category']['title'], array('controller' => 'categories', 'action' => 'view', $prisoner['Category']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Offence'); ?></strong></td>
		<td>
                       <?php foreach ($prisoner['Offence'] as $offence) { 
                         
                            echo $this->Html->link($offence['name'], array('controller' => 'offences', 'action' => 'view', $offence['id'])) . " &nbsp;";
                            } 
                            ?>
                            &nbsp;
                </td>
</tr><tr>		<td><strong><?php echo __('Picture'); ?></strong></td>
		<td>
			<?php if ($prisoner['Prisoner']['filename']) echo $this->Html->image($prisoner['Prisoner']['filename'], array('escape' => false,'height' => '250px'));?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Sex'); ?></strong></td>
		<td>
                   <?php echo h($sex['Sex']['name']); ?>
                            &nbsp;
			
		</td>
</tr><tr>		<td><strong><?php echo __('Ethny'); ?></strong></td>
		<td>
			<?php echo h($prisoner['Ethny']['name']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Created'); ?></strong></td>
		<td>
			<?php echo h($prisoner['Prisoner']['created']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Modified'); ?></strong></td>
		<td>
			<?php echo h($prisoner['Prisoner']['modified']); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

					
			<div class="related">

				<h3><?php echo __('Related Comments'); ?></h3>
				
				<?php if (!empty($prisoner['Comment'])): ?>
					
					<div class="table-responsive">
						<table class="table table-striped table-bordered">
							<thead>
								<tr>
											<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Text'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
									<th class="actions"><?php echo __('Actions'); ?></th>
								</tr>
							</thead>
							<tbody>
									<?php
										$i = 0;
										foreach ($prisoner['Comment'] as $comment): ?>
		<tr>
			
			
			<td><?php echo $comment['name']; ?></td>
			<td><?php echo $comment['email']; ?></td>
			<td><?php echo $comment['text']; ?></td>
			<td><?php echo $comment['created']; ?></td>
			<td><?php echo $comment['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'comments', 'action' => 'view', $comment['id']), array('class' => 'btn btn-default btn-xs')); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'comments', 'action' => 'edit', $comment['id']), array('class' => 'btn btn-default btn-xs')); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'comments', 'action' => 'delete', $comment['id']), array('class' => 'btn btn-default btn-xs'), __('Are you sure you want to delete # %s?', $comment['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
							</tbody>
						</table><!-- /.table table-striped table-bordered -->
					</div><!-- /.table-responsive -->
					
				<?php endif; ?>

				
				<div class="actions">
					<?php echo $this->Html->link('<i class="icon-plus icon-white"></i> '.__('New Comment'), array('controller' => 'comments', 'action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>				</div><!-- /.actions -->
				
			</div><!-- /.related -->

					
			<div class="related">

				<h3><?php echo __('Related Offences'); ?></h3>
				
				<?php if (!empty($prisoner['Offence'])): ?>
					
					<div class="table-responsive">
						<table class="table table-striped table-bordered">
							<thead>
								<tr>
											<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Description'); ?></th>
									<th class="actions"><?php echo __('Actions'); ?></th>
								</tr>
							</thead>
							<tbody>
									<?php
										$i = 0;
										foreach ($prisoner['Offence'] as $offence): ?>
		<tr>
			
			<td><?php echo $offence['name']; ?></td>
			<td><?php echo $offence['description']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'offences', 'action' => 'view', $offence['id']), array('class' => 'btn btn-default btn-xs')); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'offences', 'action' => 'edit', $offence['id']), array('class' => 'btn btn-default btn-xs')); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'offences', 'action' => 'delete', $offence['id']), array('class' => 'btn btn-default btn-xs'), __('Are you sure you want to delete # %s?', $offence['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
							</tbody>
						</table><!-- /.table table-striped table-bordered -->
					</div><!-- /.table-responsive -->
					
				<?php endif; ?>

				
				<div class="actions">
					<?php echo $this->Html->link('<i class="icon-plus icon-white"></i> '.__('New Offence'), array('controller' => 'offences', 'action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>				</div><!-- /.actions -->
				
			</div><!-- /.related -->

			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->

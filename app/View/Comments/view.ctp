
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
                 <a class="list-group-item" data-toggle="dropdown"><?= __("Comments") ?><b class="caret"></b></a>
                <ul class="dropdown-menu">
                 <li class="list-group-item"><?php echo $this->Html->link(__('Edit Comment'), array('action' => 'edit', $comment['Comment']['id']), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Form->postLink(__('Delete Comment'), array('action' => 'delete', $comment['Comment']['id']), array('class' => ''), __('Are you sure you want to delete # %s?', $comment['Comment']['id'])); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Comments'), array('action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Comment'), array('action' => 'add'), array('class' => '')); ?> </li>
                </ul>    
            </li>
			
			
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .span3 -->
	
	<div id="page-content" class="col-sm-9">
		
		<div class="comments view">

			<h2><?php  echo __('Comment'); ?></h2>
			
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<tbody>
						<tr>		<td><strong><?php echo __('Prisoner'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($comment['Prisoner']['name'], array('controller' => 'prisoners', 'action' => 'view', $comment['Prisoner']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Name'); ?></strong></td>
		<td>
			<?php echo h($comment['Comment']['name']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Email'); ?></strong></td>
		<td>
			<?php echo h($comment['Comment']['email']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Text'); ?></strong></td>
		<td>
			<?php echo h($comment['Comment']['text']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Created'); ?></strong></td>
		<td>
			<?php echo h($comment['Comment']['created']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Modified'); ?></strong></td>
		<td>
			<?php echo h($comment['Comment']['modified']); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->

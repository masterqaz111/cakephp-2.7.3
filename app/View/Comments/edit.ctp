
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
                 <li class="list-group-item"><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Comment.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Comment.id'))); ?></li>
				<li class="list-group-item"><?php echo $this->Html->link(__('List Comments'), array('action' => 'index')); ?></li>
                 </ul>    
            </li>
			
		
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .col-sm-3 -->
	
	<div id="page-content" class="col-sm-9">

		<h2><?php echo __('Edit Comment'); ?></h2>

		<div class="comments form">
		
			<?php echo $this->Form->create('Comment', array('role' => 'form')); ?>

				<fieldset>

					
					<div class="form-group">
						<?php echo $this->Form->input('prisoner_id', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('name', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					
					<div class="form-group">
						<?php echo $this->Form->input('text', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->

					<?php echo $this->Form->submit('Submit', array('class' => 'btn btn-large btn-primary')); ?>

				</fieldset>

			<?php echo $this->Form->end(); ?>

		</div><!-- /.form -->
			
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->
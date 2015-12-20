
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">
		
                    <li class="dropdown">
                <a class="list-group-item" data-toggle="dropdown"><?= __("Users") ?><b class="caret"></b></a>
                <ul class="dropdown-menu">
                   <li class="list-group-item"><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
               </ul>    
            </li>  
                <li class="dropdown">
                 <a class="list-group-item" data-toggle="dropdown"><?= __("Prisoners") ?><b class="caret"></b></a>
                <ul class="dropdown-menu">
                   <li class="list-group-item"><?php echo $this->Html->link(__('List Prisoners'), array('controller' => 'prisoners', 'action' => 'index')); ?> </li>
				<li class="list-group-item"><?php echo $this->Html->link(__('New Prisoner'), array('controller' => 'prisoners', 'action' => 'add')); ?> </li>
                </ul>    
            </li>
			
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .col-sm-3 -->
	
	<div id="page-content" class="col-sm-9">

		<h2><?php echo __('Add User'); ?></h2>

		<div class="users form">
		
			<?php echo $this->Form->create('User'); ?>

				<fieldset>

					<div class="form-group">
						<?php echo $this->Form->input('username', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('password', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('role', array('class' => 'form-control','options' => array('admin' => 'Admin', 'super-users' => 'Super-users', 'membre' => 'Membre'))); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('email', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->

					<?php echo $this->Form->submit('Submit', array('class' => 'btn btn-large btn-primary')); ?>

				</fieldset>

			<?php echo $this->Form->end(); ?>

		</div><!-- /.form -->
			
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->
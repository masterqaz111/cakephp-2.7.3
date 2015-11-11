
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
                    <li class="list-group-item"><?php echo $this->Html->link(__('List Prisoners'), array('action' => 'index')); ?></li>
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

        <h2><?php echo __('Add Prisoner'); ?></h2>

        <div class="prisoners form">

            <?php echo $this->Form->create('Prisoner', array('role' => 'form', 'type' => 'file')); ?>

            <fieldset>

                <div class="form-group">
                    <?php echo $this->Form->input('name', array('class' => 'form-control', 'id' => 'autocomplete'));
                    ?>
                </div><!-- .form-group -->
                <div class="form-group">
                    <?php echo $this->Form->input('number', array('class' => 'form-control')); ?>
                </div><!-- .form-group -->
                <div class="form-group">
                    <?php echo $this->Form->input('details', array('class' => 'form-control')); ?>
                </div><!-- .form-group -->

                <div class="form-group">
                    <?php echo $this->Form->input('category_id', array('class' => 'form-control')); ?>
                </div><!-- .form-group -->
                <div class="form-group">
                    <?php echo $this->Form->input('Offence', array('multiple' => 'checkbox')); ?>
                </div><!-- .form-group -->

                <div class="form-group">
                    <?php echo $this->Form->input('filename', array('type' => 'file')); ?>
                </div><!-- .form-group -->

                <div class="form-group">
                    <?php echo $this->Form->input('sex_id', array('class' => 'form-control')); ?>
                </div><!-- .form-group -->
                <div class="form-group">
                    <?php echo $this->Form->input('ethny_id', array('class' => 'form-control')); ?>
                </div><!-- .form-group -->

                <?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-large btn-primary')); ?>

            </fieldset>

            <?php echo $this->Form->end(); ?>

        </div><!-- /.form -->

    </div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->

<?php $this->Html->script('View/Prisoners/add', array('inline' => false)); ?>
<?php
$this->Js->get('#PrisonerSexId')->event('change', $this->Js->request(array(
            'controller' => 'ethnies',
            'action' => 'getByCategory'
                ), array(
            'update' => '#PrisonerEthnyId',
            'async' => true,
            'method' => 'post',
            'dataExpression' => true,
            'data' => $this->Js->serializeForm(array(
                'isForm' => true,
                'inline' => true
            ))
        ))
);
?>
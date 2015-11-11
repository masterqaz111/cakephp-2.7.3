<nav class="navbar navbar-default" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button><!-- /.navbar-toggle -->
        <?php
        echo $this->Html->Link(__("Home"), array(
            'controller' => 'prisoners',
            'action' => 'index'), array('class' => 'navbar-brand'));
        ?>
    </div><!-- /.navbar-header -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav">
            <li class="active">
                <?php
                if ($this->Session->check('Auth.User')) {
                    echo $this->Html->link(__("Hello ") . ("  ") . $this->Session->read('Auth.User.username'), array('controller' => 'users', 'action' => 'view', $this->Session->read('Auth.User.id')));
                    echo "</li><li>";
                    if ($this->Session->read('Auth.User.role') == "admin") {
                        echo $this->Html->link(__("add user"), array(
                            'controller' => 'users',
                            'action' => 'add'));
                        echo "</li><li>";
                    }
                    echo $this->Html->link(__("Logout"), array(
                        'controller' => 'users',
                        'action' => 'logout'));
                } else {
                    echo $this->Html->link(__("Login"), array(
                        'controller' => 'users',
                        'action' => 'login')
                    );
                    echo "</li><li>";
                    echo $this->Html->link(__("Register "), array('controller' => 'users', 'action' => 'register'));
                }
                ?>
            </li>
            <li><?php
                echo $this->Html->link(__("About "), array('controller' => 'pages', 'action' => 'display', 'about'));
                ?></li>

            <li>
                <?php
                
                    if ($this->Session->read('Auth.User.active') === False) {
                       echo $this->Html->link(__('Resend mail'), array('controller' => 'users', 'action' => 'send_mail', $this->Session->read('Auth.User.email'), $this->Session->read('Auth.User.username'), $this->Session->read('Auth.User.id')));
                    }
                ?></li>
            </li>


            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?= __("Languages") ?><b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <?php
                    echo $this->I18n->flagSwitcher(array(
                        'class' => 'languages',
                        'id' => 'language-switcher'
                    ));
                    ?>
                </ul>
            </li>
        </ul><!-- /.nav navbar-nav -->
    </div><!-- /.navbar-collapse -->
</nav><!-- /.navbar navbar-default -->
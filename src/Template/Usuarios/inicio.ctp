<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Usuarios'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Permisos'), ['controller' => 'Permisos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Permiso'), ['controller' => 'Permisos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Roles'), ['controller' => 'Roles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Role'), ['controller' => 'Roles', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="usuarios form large-9 medium-8 columns content">
    <?= $this->Form->create($usuario) ?>
    <fieldset>
        <legend><?= __('Registro') ?></legend>
        <?php
            //echo $this->Form->input('tipo_documento');
           /*echo $this->Form->input('tipo_documento', array(
                                    'type' => 'select',
                                    'options' => $TipoDocs,                           
                                    'empty' => false
                                    ));*/
            
            echo $this->Form->input('primer_nombre');
            echo $this->Form->input('segundo_nombre');
            echo $this->Form->input('primer_apellido');
            echo $this->Form->input('segundo_apellido');
            echo $this->Form->input('genero', array(
                                    'type' => 'select',
                                    'options' => array('M','F'),                           
                                    'empty' => false
                                    ));

            
            echo $this->Form->input('email');
            echo $this->Form->input('telefono');
            echo $this->Form->input('id_ciudad',array('label' => 'Ciudad'));
            
            echo $this->Form->hidden('tipo_documento', ['value'=>0]);
            echo $this->Form->hidden('usuario');
            echo $this->Form->hidden('pass');
           
            
        ?>
    </fieldset>
    <?= $this->Form->button(__('Registrar')) ?>
    <?= $this->Form->end() ?>
</div>

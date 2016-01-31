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
        <legend><?= __('Add Usuario') ?></legend>
        <?php
            //echo $this->Form->input('tipo_documento');
           echo $this->Form->input('tipo_documento', array(
                                    'type' => 'select',
                                    'options' => $TipoDocs,                           
                                    'empty' => false
                                    ));
            echo $this->Form->input('numero_documento');
            echo $this->Form->input('primer_nombre');
            echo $this->Form->input('segundo_nombre');
            echo $this->Form->input('primer_apellido');
            echo $this->Form->input('segundo_apellido');
            echo $this->Form->input('genero');
            echo $this->Form->input('usuario');
            echo $this->Form->input('pass');
            echo $this->Form->input('email');
            echo $this->Form->input('telefono');
            echo $this->Form->input('id_ciudad');
            echo $this->Form->input('direccion');
            echo $this->Form->input('fecha_nacimiento');
            echo $this->Form->input('foto');
            echo $this->Form->input('estado');
            echo $this->Form->input('fecha_inicio');
            echo $this->Form->input('codigo');
            echo $this->Form->input('create_at');
            echo $this->Form->input('update_at');
            echo $this->Form->input('permisos._ids', ['options' => $permisos]);
            echo $this->Form->input('roles._ids', ['options' => $roles]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

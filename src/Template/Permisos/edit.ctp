<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $permiso->id_permiso],
                ['confirm' => __('Are you sure you want to delete # {0}?', $permiso->id_permiso)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Permisos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Roles'), ['controller' => 'Roles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Role'), ['controller' => 'Roles', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="permisos form large-9 medium-8 columns content">
    <?= $this->Form->create($permiso) ?>
    <fieldset>
        <legend><?= __('Edit Permiso') ?></legend>
        <?php
            echo $this->Form->input('permiso');
            echo $this->Form->input('key');
            echo $this->Form->input('create_at');
            echo $this->Form->input('update_at');
            echo $this->Form->input('roles._ids', ['options' => $roles]);
            echo $this->Form->input('usuarios._ids', ['options' => $usuarios]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

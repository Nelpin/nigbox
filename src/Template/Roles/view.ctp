<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Role'), ['action' => 'edit', $role->id_role]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Role'), ['action' => 'delete', $role->id_role], ['confirm' => __('Are you sure you want to delete # {0}?', $role->id_role)]) ?> </li>
        <li><?= $this->Html->link(__('List Roles'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Role'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Permisos'), ['controller' => 'Permisos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Permiso'), ['controller' => 'Permisos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="roles view large-9 medium-8 columns content">
    <h3><?= h($role->id_role) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Role') ?></th>
            <td><?= h($role->role) ?></td>
        </tr>
        <tr>
            <th><?= __('Id Role') ?></th>
            <td><?= $this->Number->format($role->id_role) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Permisos') ?></h4>
        <?php if (!empty($role->permisos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id Permiso') ?></th>
                <th><?= __('Permiso') ?></th>
                <th><?= __('Key') ?></th>
                <th><?= __('Create At') ?></th>
                <th><?= __('Update At') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($role->permisos as $permisos): ?>
            <tr>
                <td><?= h($permisos->id_permiso) ?></td>
                <td><?= h($permisos->permiso) ?></td>
                <td><?= h($permisos->key) ?></td>
                <td><?= h($permisos->create_at) ?></td>
                <td><?= h($permisos->update_at) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Permisos', 'action' => 'view', $permisos->id_permiso]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'Permisos', 'action' => 'edit', $permisos->id_permiso]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Permisos', 'action' => 'delete', $permisos->id_permiso], ['confirm' => __('Are you sure you want to delete # {0}?', $permisos->id_permiso)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Usuarios') ?></h4>
        <?php if (!empty($role->usuarios)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Tipo Documento') ?></th>
                <th><?= __('Numero Documento') ?></th>
                <th><?= __('Primer Nombre') ?></th>
                <th><?= __('Segundo Nombre') ?></th>
                <th><?= __('Primer Apellido') ?></th>
                <th><?= __('Segundo Apellido') ?></th>
                <th><?= __('Genero') ?></th>
                <th><?= __('Usuario') ?></th>
                <th><?= __('Pass') ?></th>
                <th><?= __('Email') ?></th>
                <th><?= __('Telefono') ?></th>
                <th><?= __('Id Ciudad') ?></th>
                <th><?= __('Direccion') ?></th>
                <th><?= __('Fecha Nacimiento') ?></th>
                <th><?= __('Foto') ?></th>
                <th><?= __('Estado') ?></th>
                <th><?= __('Fecha Inicio') ?></th>
                <th><?= __('Codigo') ?></th>
                <th><?= __('Create At') ?></th>
                <th><?= __('Update At') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($role->usuarios as $usuarios): ?>
            <tr>
                <td><?= h($usuarios->id) ?></td>
                <td><?= h($usuarios->tipo_documento) ?></td>
                <td><?= h($usuarios->numero_documento) ?></td>
                <td><?= h($usuarios->primer_nombre) ?></td>
                <td><?= h($usuarios->segundo_nombre) ?></td>
                <td><?= h($usuarios->primer_apellido) ?></td>
                <td><?= h($usuarios->segundo_apellido) ?></td>
                <td><?= h($usuarios->genero) ?></td>
                <td><?= h($usuarios->usuario) ?></td>
                <td><?= h($usuarios->pass) ?></td>
                <td><?= h($usuarios->email) ?></td>
                <td><?= h($usuarios->telefono) ?></td>
                <td><?= h($usuarios->id_ciudad) ?></td>
                <td><?= h($usuarios->direccion) ?></td>
                <td><?= h($usuarios->fecha_nacimiento) ?></td>
                <td><?= h($usuarios->foto) ?></td>
                <td><?= h($usuarios->estado) ?></td>
                <td><?= h($usuarios->fecha_inicio) ?></td>
                <td><?= h($usuarios->codigo) ?></td>
                <td><?= h($usuarios->create_at) ?></td>
                <td><?= h($usuarios->update_at) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Usuarios', 'action' => 'view', $usuarios->id]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'Usuarios', 'action' => 'edit', $usuarios->id]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Usuarios', 'action' => 'delete', $usuarios->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usuarios->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
</div>

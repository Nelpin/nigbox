<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Permiso'), ['action' => 'edit', $permiso->id_permiso]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Permiso'), ['action' => 'delete', $permiso->id_permiso], ['confirm' => __('Are you sure you want to delete # {0}?', $permiso->id_permiso)]) ?> </li>
        <li><?= $this->Html->link(__('List Permisos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Permiso'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Roles'), ['controller' => 'Roles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Role'), ['controller' => 'Roles', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="permisos view large-9 medium-8 columns content">
    <h3><?= h($permiso->id_permiso) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Permiso') ?></th>
            <td><?= h($permiso->permiso) ?></td>
        </tr>
        <tr>
            <th><?= __('Key') ?></th>
            <td><?= h($permiso->key) ?></td>
        </tr>
        <tr>
            <th><?= __('Id Permiso') ?></th>
            <td><?= $this->Number->format($permiso->id_permiso) ?></td>
        </tr>
        <tr>
            <th><?= __('Create At') ?></th>
            <td><?= h($permiso->create_at) ?></td>
        </tr>
        <tr>
            <th><?= __('Update At') ?></th>
            <td><?= h($permiso->update_at) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Roles') ?></h4>
        <?php if (!empty($permiso->roles)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id Role') ?></th>
                <th><?= __('Role') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($permiso->roles as $roles): ?>
            <tr>
                <td><?= h($roles->id_role) ?></td>
                <td><?= h($roles->role) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Roles', 'action' => 'view', $roles->id_role]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'Roles', 'action' => 'edit', $roles->id_role]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Roles', 'action' => 'delete', $roles->id_role], ['confirm' => __('Are you sure you want to delete # {0}?', $roles->id_role)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Usuarios') ?></h4>
        <?php if (!empty($permiso->usuarios)): ?>
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
            <?php foreach ($permiso->usuarios as $usuarios): ?>
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

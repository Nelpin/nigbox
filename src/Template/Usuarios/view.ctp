<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Usuario'), ['action' => 'edit', $usuario->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Usuario'), ['action' => 'delete', $usuario->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usuario->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Usuarios'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Usuario'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Permisos'), ['controller' => 'Permisos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Permiso'), ['controller' => 'Permisos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Roles'), ['controller' => 'Roles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Role'), ['controller' => 'Roles', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="usuarios view large-9 medium-8 columns content">
    <h3><?= h($usuario->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Numero Documento') ?></th>
            <td><?= h($usuario->numero_documento) ?></td>
        </tr>
        <tr>
            <th><?= __('Primer Nombre') ?></th>
            <td><?= h($usuario->primer_nombre) ?></td>
        </tr>
        <tr>
            <th><?= __('Segundo Nombre') ?></th>
            <td><?= h($usuario->segundo_nombre) ?></td>
        </tr>
        <tr>
            <th><?= __('Primer Apellido') ?></th>
            <td><?= h($usuario->primer_apellido) ?></td>
        </tr>
        <tr>
            <th><?= __('Segundo Apellido') ?></th>
            <td><?= h($usuario->segundo_apellido) ?></td>
        </tr>
        <tr>
            <th><?= __('Usuario') ?></th>
            <td><?= h($usuario->usuario) ?></td>
        </tr>
        <tr>
            <th><?= __('Pass') ?></th>
            <td><?= h($usuario->pass) ?></td>
        </tr>
        <tr>
            <th><?= __('Email') ?></th>
            <td><?= h($usuario->email) ?></td>
        </tr>
        <tr>
            <th><?= __('Telefono') ?></th>
            <td><?= h($usuario->telefono) ?></td>
        </tr>
        <tr>
            <th><?= __('Direccion') ?></th>
            <td><?= h($usuario->direccion) ?></td>
        </tr>
        <tr>
            <th><?= __('Foto') ?></th>
            <td><?= h($usuario->foto) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($usuario->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Tipo Documento') ?></th>
            <td><?= $this->Number->format($usuario->tipo_documento) ?></td>
        </tr>
        <tr>
            <th><?= __('Id Ciudad') ?></th>
            <td><?= $this->Number->format($usuario->id_ciudad) ?></td>
        </tr>
        <tr>
            <th><?= __('Estado') ?></th>
            <td><?= $this->Number->format($usuario->estado) ?></td>
        </tr>
        <tr>
            <th><?= __('Codigo') ?></th>
            <td><?= $this->Number->format($usuario->codigo) ?></td>
        </tr>
        <tr>
            <th><?= __('Fecha Nacimiento') ?></th>
            <td><?= h($usuario->fecha_nacimiento) ?></td>
        </tr>
        <tr>
            <th><?= __('Fecha Inicio') ?></th>
            <td><?= h($usuario->fecha_inicio) ?></td>
        </tr>
        <tr>
            <th><?= __('Create At') ?></th>
            <td><?= h($usuario->create_at) ?></td>
        </tr>
        <tr>
            <th><?= __('Update At') ?></th>
            <td><?= h($usuario->update_at) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Genero') ?></h4>
        <?= $this->Text->autoParagraph(h($usuario->genero)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Permisos') ?></h4>
        <?php if (!empty($usuario->permisos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id Permiso') ?></th>
                <th><?= __('Permiso') ?></th>
                <th><?= __('Key') ?></th>
                <th><?= __('Create At') ?></th>
                <th><?= __('Update At') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($usuario->permisos as $permisos): ?>
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
        <h4><?= __('Related Roles') ?></h4>
        <?php if (!empty($usuario->roles)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id Role') ?></th>
                <th><?= __('Role') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($usuario->roles as $roles): ?>
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
</div>

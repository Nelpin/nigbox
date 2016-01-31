<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Usuario'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Permisos'), ['controller' => 'Permisos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Permiso'), ['controller' => 'Permisos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Roles'), ['controller' => 'Roles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Role'), ['controller' => 'Roles', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="usuarios index large-9 medium-8 columns content">
    <h3><?= __('Usuarios') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('tipo_documento') ?></th>
                <th><?= $this->Paginator->sort('numero_documento') ?></th>
                <th><?= $this->Paginator->sort('primer_nombre') ?></th>
                <th><?= $this->Paginator->sort('segundo_nombre') ?></th>
                <th><?= $this->Paginator->sort('primer_apellido') ?></th>
                <th><?= $this->Paginator->sort('segundo_apellido') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($usuarios as $usuario): ?>
            <tr>
                <td><?= $this->Number->format($usuario->id) ?></td>
                <td><?= $this->Number->format($usuario->tipo_documento) ?></td>
                <td><?= h($usuario->numero_documento) ?></td>
                <td><?= h($usuario->primer_nombre) ?></td>
                <td><?= h($usuario->segundo_nombre) ?></td>
                <td><?= h($usuario->primer_apellido) ?></td>
                <td><?= h($usuario->segundo_apellido) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $usuario->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $usuario->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $usuario->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usuario->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>

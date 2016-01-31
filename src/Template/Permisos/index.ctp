<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Permiso'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Roles'), ['controller' => 'Roles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Role'), ['controller' => 'Roles', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="permisos index large-9 medium-8 columns content">
    <h3><?= __('Permisos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id_permiso') ?></th>
                <th><?= $this->Paginator->sort('permiso') ?></th>
                <th><?= $this->Paginator->sort('key') ?></th>
                <th><?= $this->Paginator->sort('create_at') ?></th>
                <th><?= $this->Paginator->sort('update_at') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($permisos as $permiso): ?>
            <tr>
                <td><?= $this->Number->format($permiso->id_permiso) ?></td>
                <td><?= h($permiso->permiso) ?></td>
                <td><?= h($permiso->key) ?></td>
                <td><?= h($permiso->create_at) ?></td>
                <td><?= h($permiso->update_at) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $permiso->id_permiso]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $permiso->id_permiso]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $permiso->id_permiso], ['confirm' => __('Are you sure you want to delete # {0}?', $permiso->id_permiso)]) ?>
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

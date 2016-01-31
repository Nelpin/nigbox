<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Ciudade'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ciudades index large-9 medium-8 columns content">
    <h3><?= __('Ciudades') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('idCiudades') ?></th>
                <th><?= $this->Paginator->sort('Paises_Codigo') ?></th>
                <th><?= $this->Paginator->sort('Ciudad') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ciudades as $ciudade): ?>
            <tr>
                <td><?= $this->Number->format($ciudade->idCiudades) ?></td>
                <td><?= h($ciudade->Paises_Codigo) ?></td>
                <td><?= h($ciudade->Ciudad) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $ciudade->idCiudades]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ciudade->idCiudades]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ciudade->idCiudades], ['confirm' => __('Are you sure you want to delete # {0}?', $ciudade->idCiudades)]) ?>
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

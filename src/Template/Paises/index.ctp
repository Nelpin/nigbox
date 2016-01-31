<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Paise'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="paises index large-9 medium-8 columns content">
    <h3><?= __('Paises') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('Codigo') ?></th>
                <th><?= $this->Paginator->sort('Pais') ?></th>
                <th><?= $this->Paginator->sort('ciudades_idCiudades') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($paises as $paise): ?>
            <tr>
                <td><?= h($paise->Codigo) ?></td>
                <td><?= h($paise->Pais) ?></td>
                <td><?= $this->Number->format($paise->ciudades_idCiudades) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $paise->Codigo]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $paise->Codigo]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $paise->Codigo], ['confirm' => __('Are you sure you want to delete # {0}?', $paise->Codigo)]) ?>
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

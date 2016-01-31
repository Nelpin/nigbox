<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Tipo Documento'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tipoDocumentos index large-9 medium-8 columns content">
    <h3><?= __('Tipo Documentos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id_documento') ?></th>
                <th><?= $this->Paginator->sort('documento') ?></th>
                <th><?= $this->Paginator->sort('descripcion_documento') ?></th>
                <th><?= $this->Paginator->sort('create_at') ?></th>
                <th><?= $this->Paginator->sort('update_at') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tipoDocumentos as $tipoDocumento): ?>
            <tr>
                <td><?= $this->Number->format($tipoDocumento->id_documento) ?></td>
                <td><?= h($tipoDocumento->documento) ?></td>
                <td><?= h($tipoDocumento->descripcion_documento) ?></td>
                <td><?= h($tipoDocumento->create_at) ?></td>
                <td><?= h($tipoDocumento->update_at) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $tipoDocumento->id_documento]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tipoDocumento->id_documento]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tipoDocumento->id_documento], ['confirm' => __('Are you sure you want to delete # {0}?', $tipoDocumento->id_documento)]) ?>
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

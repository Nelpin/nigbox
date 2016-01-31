<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tipo Documento'), ['action' => 'edit', $tipoDocumento->id_documento]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tipo Documento'), ['action' => 'delete', $tipoDocumento->id_documento], ['confirm' => __('Are you sure you want to delete # {0}?', $tipoDocumento->id_documento)]) ?> </li>
        <li><?= $this->Html->link(__('List Tipo Documentos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tipo Documento'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tipoDocumentos view large-9 medium-8 columns content">
    <h3><?= h($tipoDocumento->id_documento) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Documento') ?></th>
            <td><?= h($tipoDocumento->documento) ?></td>
        </tr>
        <tr>
            <th><?= __('Descripcion Documento') ?></th>
            <td><?= h($tipoDocumento->descripcion_documento) ?></td>
        </tr>
        <tr>
            <th><?= __('Id Documento') ?></th>
            <td><?= $this->Number->format($tipoDocumento->id_documento) ?></td>
        </tr>
        <tr>
            <th><?= __('Create At') ?></th>
            <td><?= h($tipoDocumento->create_at) ?></td>
        </tr>
        <tr>
            <th><?= __('Update At') ?></th>
            <td><?= h($tipoDocumento->update_at) ?></td>
        </tr>
    </table>
</div>

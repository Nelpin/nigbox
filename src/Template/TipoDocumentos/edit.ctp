<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $tipoDocumento->id_documento],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tipoDocumento->id_documento)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Tipo Documentos'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="tipoDocumentos form large-9 medium-8 columns content">
    <?= $this->Form->create($tipoDocumento) ?>
    <fieldset>
        <legend><?= __('Edit Tipo Documento') ?></legend>
        <?php
            echo $this->Form->input('documento');
            echo $this->Form->input('descripcion_documento');
            echo $this->Form->input('create_at');
            echo $this->Form->input('update_at');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

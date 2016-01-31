<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Paise'), ['action' => 'edit', $paise->Codigo]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Paise'), ['action' => 'delete', $paise->Codigo], ['confirm' => __('Are you sure you want to delete # {0}?', $paise->Codigo)]) ?> </li>
        <li><?= $this->Html->link(__('List Paises'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Paise'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="paises view large-9 medium-8 columns content">
    <h3><?= h($paise->Codigo) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Codigo') ?></th>
            <td><?= h($paise->Codigo) ?></td>
        </tr>
        <tr>
            <th><?= __('Pais') ?></th>
            <td><?= h($paise->Pais) ?></td>
        </tr>
        <tr>
            <th><?= __('Ciudades IdCiudades') ?></th>
            <td><?= $this->Number->format($paise->ciudades_idCiudades) ?></td>
        </tr>
    </table>
</div>

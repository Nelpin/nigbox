<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Ciudade'), ['action' => 'edit', $ciudade->idCiudades]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Ciudade'), ['action' => 'delete', $ciudade->idCiudades], ['confirm' => __('Are you sure you want to delete # {0}?', $ciudade->idCiudades)]) ?> </li>
        <li><?= $this->Html->link(__('List Ciudades'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ciudade'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="ciudades view large-9 medium-8 columns content">
    <h3><?= h($ciudade->idCiudades) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Paises Codigo') ?></th>
            <td><?= h($ciudade->Paises_Codigo) ?></td>
        </tr>
        <tr>
            <th><?= __('Ciudad') ?></th>
            <td><?= h($ciudade->Ciudad) ?></td>
        </tr>
        <tr>
            <th><?= __('IdCiudades') ?></th>
            <td><?= $this->Number->format($ciudade->idCiudades) ?></td>
        </tr>
    </table>
</div>

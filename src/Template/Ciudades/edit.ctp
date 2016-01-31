<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $ciudade->idCiudades],
                ['confirm' => __('Are you sure you want to delete # {0}?', $ciudade->idCiudades)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Ciudades'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="ciudades form large-9 medium-8 columns content">
    <?= $this->Form->create($ciudade) ?>
    <fieldset>
        <legend><?= __('Edit Ciudade') ?></legend>
        <?php
            echo $this->Form->input('Paises_Codigo');
            echo $this->Form->input('Ciudad');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

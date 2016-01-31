<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Curso'), ['action' => 'edit', $curso->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Curso'), ['action' => 'delete', $curso->id], ['confirm' => __('Are you sure you want to delete # {0}?', $curso->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Cursos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Curso'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="cursos view large-9 medium-8 columns content">
    <h3><?= h($curso->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Usuario') ?></th>
            <td><?= $curso->has('usuario') ? $this->Html->link($curso->usuario->id, ['controller' => 'Usuarios', 'action' => 'view', $curso->usuario->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Curso') ?></th>
            <td><?= h($curso->curso) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($curso->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($curso->created) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Descripcion') ?></h4>
        <?= $this->Text->autoParagraph(h($curso->descripcion)); ?>
    </div>
</div>

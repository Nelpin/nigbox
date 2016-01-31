<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Numero Documento') ?></th>
            <td><?= h($user->numero_documento) ?></td>
        </tr>
        <tr>
            <th><?= __('Primer Nombre') ?></th>
            <td><?= h($user->primer_nombre) ?></td>
        </tr>
        <tr>
            <th><?= __('Segundo Nombre') ?></th>
            <td><?= h($user->segundo_nombre) ?></td>
        </tr>
        <tr>
            <th><?= __('Primer Apellido') ?></th>
            <td><?= h($user->primer_apellido) ?></td>
        </tr>
        <tr>
            <th><?= __('Segundo Apellido') ?></th>
            <td><?= h($user->segundo_apellido) ?></td>
        </tr>
        <tr>
            <th><?= __('Usuario') ?></th>
            <td><?= h($user->usuario) ?></td>
        </tr>
        <tr>
            <th><?= __('Pass') ?></th>
            <td><?= h($user->pass) ?></td>
        </tr>
        <tr>
            <th><?= __('Email') ?></th>
            <td><?= h($user->email) ?></td>
        </tr>
        <tr>
            <th><?= __('Telefono') ?></th>
            <td><?= h($user->telefono) ?></td>
        </tr>
        <tr>
            <th><?= __('Direccion') ?></th>
            <td><?= h($user->direccion) ?></td>
        </tr>
        <tr>
            <th><?= __('Foto') ?></th>
            <td><?= h($user->foto) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Tipo Documento') ?></th>
            <td><?= $this->Number->format($user->tipo_documento) ?></td>
        </tr>
        <tr>
            <th><?= __('Id Ciudad') ?></th>
            <td><?= $this->Number->format($user->id_ciudad) ?></td>
        </tr>
        <tr>
            <th><?= __('Estado') ?></th>
            <td><?= $this->Number->format($user->estado) ?></td>
        </tr>
        <tr>
            <th><?= __('Codigo') ?></th>
            <td><?= $this->Number->format($user->codigo) ?></td>
        </tr>
        <tr>
            <th><?= __('Fecha Nacimiento') ?></th>
            <td><?= h($user->fecha_nacimiento) ?></td>
        </tr>
        <tr>
            <th><?= __('Fecha Inicio') ?></th>
            <td><?= h($user->fecha_inicio) ?></td>
        </tr>
        <tr>
            <th><?= __('Create At') ?></th>
            <td><?= h($user->create_at) ?></td>
        </tr>
        <tr>
            <th><?= __('Update At') ?></th>
            <td><?= h($user->update_at) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Genero') ?></h4>
        <?= $this->Text->autoParagraph(h($user->genero)); ?>
    </div>
</div>

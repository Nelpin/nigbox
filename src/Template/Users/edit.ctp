<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Form->postLink(
                __('Eliminar'),
                ['action' => 'delete', $user->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Lista de usuarios'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Editar Usuario') ?></legend>
        <?php
            echo $this->Form->input('tipo_documento');
            echo $this->Form->input('numero_documento');
            echo $this->Form->input('primer_nombre');
            echo $this->Form->input('segundo_nombre');
            echo $this->Form->input('primer_apellido');
            echo $this->Form->input('segundo_apellido');
            echo $this->Form->input('genero');
            echo $this->Form->input('usuario');
            echo $this->Form->input('pass');
            echo $this->Form->input('email');
            echo $this->Form->input('telefono');
            echo $this->Form->input('id_ciudad');
            echo $this->Form->input('direccion');
            echo $this->Form->input('fecha_nacimiento');
            echo $this->Form->input('foto');
            echo $this->Form->input('estado');
            echo $this->Form->input('fecha_inicio');
            echo $this->Form->input('codigo');
            echo $this->Form->input('create_at');
            echo $this->Form->input('update_at');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Guardar')) ?>
    <?= $this->Form->end() ?>
</div>

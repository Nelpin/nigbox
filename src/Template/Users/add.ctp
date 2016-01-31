<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Html->link(__('Lista de usuarios'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>

    <fieldset>
        <legend><?= __('Registro') ?></legend>
        <?php
            echo $this->Form->input('tipo_documento', ['options' => $TipoDocs]);
            echo $this->Form->input('numero_documento');
            echo $this->Form->input('primer_nombre');
            echo $this->Form->input('segundo_nombre');
            echo $this->Form->input('primer_apellido');
            echo $this->Form->input('segundo_apellido');
            echo $this->Form->input('genero', ['options'=>array('1'=>'M','2'=>'F')]);
            echo $this->Form->input('usuario');
            echo $this->Form->password('pass');
            echo $this->Form->input('email');
            echo $this->Form->input('telefono');
            echo $this->Form->input('id_ciudad', ['options' => $ciudades,'label'=>'Ciudad']);
            echo $this->Form->input('direccion');
            echo $this->Form->input('fecha_nacimiento');
            echo $this->Form->input('foto');
            echo $this->Form->input('estado');
            echo $this->Form->input('fecha_inicio');
            echo $this->Form->input('codigo');
          
            echo $this->Form->input('permisos._ids', ['options' => $permisos]);
            echo $this->Form->input('roles._ids', ['options' => $roles]);
           
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

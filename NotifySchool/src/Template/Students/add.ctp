<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Student $student
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Students'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Student Levels'), ['controller' => 'StudentLevels', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Student Level'), ['controller' => 'StudentLevels', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="students form large-9 medium-8 columns content">
    <?= $this->Form->create($student) ?>
    <fieldset>
        <legend><?= __('Add Student') ?></legend>
        <?php
            echo $this->Form->control('representante_id');
            echo $this->Form->control('user_id');
            echo $this->Form->control('identificacion');
            echo $this->Form->control('primer_nombre');
            echo $this->Form->control('segundo_nombre');
            echo $this->Form->control('primer_apellido');
            echo $this->Form->control('segundo_apellido');
            echo $this->Form->control('direccion');
            echo $this->Form->control('telefono_uno_contacto');
            echo $this->Form->control('telefono_dos_contacto');
            echo $this->Form->control('observacion');
            echo $this->Form->control('estado');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

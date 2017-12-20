<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\StudentLevel $studentLevel
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Student Levels'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Levels'), ['controller' => 'Levels', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Level'), ['controller' => 'Levels', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Students'), ['controller' => 'Students', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Student'), ['controller' => 'Students', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="studentLevels form large-9 medium-8 columns content">
    <?= $this->Form->create($studentLevel) ?>
    <fieldset>
        <legend><?= __('Add Student Level') ?></legend>
        <?php
            echo $this->Form->control('level_id', ['options' => $levels, 'empty' => true]);
            echo $this->Form->control('student_id', ['options' => $students, 'empty' => true]);
            echo $this->Form->control('estado');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

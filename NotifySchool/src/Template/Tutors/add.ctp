<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tutor $tutor
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Tutors'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Levels'), ['controller' => 'Levels', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Level'), ['controller' => 'Levels', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List School Years'), ['controller' => 'SchoolYears', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New School Year'), ['controller' => 'SchoolYears', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tutors form large-9 medium-8 columns content">
    <?= $this->Form->create($tutor) ?>
    <fieldset>
        <legend><?= __('Add Tutor') ?></legend>
        <?php
            echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
            echo $this->Form->control('level_id', ['options' => $levels, 'empty' => true]);
            echo $this->Form->control('schoolyear_id', ['options' => $schoolYears, 'empty' => true]);
            echo $this->Form->control('estado');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

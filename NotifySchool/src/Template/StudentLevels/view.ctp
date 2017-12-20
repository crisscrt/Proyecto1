<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\StudentLevel $studentLevel
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Student Level'), ['action' => 'edit', $studentLevel->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Student Level'), ['action' => 'delete', $studentLevel->id], ['confirm' => __('Are you sure you want to delete # {0}?', $studentLevel->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Student Levels'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Student Level'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Levels'), ['controller' => 'Levels', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Level'), ['controller' => 'Levels', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Students'), ['controller' => 'Students', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Student'), ['controller' => 'Students', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="studentLevels view large-9 medium-8 columns content">
    <h3><?= h($studentLevel->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Level') ?></th>
            <td><?= $studentLevel->has('level') ? $this->Html->link($studentLevel->level->id, ['controller' => 'Levels', 'action' => 'view', $studentLevel->level->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Student') ?></th>
            <td><?= $studentLevel->has('student') ? $this->Html->link($studentLevel->student->id, ['controller' => 'Students', 'action' => 'view', $studentLevel->student->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($studentLevel->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estado') ?></th>
            <td><?= $this->Number->format($studentLevel->estado) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($studentLevel->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($studentLevel->modified) ?></td>
        </tr>
    </table>
</div>

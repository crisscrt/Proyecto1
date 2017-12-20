<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tutor $tutor
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tutor'), ['action' => 'edit', $tutor->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tutor'), ['action' => 'delete', $tutor->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tutor->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tutors'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tutor'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Levels'), ['controller' => 'Levels', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Level'), ['controller' => 'Levels', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List School Years'), ['controller' => 'SchoolYears', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New School Year'), ['controller' => 'SchoolYears', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tutors view large-9 medium-8 columns content">
    <h3><?= h($tutor->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $tutor->has('user') ? $this->Html->link($tutor->user->id, ['controller' => 'Users', 'action' => 'view', $tutor->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Level') ?></th>
            <td><?= $tutor->has('level') ? $this->Html->link($tutor->level->id, ['controller' => 'Levels', 'action' => 'view', $tutor->level->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('School Year') ?></th>
            <td><?= $tutor->has('school_year') ? $this->Html->link($tutor->school_year->id, ['controller' => 'SchoolYears', 'action' => 'view', $tutor->school_year->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($tutor->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estado') ?></th>
            <td><?= $this->Number->format($tutor->estado) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($tutor->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($tutor->modified) ?></td>
        </tr>
    </table>
</div>

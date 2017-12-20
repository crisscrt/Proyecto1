<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LevelsUser $levelsUser
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Levels User'), ['action' => 'edit', $levelsUser->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Levels User'), ['action' => 'delete', $levelsUser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $levelsUser->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Levels Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Levels User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Schedules'), ['controller' => 'Schedules', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Schedule'), ['controller' => 'Schedules', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Schools'), ['controller' => 'Schools', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New School'), ['controller' => 'Schools', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Levels'), ['controller' => 'Levels', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Level'), ['controller' => 'Levels', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="levelsUsers view large-9 medium-8 columns content">
    <h3><?= h($levelsUser->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $levelsUser->has('user') ? $this->Html->link($levelsUser->user->id, ['controller' => 'Users', 'action' => 'view', $levelsUser->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Schedule') ?></th>
            <td><?= $levelsUser->has('schedule') ? $this->Html->link($levelsUser->schedule->id, ['controller' => 'Schedules', 'action' => 'view', $levelsUser->schedule->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('School') ?></th>
            <td><?= $levelsUser->has('school') ? $this->Html->link($levelsUser->school->id, ['controller' => 'Schools', 'action' => 'view', $levelsUser->school->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($levelsUser->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estado') ?></th>
            <td><?= $this->Number->format($levelsUser->estado) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($levelsUser->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($levelsUser->modified) ?></td>
        </tr>
    </table>
</div>

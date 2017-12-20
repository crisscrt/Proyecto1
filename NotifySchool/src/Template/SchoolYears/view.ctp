<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SchoolYear $schoolYear
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit School Year'), ['action' => 'edit', $schoolYear->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete School Year'), ['action' => 'delete', $schoolYear->id], ['confirm' => __('Are you sure you want to delete # {0}?', $schoolYear->id)]) ?> </li>
        <li><?= $this->Html->link(__('List School Years'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New School Year'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Schools'), ['controller' => 'Schools', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New School'), ['controller' => 'Schools', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="schoolYears view large-9 medium-8 columns content">
    <h3><?= h($schoolYear->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('School') ?></th>
            <td><?= $schoolYear->has('school') ? $this->Html->link($schoolYear->school->id, ['controller' => 'Schools', 'action' => 'view', $schoolYear->school->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descripcion') ?></th>
            <td><?= h($schoolYear->descripcion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($schoolYear->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User Id') ?></th>
            <td><?= $this->Number->format($schoolYear->user_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estado') ?></th>
            <td><?= $this->Number->format($schoolYear->estado) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($schoolYear->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($schoolYear->modified) ?></td>
        </tr>
    </table>
</div>

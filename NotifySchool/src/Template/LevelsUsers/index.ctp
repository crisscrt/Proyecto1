<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LevelsUser[]|\Cake\Collection\CollectionInterface $levelsUsers
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Levels User'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Schedules'), ['controller' => 'Schedules', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Schedule'), ['controller' => 'Schedules', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Schools'), ['controller' => 'Schools', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New School'), ['controller' => 'Schools', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Levels'), ['controller' => 'Levels', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Level'), ['controller' => 'Levels', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="levelsUsers index large-9 medium-8 columns content">
    <h3><?= __('Levels Users') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('schedule_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('school_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('estado') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($levelsUsers as $levelsUser): ?>
            <tr>
                <td><?= $this->Number->format($levelsUser->id) ?></td>
                <td><?= $levelsUser->has('user') ? $this->Html->link($levelsUser->user->id, ['controller' => 'Users', 'action' => 'view', $levelsUser->user->id]) : '' ?></td>
                <td><?= $levelsUser->has('schedule') ? $this->Html->link($levelsUser->schedule->id, ['controller' => 'Schedules', 'action' => 'view', $levelsUser->schedule->id]) : '' ?></td>
                <td><?= $levelsUser->has('school') ? $this->Html->link($levelsUser->school->id, ['controller' => 'Schools', 'action' => 'view', $levelsUser->school->id]) : '' ?></td>
                <td><?= $this->Number->format($levelsUser->estado) ?></td>
                <td><?= h($levelsUser->created) ?></td>
                <td><?= h($levelsUser->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $levelsUser->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $levelsUser->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $levelsUser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $levelsUser->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>

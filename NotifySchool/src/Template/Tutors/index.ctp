<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tutor[]|\Cake\Collection\CollectionInterface $tutors
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Tutor'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Levels'), ['controller' => 'Levels', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Level'), ['controller' => 'Levels', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List School Years'), ['controller' => 'SchoolYears', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New School Year'), ['controller' => 'SchoolYears', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tutors index large-9 medium-8 columns content">
    <h3><?= __('Tutors') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('level_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('schoolyear_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('estado') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tutors as $tutor): ?>
            <tr>
                <td><?= $this->Number->format($tutor->id) ?></td>
                <td><?= $tutor->has('user') ? $this->Html->link($tutor->user->id, ['controller' => 'Users', 'action' => 'view', $tutor->user->id]) : '' ?></td>
                <td><?= $tutor->has('level') ? $this->Html->link($tutor->level->id, ['controller' => 'Levels', 'action' => 'view', $tutor->level->id]) : '' ?></td>
                <td><?= $tutor->has('school_year') ? $this->Html->link($tutor->school_year->id, ['controller' => 'SchoolYears', 'action' => 'view', $tutor->school_year->id]) : '' ?></td>
                <td><?= $this->Number->format($tutor->estado) ?></td>
                <td><?= h($tutor->created) ?></td>
                <td><?= h($tutor->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $tutor->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tutor->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tutor->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tutor->id)]) ?>
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

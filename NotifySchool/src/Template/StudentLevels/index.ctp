<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\StudentLevel[]|\Cake\Collection\CollectionInterface $studentLevels
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Student Level'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Levels'), ['controller' => 'Levels', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Level'), ['controller' => 'Levels', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Students'), ['controller' => 'Students', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Student'), ['controller' => 'Students', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="studentLevels index large-9 medium-8 columns content">
    <h3><?= __('Student Levels') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('level_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('student_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('estado') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($studentLevels as $studentLevel): ?>
            <tr>
                <td><?= $this->Number->format($studentLevel->id) ?></td>
                <td><?= $studentLevel->has('level') ? $this->Html->link($studentLevel->level->id, ['controller' => 'Levels', 'action' => 'view', $studentLevel->level->id]) : '' ?></td>
                <td><?= $studentLevel->has('student') ? $this->Html->link($studentLevel->student->id, ['controller' => 'Students', 'action' => 'view', $studentLevel->student->id]) : '' ?></td>
                <td><?= $this->Number->format($studentLevel->estado) ?></td>
                <td><?= h($studentLevel->created) ?></td>
                <td><?= h($studentLevel->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $studentLevel->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $studentLevel->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $studentLevel->id], ['confirm' => __('Are you sure you want to delete # {0}?', $studentLevel->id)]) ?>
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
<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SchoolYear[]|\Cake\Collection\CollectionInterface $schoolYears
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New School Year'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Schools'), ['controller' => 'Schools', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New School'), ['controller' => 'Schools', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="schoolYears index large-9 medium-8 columns content">
    <h3><?= __('School Years') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('school_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descripcion') ?></th>
                <th scope="col"><?= $this->Paginator->sort('estado') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($schoolYears as $schoolYear): ?>
            <tr>
                <td><?= $this->Number->format($schoolYear->id) ?></td>
                <td><?= $schoolYear->has('school') ? $this->Html->link($schoolYear->school->id, ['controller' => 'Schools', 'action' => 'view', $schoolYear->school->id]) : '' ?></td>
                <td><?= $this->Number->format($schoolYear->user_id) ?></td>
                <td><?= h($schoolYear->descripcion) ?></td>
                <td><?= $this->Number->format($schoolYear->estado) ?></td>
                <td><?= h($schoolYear->created) ?></td>
                <td><?= h($schoolYear->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $schoolYear->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $schoolYear->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $schoolYear->id], ['confirm' => __('Are you sure you want to delete # {0}?', $schoolYear->id)]) ?>
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

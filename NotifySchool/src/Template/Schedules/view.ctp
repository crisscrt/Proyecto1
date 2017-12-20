<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Schedule $schedule
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Schedule'), ['action' => 'edit', $schedule->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Schedule'), ['action' => 'delete', $schedule->id], ['confirm' => __('Are you sure you want to delete # {0}?', $schedule->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Schedules'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Schedule'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Levels'), ['controller' => 'Levels', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Level'), ['controller' => 'Levels', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Levels Users'), ['controller' => 'LevelsUsers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Levels User'), ['controller' => 'LevelsUsers', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="schedules view large-9 medium-8 columns content">
    <h3><?= h($schedule->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Level') ?></th>
            <td><?= $schedule->has('level') ? $this->Html->link($schedule->level->id, ['controller' => 'Levels', 'action' => 'view', $schedule->level->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cod Exp Hro Nvl') ?></th>
            <td><?= h($schedule->cod_exp_hro_nvl) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Materia') ?></th>
            <td><?= h($schedule->materia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Hora Inicio') ?></th>
            <td><?= h($schedule->hora_inicio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Hora Fin') ?></th>
            <td><?= h($schedule->hora_fin) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($schedule->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estado') ?></th>
            <td><?= $this->Number->format($schedule->estado) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($schedule->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($schedule->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Levels Users') ?></h4>
        <?php if (!empty($schedule->levels_users)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Schedule Id') ?></th>
                <th scope="col"><?= __('School Id') ?></th>
                <th scope="col"><?= __('Estado') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($schedule->levels_users as $levelsUsers): ?>
            <tr>
                <td><?= h($levelsUsers->id) ?></td>
                <td><?= h($levelsUsers->user_id) ?></td>
                <td><?= h($levelsUsers->schedule_id) ?></td>
                <td><?= h($levelsUsers->school_id) ?></td>
                <td><?= h($levelsUsers->estado) ?></td>
                <td><?= h($levelsUsers->created) ?></td>
                <td><?= h($levelsUsers->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'LevelsUsers', 'action' => 'view', $levelsUsers->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'LevelsUsers', 'action' => 'edit', $levelsUsers->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'LevelsUsers', 'action' => 'delete', $levelsUsers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $levelsUsers->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>

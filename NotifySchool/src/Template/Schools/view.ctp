<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\School $school
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit School'), ['action' => 'edit', $school->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete School'), ['action' => 'delete', $school->id], ['confirm' => __('Are you sure you want to delete # {0}?', $school->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Schools'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New School'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Levels'), ['controller' => 'Levels', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Level'), ['controller' => 'Levels', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Levels Users'), ['controller' => 'LevelsUsers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Levels User'), ['controller' => 'LevelsUsers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List School Years'), ['controller' => 'SchoolYears', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New School Year'), ['controller' => 'SchoolYears', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="schools view large-9 medium-8 columns content">
    <h3><?= h($school->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($school->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ruc') ?></th>
            <td><?= h($school->ruc) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Direccion') ?></th>
            <td><?= h($school->direccion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pagina Web') ?></th>
            <td><?= h($school->pagina_web) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($school->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estado') ?></th>
            <td><?= $this->Number->format($school->estado) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Creacion') ?></th>
            <td><?= h($school->fecha_creacion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($school->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($school->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Levels') ?></h4>
        <?php if (!empty($school->levels)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('School Id') ?></th>
                <th scope="col"><?= __('Nombre') ?></th>
                <th scope="col"><?= __('Estado') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($school->levels as $levels): ?>
            <tr>
                <td><?= h($levels->id) ?></td>
                <td><?= h($levels->school_id) ?></td>
                <td><?= h($levels->nombre) ?></td>
                <td><?= h($levels->estado) ?></td>
                <td><?= h($levels->created) ?></td>
                <td><?= h($levels->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Levels', 'action' => 'view', $levels->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Levels', 'action' => 'edit', $levels->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Levels', 'action' => 'delete', $levels->id], ['confirm' => __('Are you sure you want to delete # {0}?', $levels->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Levels Users') ?></h4>
        <?php if (!empty($school->levels_users)): ?>
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
            <?php foreach ($school->levels_users as $levelsUsers): ?>
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
    <div class="related">
        <h4><?= __('Related School Years') ?></h4>
        <?php if (!empty($school->school_years)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('School Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Descripcion') ?></th>
                <th scope="col"><?= __('Estado') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($school->school_years as $schoolYears): ?>
            <tr>
                <td><?= h($schoolYears->id) ?></td>
                <td><?= h($schoolYears->school_id) ?></td>
                <td><?= h($schoolYears->user_id) ?></td>
                <td><?= h($schoolYears->descripcion) ?></td>
                <td><?= h($schoolYears->estado) ?></td>
                <td><?= h($schoolYears->created) ?></td>
                <td><?= h($schoolYears->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'SchoolYears', 'action' => 'view', $schoolYears->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'SchoolYears', 'action' => 'edit', $schoolYears->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'SchoolYears', 'action' => 'delete', $schoolYears->id], ['confirm' => __('Are you sure you want to delete # {0}?', $schoolYears->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Users') ?></h4>
        <?php if (!empty($school->users)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('School Id') ?></th>
                <th scope="col"><?= __('Email') ?></th>
                <th scope="col"><?= __('Identificacion') ?></th>
                <th scope="col"><?= __('Primer Nombre') ?></th>
                <th scope="col"><?= __('Segundo Nombre') ?></th>
                <th scope="col"><?= __('Primer Apellido') ?></th>
                <th scope="col"><?= __('Segundo Apellido') ?></th>
                <th scope="col"><?= __('Direccion') ?></th>
                <th scope="col"><?= __('Telefono Uno Contacto') ?></th>
                <th scope="col"><?= __('Telefono Dos Contacto') ?></th>
                <th scope="col"><?= __('Es Representante') ?></th>
                <th scope="col"><?= __('Es Docente') ?></th>
                <th scope="col"><?= __('Observacion') ?></th>
                <th scope="col"><?= __('Estado') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($school->users as $users): ?>
            <tr>
                <td><?= h($users->id) ?></td>
                <td><?= h($users->school_id) ?></td>
                <td><?= h($users->email) ?></td>
                <td><?= h($users->identificacion) ?></td>
                <td><?= h($users->primer_nombre) ?></td>
                <td><?= h($users->segundo_nombre) ?></td>
                <td><?= h($users->primer_apellido) ?></td>
                <td><?= h($users->segundo_apellido) ?></td>
                <td><?= h($users->direccion) ?></td>
                <td><?= h($users->telefono_uno_contacto) ?></td>
                <td><?= h($users->telefono_dos_contacto) ?></td>
                <td><?= h($users->es_representante) ?></td>
                <td><?= h($users->es_docente) ?></td>
                <td><?= h($users->observacion) ?></td>
                <td><?= h($users->estado) ?></td>
                <td><?= h($users->created) ?></td>
                <td><?= h($users->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Users', 'action' => 'view', $users->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Users', 'action' => 'edit', $users->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Users', 'action' => 'delete', $users->id], ['confirm' => __('Are you sure you want to delete # {0}?', $users->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>

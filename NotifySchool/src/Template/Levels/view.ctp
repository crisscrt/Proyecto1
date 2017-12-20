<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Level $level
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Level'), ['action' => 'edit', $level->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Level'), ['action' => 'delete', $level->id], ['confirm' => __('Are you sure you want to delete # {0}?', $level->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Levels'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Level'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Schools'), ['controller' => 'Schools', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New School'), ['controller' => 'Schools', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Schedules'), ['controller' => 'Schedules', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Schedule'), ['controller' => 'Schedules', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Scores'), ['controller' => 'Scores', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Score'), ['controller' => 'Scores', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Student Levels'), ['controller' => 'StudentLevels', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Student Level'), ['controller' => 'StudentLevels', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tutors'), ['controller' => 'Tutors', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tutor'), ['controller' => 'Tutors', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="levels view large-9 medium-8 columns content">
    <h3><?= h($level->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('School') ?></th>
            <td><?= $level->has('school') ? $this->Html->link($level->school->id, ['controller' => 'Schools', 'action' => 'view', $level->school->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($level->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($level->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estado') ?></th>
            <td><?= $this->Number->format($level->estado) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($level->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($level->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Users') ?></h4>
        <?php if (!empty($level->users)): ?>
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
            <?php foreach ($level->users as $users): ?>
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
    <div class="related">
        <h4><?= __('Related Schedules') ?></h4>
        <?php if (!empty($level->schedules)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Level Id') ?></th>
                <th scope="col"><?= __('Cod Exp Hro Nvl') ?></th>
                <th scope="col"><?= __('Materia') ?></th>
                <th scope="col"><?= __('Hora Inicio') ?></th>
                <th scope="col"><?= __('Hora Fin') ?></th>
                <th scope="col"><?= __('Estado') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($level->schedules as $schedules): ?>
            <tr>
                <td><?= h($schedules->id) ?></td>
                <td><?= h($schedules->level_id) ?></td>
                <td><?= h($schedules->cod_exp_hro_nvl) ?></td>
                <td><?= h($schedules->materia) ?></td>
                <td><?= h($schedules->hora_inicio) ?></td>
                <td><?= h($schedules->hora_fin) ?></td>
                <td><?= h($schedules->estado) ?></td>
                <td><?= h($schedules->created) ?></td>
                <td><?= h($schedules->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Schedules', 'action' => 'view', $schedules->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Schedules', 'action' => 'edit', $schedules->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Schedules', 'action' => 'delete', $schedules->id], ['confirm' => __('Are you sure you want to delete # {0}?', $schedules->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Scores') ?></h4>
        <?php if (!empty($level->scores)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Student Id') ?></th>
                <th scope="col"><?= __('Level Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Descripcion') ?></th>
                <th scope="col"><?= __('Valor') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($level->scores as $scores): ?>
            <tr>
                <td><?= h($scores->id) ?></td>
                <td><?= h($scores->student_id) ?></td>
                <td><?= h($scores->level_id) ?></td>
                <td><?= h($scores->user_id) ?></td>
                <td><?= h($scores->descripcion) ?></td>
                <td><?= h($scores->valor) ?></td>
                <td><?= h($scores->created) ?></td>
                <td><?= h($scores->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Scores', 'action' => 'view', $scores->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Scores', 'action' => 'edit', $scores->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Scores', 'action' => 'delete', $scores->id], ['confirm' => __('Are you sure you want to delete # {0}?', $scores->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Student Levels') ?></h4>
        <?php if (!empty($level->student_levels)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Level Id') ?></th>
                <th scope="col"><?= __('Student Id') ?></th>
                <th scope="col"><?= __('Estado') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($level->student_levels as $studentLevels): ?>
            <tr>
                <td><?= h($studentLevels->id) ?></td>
                <td><?= h($studentLevels->level_id) ?></td>
                <td><?= h($studentLevels->student_id) ?></td>
                <td><?= h($studentLevels->estado) ?></td>
                <td><?= h($studentLevels->created) ?></td>
                <td><?= h($studentLevels->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'StudentLevels', 'action' => 'view', $studentLevels->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'StudentLevels', 'action' => 'edit', $studentLevels->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'StudentLevels', 'action' => 'delete', $studentLevels->id], ['confirm' => __('Are you sure you want to delete # {0}?', $studentLevels->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Tutors') ?></h4>
        <?php if (!empty($level->tutors)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Level Id') ?></th>
                <th scope="col"><?= __('Schoolyear Id') ?></th>
                <th scope="col"><?= __('Estado') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($level->tutors as $tutors): ?>
            <tr>
                <td><?= h($tutors->id) ?></td>
                <td><?= h($tutors->user_id) ?></td>
                <td><?= h($tutors->level_id) ?></td>
                <td><?= h($tutors->schoolyear_id) ?></td>
                <td><?= h($tutors->estado) ?></td>
                <td><?= h($tutors->created) ?></td>
                <td><?= h($tutors->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Tutors', 'action' => 'view', $tutors->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Tutors', 'action' => 'edit', $tutors->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Tutors', 'action' => 'delete', $tutors->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tutors->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>

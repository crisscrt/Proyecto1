<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Student $student
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Student'), ['action' => 'edit', $student->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Student'), ['action' => 'delete', $student->id], ['confirm' => __('Are you sure you want to delete # {0}?', $student->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Students'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Student'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Student Levels'), ['controller' => 'StudentLevels', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Student Level'), ['controller' => 'StudentLevels', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="students view large-9 medium-8 columns content">
    <h3><?= h($student->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Identificacion') ?></th>
            <td><?= h($student->identificacion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Primer Nombre') ?></th>
            <td><?= h($student->primer_nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Segundo Nombre') ?></th>
            <td><?= h($student->segundo_nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Primer Apellido') ?></th>
            <td><?= h($student->primer_apellido) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Segundo Apellido') ?></th>
            <td><?= h($student->segundo_apellido) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Direccion') ?></th>
            <td><?= h($student->direccion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telefono Uno Contacto') ?></th>
            <td><?= h($student->telefono_uno_contacto) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telefono Dos Contacto') ?></th>
            <td><?= h($student->telefono_dos_contacto) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Observacion') ?></th>
            <td><?= h($student->observacion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($student->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Representante Id') ?></th>
            <td><?= $this->Number->format($student->representante_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User Id') ?></th>
            <td><?= $this->Number->format($student->user_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estado') ?></th>
            <td><?= $this->Number->format($student->estado) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($student->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($student->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Student Levels') ?></h4>
        <?php if (!empty($student->student_levels)): ?>
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
            <?php foreach ($student->student_levels as $studentLevels): ?>
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
</div>

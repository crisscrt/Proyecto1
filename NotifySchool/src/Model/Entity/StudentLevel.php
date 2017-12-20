<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * StudentLevel Entity
 *
 * @property int $id
 * @property int $level_id
 * @property int $student_id
 * @property int $estado
 * @property \Cake\I18n\FrozenDate $created
 * @property \Cake\I18n\FrozenDate $modified
 *
 * @property \App\Model\Entity\Level $level
 * @property \App\Model\Entity\Student $student
 */
class StudentLevel extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'level_id' => true,
        'student_id' => true,
        'estado' => true,
        'created' => true,
        'modified' => true,
        'level' => true,
        'student' => true
    ];
}

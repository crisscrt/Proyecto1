<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Level Entity
 *
 * @property int $id
 * @property int $school_id
 * @property string $nombre
 * @property int $estado
 * @property \Cake\I18n\FrozenDate $created
 * @property \Cake\I18n\FrozenDate $modified
 *
 * @property \App\Model\Entity\School $school
 * @property \App\Model\Entity\Schedule[] $schedules
 * @property \App\Model\Entity\Score[] $scores
 * @property \App\Model\Entity\StudentLevel[] $student_levels
 * @property \App\Model\Entity\Tutor[] $tutors
 * @property \App\Model\Entity\User[] $users
 */
class Level extends Entity
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
        'school_id' => true,
        'nombre' => true,
        'estado' => true,
        'created' => true,
        'modified' => true,
        'school' => true,
        'schedules' => true,
        'scores' => true,
        'student_levels' => true,
        'tutors' => true,
        'users' => true
    ];
}

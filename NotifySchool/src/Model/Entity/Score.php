<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Score Entity
 *
 * @property int $id
 * @property int $student_id
 * @property int $level_id
 * @property int $user_id
 * @property string $descripcion
 * @property string $valor
 * @property \Cake\I18n\FrozenDate $created
 * @property \Cake\I18n\FrozenDate $modified
 *
 * @property \App\Model\Entity\Student $student
 * @property \App\Model\Entity\Level $level
 * @property \App\Model\Entity\User $user
 */
class Score extends Entity
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
        'student_id' => true,
        'level_id' => true,
        'user_id' => true,
        'descripcion' => true,
        'valor' => true,
        'created' => true,
        'modified' => true,
        'student' => true,
        'level' => true,
        'user' => true
    ];
}

<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * LevelsUser Entity
 *
 * @property int $id
 * @property int $user_id
 * @property int $schedule_id
 * @property int $school_id
 * @property int $estado
 * @property \Cake\I18n\FrozenDate $created
 * @property \Cake\I18n\FrozenDate $modified
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Schedule $schedule
 * @property \App\Model\Entity\School $school
 */
class LevelsUser extends Entity
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
        'user_id' => true,
        'schedule_id' => true,
        'school_id' => true,
        'estado' => true,
        'created' => true,
        'modified' => true,
        'user' => true,
        'schedule' => true,
        'school' => true
    ];
}

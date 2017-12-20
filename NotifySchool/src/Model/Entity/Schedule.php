<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Schedule Entity
 *
 * @property int $id
 * @property int $level_id
 * @property string $cod_exp_hro_nvl
 * @property string $materia
 * @property string $hora_inicio
 * @property string $hora_fin
 * @property int $estado
 * @property \Cake\I18n\FrozenDate $created
 * @property \Cake\I18n\FrozenDate $modified
 *
 * @property \App\Model\Entity\Level $level
 * @property \App\Model\Entity\LevelsUser[] $levels_users
 */
class Schedule extends Entity
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
        'cod_exp_hro_nvl' => true,
        'materia' => true,
        'hora_inicio' => true,
        'hora_fin' => true,
        'estado' => true,
        'created' => true,
        'modified' => true,
        'level' => true,
        'levels_users' => true
    ];
}

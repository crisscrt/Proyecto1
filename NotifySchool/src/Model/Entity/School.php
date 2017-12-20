<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * School Entity
 *
 * @property int $id
 * @property string $nombre
 * @property string $ruc
 * @property string $direccion
 * @property string $pagina_web
 * @property \Cake\I18n\FrozenDate $fecha_creacion
 * @property int $estado
 * @property \Cake\I18n\FrozenDate $created
 * @property \Cake\I18n\FrozenDate $modified
 *
 * @property \App\Model\Entity\Level[] $levels
 * @property \App\Model\Entity\LevelsUser[] $levels_users
 * @property \App\Model\Entity\SchoolYear[] $school_years
 * @property \App\Model\Entity\User[] $users
 */
class School extends Entity
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
        'nombre' => true,
        'ruc' => true,
        'direccion' => true,
        'pagina_web' => true,
        'fecha_creacion' => true,
        'estado' => true,
        'created' => true,
        'modified' => true,
        'levels' => true,
        'levels_users' => true,
        'school_years' => true,
        'users' => true
    ];
}

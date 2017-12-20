<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Student Entity
 *
 * @property int $id
 * @property int $representante_id
 * @property int $user_id
 * @property string $identificacion
 * @property string $primer_nombre
 * @property string $segundo_nombre
 * @property string $primer_apellido
 * @property string $segundo_apellido
 * @property string $direccion
 * @property string $telefono_uno_contacto
 * @property string $telefono_dos_contacto
 * @property string $observacion
 * @property int $estado
 * @property \Cake\I18n\FrozenDate $created
 * @property \Cake\I18n\FrozenDate $modified
 *
 * @property \App\Model\Entity\StudentLevel[] $student_levels
 */
class Student extends Entity
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
        'representante_id' => true,
        'user_id' => true,
        'identificacion' => true,
        'primer_nombre' => true,
        'segundo_nombre' => true,
        'primer_apellido' => true,
        'segundo_apellido' => true,
        'direccion' => true,
        'telefono_uno_contacto' => true,
        'telefono_dos_contacto' => true,
        'observacion' => true,
        'estado' => true,
        'created' => true,
        'modified' => true,
        'student_levels' => true
    ];
}

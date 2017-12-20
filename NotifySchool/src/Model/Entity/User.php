<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property int $school_id
 * @property string $email
 * @property string $identificacion
 * @property string $primer_nombre
 * @property string $segundo_nombre
 * @property string $primer_apellido
 * @property string $segundo_apellido
 * @property string $direccion
 * @property string $telefono_uno_contacto
 * @property string $telefono_dos_contacto
 * @property int $es_representante
 * @property int $es_docente
 * @property string $observacion
 * @property int $estado
 * @property \Cake\I18n\FrozenDate $created
 * @property \Cake\I18n\FrozenDate $modified
 *
 * @property \App\Model\Entity\School $school
 * @property \App\Model\Entity\Score[] $scores
 * @property \App\Model\Entity\Tutor[] $tutors
 * @property \App\Model\Entity\Level[] $levels
 */
class User extends Entity
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
        'email' => true,
        'identificacion' => true,
        'primer_nombre' => true,
        'segundo_nombre' => true,
        'primer_apellido' => true,
        'segundo_apellido' => true,
        'direccion' => true,
        'telefono_uno_contacto' => true,
        'telefono_dos_contacto' => true,
        'es_representante' => true,
        'es_docente' => true,
        'observacion' => true,
        'estado' => true,
        'created' => true,
        'modified' => true,
        'school' => true,
        'scores' => true,
        'tutors' => true,
        'levels' => true
    ];
}

<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Students Model
 *
 * @property |\Cake\ORM\Association\BelongsTo $Users
 * @property |\Cake\ORM\Association\BelongsTo $Users
 * @property |\Cake\ORM\Association\HasMany $Scores
 * @property \App\Model\Table\StudentLevelsTable|\Cake\ORM\Association\HasMany $StudentLevels
 *
 * @method \App\Model\Entity\Student get($primaryKey, $options = [])
 * @method \App\Model\Entity\Student newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Student[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Student|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Student patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Student[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Student findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class StudentsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('students');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'foreignKey' => 'representante_id'
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Scores', [
            'foreignKey' => 'student_id'
        ]);
        $this->hasMany('StudentLevels', [
            'foreignKey' => 'student_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create')
            ->add('id', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('identificacion')
            ->maxLength('identificacion', 15)
            ->allowEmpty('identificacion');

        $validator
            ->scalar('primer_nombre')
            ->maxLength('primer_nombre', 50)
            ->allowEmpty('primer_nombre');

        $validator
            ->scalar('segundo_nombre')
            ->maxLength('segundo_nombre', 50)
            ->allowEmpty('segundo_nombre');

        $validator
            ->scalar('primer_apellido')
            ->maxLength('primer_apellido', 50)
            ->allowEmpty('primer_apellido');

        $validator
            ->scalar('segundo_apellido')
            ->maxLength('segundo_apellido', 50)
            ->allowEmpty('segundo_apellido');

        $validator
            ->scalar('direccion')
            ->maxLength('direccion', 1000)
            ->allowEmpty('direccion');

        $validator
            ->scalar('telefono_uno_contacto')
            ->maxLength('telefono_uno_contacto', 20)
            ->allowEmpty('telefono_uno_contacto');

        $validator
            ->scalar('telefono_dos_contacto')
            ->maxLength('telefono_dos_contacto', 20)
            ->allowEmpty('telefono_dos_contacto');

        $validator
            ->scalar('observacion')
            ->maxLength('observacion', 1000)
            ->allowEmpty('observacion');

        $validator
            ->allowEmpty('estado');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['id']));
        $rules->add($rules->existsIn(['representante_id'], 'Users'));
        $rules->add($rules->existsIn(['user_id'], 'Users'));

        return $rules;
    }
}

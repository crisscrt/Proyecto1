<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @property \App\Model\Table\SchoolsTable|\Cake\ORM\Association\BelongsTo $Schools
 * @property |\Cake\ORM\Association\HasMany $SchoolYears
 * @property \App\Model\Table\ScoresTable|\Cake\ORM\Association\HasMany $Scores
 * @property |\Cake\ORM\Association\HasMany $Students
 * @property \App\Model\Table\TutorsTable|\Cake\ORM\Association\HasMany $Tutors
 * @property \App\Model\Table\LevelsTable|\Cake\ORM\Association\BelongsToMany $Levels
 *
 * @method \App\Model\Entity\User get($primaryKey, $options = [])
 * @method \App\Model\Entity\User newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\User|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\User[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\User findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class UsersTable extends Table
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

        $this->setTable('users');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Schools', [
            'foreignKey' => 'school_id'
        ]);
        $this->hasMany('SchoolYears', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Scores', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Students', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Tutors', [
            'foreignKey' => 'user_id'
        ]);
        $this->belongsToMany('Levels', [
            'foreignKey' => 'user_id',
            'targetForeignKey' => 'level_id',
            'joinTable' => 'levels_users'
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
            ->email('email')
            ->allowEmpty('email');

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
            ->allowEmpty('es_representante');

        $validator
            ->allowEmpty('es_docente');

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
        $rules->add($rules->isUnique(['email']));
        $rules->add($rules->isUnique(['id']));
        $rules->add($rules->existsIn(['school_id'], 'Schools'));

        return $rules;
    }
}

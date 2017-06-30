<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Statustask Model
 *
 * @property \App\Model\Table\TaskTable|\Cake\ORM\Association\HasMany $Task
 *
 * @method \App\Model\Entity\Statustask get($primaryKey, $options = [])
 * @method \App\Model\Entity\Statustask newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Statustask[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Statustask|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Statustask patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Statustask[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Statustask findOrCreate($search, callable $callback = null, $options = [])
 */
class StatustaskTable extends Table
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

        $this->setTable('statustask');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Task', [
            'foreignKey' => 'statustask_id'
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
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('status', 'create')
            ->notEmpty('status');

        return $validator;
    }
}

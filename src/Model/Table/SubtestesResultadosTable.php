<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SubtestesResultados Model
 *
 * @method \App\Model\Entity\SubtestesResultado get($primaryKey, $options = [])
 * @method \App\Model\Entity\SubtestesResultado newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\SubtestesResultado[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\SubtestesResultado|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SubtestesResultado|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SubtestesResultado patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\SubtestesResultado[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\SubtestesResultado findOrCreate($search, callable $callback = null, $options = [])
 */
class SubtestesResultadosTable extends Table
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

        $this->setTable('subtestes_resultados');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->scalar('nome')
            ->maxLength('nome', 100)
            ->requirePresence('nome', 'create')
            ->notEmpty('nome');

        return $validator;
    }
}

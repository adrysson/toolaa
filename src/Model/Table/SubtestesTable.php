<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Subtestes Model
 *
 * @property \App\Model\Table\SubtestesTiposTable|\Cake\ORM\Association\BelongsTo $SubtestesTipos
 * @property \App\Model\Table\TestesTable|\Cake\ORM\Association\BelongsTo $Testes
 * @property \App\Model\Table\SubtestesResultadosTable|\Cake\ORM\Association\BelongsTo $SubtestesResultados
 *
 * @method \App\Model\Entity\Subtestis get($primaryKey, $options = [])
 * @method \App\Model\Entity\Subtestis newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Subtestis[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Subtestis|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Subtestis|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Subtestis patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Subtestis[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Subtestis findOrCreate($search, callable $callback = null, $options = [])
 */
class SubtestesTable extends Table
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

        $this->setTable('subtestes');
        $this->setEntityClass('App\Model\Entity\Subteste');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Tipos', [
            'className' => 'SubtestesTipos',
            'foreignKey' => 'tipo_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Testes', [
            'propertyName' => 'teste',
            'foreignKey' => 'teste_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Resultados', [
            'className' => 'SubtestesResultados',
            'foreignKey' => 'resultado_id',
            'joinType' => 'INNER'
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
            ->scalar('conteudo')
            ->requirePresence('conteudo', 'create')
            ->notEmpty('conteudo');

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
        $rules->add($rules->existsIn(['tipo_id'], 'Tipos'));
        $rules->add($rules->existsIn(['teste_id'], 'Testes'));
        $rules->add($rules->existsIn(['resultado_id'], 'Resultados'));

        return $rules;
    }
}

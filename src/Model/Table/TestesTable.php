<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Testes Model
 *
 * @property \App\Model\Table\TestesListasTable|\Cake\ORM\Association\BelongsTo $TestesListas
 * @property \App\Model\Table\TestesTiposTable|\Cake\ORM\Association\BelongsTo $TestesTipos
 * @property \App\Model\Table\TestesResultadosTable|\Cake\ORM\Association\BelongsTo $TestesResultados
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\Testis get($primaryKey, $options = [])
 * @method \App\Model\Entity\Testis newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Testis[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Testis|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Testis|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Testis patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Testis[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Testis findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class TestesTable extends Table
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

        $this->setTable('testes');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('TestesListas', [
            'foreignKey' => 'lista_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('TestesTipos', [
            'foreignKey' => 'tipo_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('TestesResultados', [
            'foreignKey' => 'resultado_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
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
        $rules->add($rules->existsIn(['lista_id'], 'TestesListas'));
        $rules->add($rules->existsIn(['tipo_id'], 'TestesTipos'));
        $rules->add($rules->existsIn(['resultado_id'], 'TestesResultados'));
        $rules->add($rules->existsIn(['user_id'], 'Users'));

        return $rules;
    }
}

<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Testes Model
 *
 * @property \App\Model\Table\ArtigosTable|\Cake\ORM\Association\BelongsTo $Artigos
 * @property \App\Model\Table\FerramentasTable|\Cake\ORM\Association\BelongsTo $Ferramentas
 * @property \App\Model\Table\UsuariosTable|\Cake\ORM\Association\BelongsTo $Usuarios
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
        $this->setEntityClass('App\Model\Entity\Teste');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Artigos', [
            'foreignKey' => 'artigo_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Ferramentas', [
            'foreignKey' => 'ferramenta_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Usuarios', [
            'foreignKey' => 'usuario_id',
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
            ->allowEmptyString('id', 'create');

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
        $rules->add($rules->existsIn(['artigo_id'], 'Artigos'));
        $rules->add($rules->existsIn(['ferramenta_id'], 'Ferramentas'));
        $rules->add($rules->existsIn(['usuario_id'], 'Usuarios'));

        return $rules;
    }
}

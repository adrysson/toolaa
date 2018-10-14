<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Ferramentas Model
 *
 * @property \App\Model\Table\TestesTable|\Cake\ORM\Association\HasMany $Testes
 *
 * @method \App\Model\Entity\Ferramenta get($primaryKey, $options = [])
 * @method \App\Model\Entity\Ferramenta newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Ferramenta[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Ferramenta|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Ferramenta|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Ferramenta patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Ferramenta[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Ferramenta findOrCreate($search, callable $callback = null, $options = [])
 */
class FerramentasTable extends Table
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

        $this->setTable('ferramentas');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Testes', [
            'foreignKey' => 'ferramenta_id'
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
            ->scalar('nome')
            ->maxLength('nome', 255)
            ->requirePresence('nome', 'create')
            ->notEmpty('nome');

        return $validator;
    }
}

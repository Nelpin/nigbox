<?php
namespace App\Model\Table;

use App\Model\Entity\Paise;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Paises Model
 *
 */
class PaisesTable extends Table
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

        $this->table('paises');
        $this->displayField('Codigo');
        $this->primaryKey('Codigo');
        $this->displayField('Pais');


        

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
            ->allowEmpty('Codigo', 'create')
            ->add('Codigo', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->requirePresence('Pais', 'create')
            ->notEmpty('Pais');

        $validator
            ->add('ciudades_idCiudades', 'valid', ['rule' => 'numeric'])
            ->requirePresence('ciudades_idCiudades', 'create')
            ->notEmpty('ciudades_idCiudades');

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
        $rules->add($rules->isUnique(['Codigo']));
        return $rules;
    }
}

<?php
namespace App\Model\Table;

use App\Model\Entity\Ciudade;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Ciudades Model
 *
 */
class CiudadesTable extends Table
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

        $this->table('ciudades');
        $this->displayField('idCiudades');
        $this->primaryKey('idCiudades');
        $this->displayField('Ciudad');

        

        $this->belongsTo('Paises', [
            'foreignKey' => 'Paises_Codigo',
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
            ->add('idCiudades', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('idCiudades', 'create');

        $validator
            ->requirePresence('Paises_Codigo', 'create')
            ->notEmpty('Paises_Codigo');

        $validator
            ->requirePresence('Ciudad', 'create')
            ->notEmpty('Ciudad');

        return $validator;
    }
}

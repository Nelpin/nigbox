<?php
namespace App\Model\Table;

use App\Model\Entity\PermisosRole;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PermisosRoles Model
 *
 */
class PermisosRolesTable extends Table
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

        $this->table('permisos_roles');

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
            ->add('role', 'valid', ['rule' => 'numeric'])
            ->requirePresence('role', 'create')
            ->notEmpty('role');

        $validator
            ->add('permiso', 'valid', ['rule' => 'numeric'])
            ->requirePresence('permiso', 'create')
            ->notEmpty('permiso');

        $validator
            ->add('valor', 'valid', ['rule' => 'numeric'])
            ->requirePresence('valor', 'create')
            ->notEmpty('valor');

        return $validator;
    }
}
